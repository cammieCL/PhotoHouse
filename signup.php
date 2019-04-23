<?php
    if (isset($_POST["buton_signup"]))
    {
        include ("db/conectare.php");
        $nume = $_POST["nume_sign"];
        $prenume = $_POST["prenume_sign"];
        $username = $_POST["user_sign"];
        $parola = $_POST["pass_sign"];
        $radioVal = $_POST["tip"];
        if ($radioVal == "Photographer")
            $tip = 1;
        else
            $tip = 2; 
        $parola_criptata = password_hash($parola, PASSWORD_DEFAULT);
     //   $parola_criptata = $parola;
        //criptez parola definita de user
        $sql = "SELECT * from useri WHERE username = '$username'";
        if ($r = mysqli_query($conn, $sql))
        {
             header("dashboard/index.php");
            if (mysqli_num_rows($r)) //daca s-a gasit un user cu acelasi nume
            {
                 //header("location: index.php");
                 ?><script type="text/javascript">
                      alert("Username already used!");
                 </script><?php
            }
            else{
                $sql = "INSERT INTO useri(nume, prenume, tip, username, parola) VALUES ('$nume', '$prenume', '$tip', '$username', '$parola_criptata')";
                if (mysqli_query($conn, $sql)) {
                    ?>
                    <script type = "text/javascript">
                        alert("INSERTED!!")
                    </script>
                    <?php
                    echo("Account succesfull created");
                    session_start();
                    $_SESSION['loggedin'] = true;
                    if ($tip == 1)
                        $_SESSION['photo'] = true;
                    else
                        $_SESSION['photo'] = false;
                    $_SESSION['admin'] = $username;
                    if ($tip == 1)
                       header("location: indexp.php");
                    else
                        header("location: indexlogat.php");

                } 
                else {
                    echo "Error ", $sql, "<br", mysqli_error($conn);
                    header("location: index.php");
                }       
            }
        }
        else {
            echo "Eroare la interogare";
            header("location: index.php");
        }
           
    }
?>
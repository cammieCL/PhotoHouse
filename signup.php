<?php
    if (isset($_POST["buton_signup"]))
    {
        include ("conectare.php");
        $nume = $_POST["nume_sign"];
        $prenume = $_POST["prenume_sign"];
        $username = $_POST["user_sign"];
        $parola = $_POST["pass_sign"];
        $parola_criptata = password_hash($parola, PASSWORD_DEFAULT);
        //criptez parola definita de user
        $sql = "SELECT * from useri WHERE username = '$username'";
        if ($r = mysqli_query($conn, $sql))
        {
            header("dashboard/index.php");
            if (mysqli_num_rows($r)) //daca s-a gasit un user cu acelasi nume
            {
                 header("location: index.php");
                 ?><script type="text/javascript">
                      alert("Username already used!");
                 </script><?php
            }
            else{
                $sql = "INSERT INTO useri(nume, prenume, username, parola) VALUES ('$nume', '$prenume', '$username', '$parola_criptata')";
                if (mysqli_query($conn, $sql)) {
                    echo("Account succesfull created");
                    heade("location: index.php");
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
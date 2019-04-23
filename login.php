<?php
    if (isset($_POST["user_login"]) && isset($_POST["pass_login"]))
    {
        include ("db/conectare.php");
        $username = $_POST["user_login"];
        $parola = $_POST["pass_login"];
        //criptez parola definita de user
        $sql = "SELECT * from useri WHERE username = '$username'";
        if ($r = mysqli_query($conn, $sql))
        {
            if (mysqli_num_rows($r)) //daca s-a gasit un user cu acelasi nume
            {
                $linie = mysqli_fetch_array($r);
                if (password_verify($parola, $linie[5])) {
                  //  echo("Hellllllo");
                    session_start();
                    $_SESSION['loggedin'] = true;
                    if ($linie[3] == 1)
                        $_SESSION['photo'] = true;
                    else
                        $_SESSION['photo'] = false;
                    $_SESSION['admin'] = $username;
                    if ($linie[3] == 1)
                        header("location: indexp.php");
                    else
                        header("location: indexlogat.php");
                }
                else {
                    ?><script type="text/javascript">
                          alert("Parola introdusa este gresita!");
                    </script><?php
                    //header("location:index.php");
                   // echo("Parola incorecta");
                }
            }
            else{
                ?><script type="text/javascript">
                          alert("Username doesn't exist!");
                    </script><?php
              //  echo ("Username doesn't exist!");
               // header("dashboard/photohouse/index.php");
            }
        }
        else
            echo "Eroare la interogare";
    }
?>
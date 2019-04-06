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
                if (password_verify($parola, $linie[4])) {
                    echo("Hellllllo");
                    session_start();
                    $_SESSION['admin'] = $utilizator;
                    header("location: indexlogat.php");
                }
                else {
                    echo("Nu intra ba");
                   // header("location:index.php");
                }
            }
            else{
                echo ("Username doesn't exist!");
                //header("dashboard/photohouse/index.php");
            }
        }
        else
            echo "Eroare la interogare";
    }
?>
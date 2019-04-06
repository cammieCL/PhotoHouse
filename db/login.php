<?php
    if (isset($_POST["buton_login"]))
    {
        include ("conectare.php");
        $username = $_POST["user_log"];
        $parola = $_POST["pass_log"];
        //criptez parola definita de user
        $sql = "SELECT * from useri WHERE username = '$username'";
        if ($r = mysqli_query($conn, $sql))
        {
            if (mysqli_num_rows($r)) //daca s-a gasit un user cu acelasi nume
            {
                echo ("Username already used!");
                $linie = mysqli_fetch_array($r);
                if (password_verify($parola, $linie[2])) {
                    session_start();
                    $_SESSION['admin'] = $utilizator;
                    header("location: indexlogat.php");
                }
            }
            else{
                echo ("Username doesn't exist!");
                header("dashboard/photohouse/index.php");
            }
        }
        else
            echo "Eroare la interogare";
    }
?>
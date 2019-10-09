<?php
    if (isset($_POST["schimba_parola"])) {
        include ("db/conectare.php");
        $username = $_POST["numeutilizator"];
        $pveche = $_POST["p_veche"];
        $pnoua = $_POST["p_noua"];
        $repnoua = $_POST["rep_noua"];
     //   echo($pveche);
        if (trim($pnoua) != trim($repnoua))
            echo("Parolele nu se potrivesc");
        else {
            $sql2 = "SELECT * from useri WHERE username = '$username'";
            if ($r = mysqli_query($conn, $sql2))
            {
                if (mysqli_num_rows($r)) //daca s-a gasit un user cu acelasi nume
                {
                    $linie = mysqli_fetch_array($r); 
                 //   echo("$pveche $linie[5]");
                    if (password_verify($pveche, $linie[5])) {
                        $pn = password_hash($pnoua, PASSWORD_DEFAULT);
                        $sql = "UPDATE useri set parola = '$pn' WHERE username = '$username'";
                        if ($r = mysqli_query($conn, $sql)) {
                            header("location: indexp.php");
                        }
                        else {
                            echo("Eroare la interogare");
                            header("location: index.php");
                        }
                            
                      }
                    else {
                       //  type="text/javascript">
                           echo("Parola introdusa este gresita!");
                      
                       // header("location:index.php");
                     //   echo("Parola incorecta");
                    }
                }
                else{
                    echo ("Username doesn't exist!");
                // header("dashboard/photohouse/index.php");
                }
            }
            else
                echo "Eroare la interogare";
        }

    }
?>
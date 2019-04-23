
    <form name = "schimba" method = "post" action = "">
        <input type = "text" name = "numeutilizator" placeholder = "Username" REQUIRED> <br> 
        <input type = "password" name = "p_veche" placeholder = "Old password" REQUIRED> <br> 
        <input type = "password" name = "p_noua" placeholder = "New password" REQUIRED> <br> 
        <input type = "password" name = "rep_noua" placeholder = "Repeat new password" REQUIRED> <br>
        <input type = "submit" name = "schimba_parola" value = "Change password">
    </form>
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
                            echo ("Parola modificata cu succes");
                            header("location: index.php");
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
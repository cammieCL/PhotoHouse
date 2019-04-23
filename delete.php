<?php 
    if (isset($_POST["sterg_buton"])){
        $id_poza = $_POST['sterg'];

        ?><script type="text/javascript">
           alert("Sunteti sigur ca doriti sa stergeti imaginea?");
         </script><?php

        include ("db/conectare.php");
        $sq = "SELECT * from produse WHERE id_p = '$id_poza'";
        if ($rr = mysqli_query($conn, $sq)){
            if (mysql_num_rows($r) > 0) {
                $linie = mysqli_fetch_array($r);
                $caledesters = $linie[6];
            }
            else {
                ?><script type="text/javascript">
                    alert("Eroare la interogarea de stergere!");
                 </script><?php
            }
            $sql = "DELETE FROM produse WHERE id_p = '$id_poza'";
            if ($r = mysqli_query($conn, $sql)){
                unlink('$caledesters');
                header("location:myphotos.php");
            }
            else {
                echo("Eroare la interogare");
            }
        }
        else {
            echo("Eroare la interogare");
        }
    }
?>
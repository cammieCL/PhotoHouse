<?php
    session_start();
  //  if (isset($_POST['buton_like'])){
        $id_poza =  $_POST["liked"];
        $utilizator = $_SESSION['admin'];
        $pag = $_POST['numepagina'];
        include ("db/conectare.php");
        $ssql = "UPDATE produse SET nr_likes = nr_likes - 1 WHERE id_p = '$id_poza'";
        if ($rr = mysqli_query($conn, $ssql)){
            $sqll = "DELETE FROM aprecieri WHERE user LIKE '$utilizator' AND id_poza = '$id_poza'";
            if ($rrr = mysqli_query($conn, $sqll)) {
                header("location: $pag");
            }
            else{
                echo("Eroare la a doua interogare!");
            }
        }
        else {
            echo("Eroare la interogare");
        }
   // }
?>
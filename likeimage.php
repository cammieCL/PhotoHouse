<?php
    session_start();
    if (isset($_POST['buton_like'])){
        $id_poza =  $_POST["liked"];
        $pagina = $_POST["pag"];
        include ("db/conectare.php");
        $ssql = "UPDATE produse SET nr_likes = nr_likes + 1 WHERE id_p = '$id_poza'";
        if ($r = mysqli_query($conn, $sql))
        {
            echo("AICIIIIIIIIIIII");
        } 
        else {
           // $nume = $pagina."php";
           // header("location: $nume");
           header("location: index.php");
           echo("aici");
        }
    }
?>
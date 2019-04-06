<?php
    $servername = "localhost";
    $losername = "root";
    $password = "12mii2018";
    $bdname = "photohouse";
    //Create connection
    $conn = mysqli_connect($servername, $losername, $password, $bdname);
    if (!$conn) {
        die ("Conectare esuata". mysqli_connect_error());
    }
?>
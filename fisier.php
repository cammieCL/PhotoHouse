<html>
    <head>
        <title> Poze </title>
        <link rel="stylesheet" type="text/css" href="styles/photopage.css">
    </head>
    <body>
    <?php
        include ("db/conectare.php");
        $sql = "SELECT * from produse ORDER BY denumire asc";

        if ($r = mysqli_query($conn, $sql)) {
            if (mysqli_num_rows($r) > 0) {
                echo ("<table>"); $c = 1;
                while ($linie = mysqli_fetch_array($r)) { 
                    if ($c == 1)
                        echo("<tr>");
                    echo("<td class = 'tdd'> <div class='product_image'> <img src = '$linie[7]'> </div> </td>");
                    $c++;

                    if ($c == 4) {
                        echo("</tr>");
                        $c = 1;
                    }
                }
            }
        }
    ?>
    </body>
<html>
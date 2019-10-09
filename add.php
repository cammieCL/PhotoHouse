<?php
    session_start();
    if (isset($_POST["buton_adaugare"])) {
        $nume = $_POST["nume_add"];
        $autor = $_SESSION['admin'];
        $data = date("Y-m-d");
        $uploadok = 1;  
        $caleapoza_posibila = "imagini/".basename($_FILES["fis"]['name']);
        $categ = $_POST["categorie"];

        if ($categ == "0") {
            ?> <script>
                alert("Choose a valid category");
            </script> <?php
        }
        else if ($categ == "1")
            $cate = "Travel";
        else if ($categ == "2")
            $cate = "People";
        else if ($categ == "3")
            $cate = "Tehnology";
        else if ($categ == "4")
            $cate = "Nature";
        else if ($categ == "5")
            $cate = "Fashion";
        else if ($categ == "6")
            $cate = "Arhitecture";
        else if ($categ == "7")
            $cate = "Food";
        else if ($categ == "8") 
            $cate = "Animals";
        else if ($categ == "9")
            $cate = "Culture";
        else if ($categ == "10")
            $cate = "Business";
        else if ($categ == "11")
            $cate = "Health";

        $calesite = $cate.".php";


        if (file_exists($caleapoza_posibila)) {
            echo ("Regretam, dar un fisier cu acest nume exista deja. Alege alt nume");
            $uploadok = 0;
        }
        else if ($_FILES['fis']['size'] <= 1000000000) {
            if (is_uploaded_file($_FILES['fis']['tmp_name'])) {
                move_uploaded_file($_FILES["fis"]["tmp_name"], "imagini/".$_FILES['fis']['name']);
                $caleapoza = "imagini/".$_FILES["fis"]["name"];
                $ok = 0;
    
                include ("db/conectare.php");
                $interogare = "INSERT INTO produse(denumire, data_publicarii, categorie, calea_poz, id_user) VALUES ('$nume', '$data', '$cate', '$caleapoza', '$autor')";
                if ($error = mysqli_query($conn, $interogare)) {
                    ?> <script type = "text/javascript">
                        alert("Photo added");
                        </script> <?php
                    header("location: $calesite");
                }
                else {
                    ?> <script type = "text/javascript">
                        alert("Eroare la INSERT");
                    </script> <?php 
                }
                mysqli_close($conn);
            }
            else{
                ?> <script type = "text/javascript">
                     alert("Fisierul nu s-a putut incarca. Alegeti un fisier de dimensiune mai mica");
                 </script> <?php
            }
        }
        else {
            ?> <script type = "text/javascript">
                alert("Alegeti un fisier care sa aiba marimea mai mica de 10000000 octeti");
            </script> <?php
        }
    }
?>
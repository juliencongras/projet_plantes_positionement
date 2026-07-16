<?php
    include('debug.php');
    $plant_name = $_POST['plant_name'];
    $species_name = $_POST['species_name'];
    $date_of_purchase = $_POST['date_of_purchase'];
    $water_amount = $_POST['water_amount'];
    $watering_frequency = $_POST['watering_frequency'];
    $plant_image = '';

    include('pdo.php');

    if($_FILES['plant_image']['size'] != 0){
        $file_nameimg = $_FILES['plant_image']['name'];
        $file_tmpimg = $_FILES['plant_image']['tmp_name'];
        $file=pathinfo($file_nameimg);
        $i = 1;
        $filename=$file['filename'];

        while(file_exists("images_plantes/".$filename.".".$file['extension'])){
            $filename=$file['filename']." ($i)";
            $i++;
        }

        $plant_image = "images_plantes/".$filename.".".$file['extension'];
        move_uploaded_file($file_tmpimg,"images_plantes/".$filename.".".$file['extension']);
    }

    $req = $pdo->prepare('INSERT INTO Plantes (Plante_nom, Plante_espece, Date_achat, Plante_image, Quantite_eau, 
    Frequence_arosage) VALUES (?,?,?,?,?,?);');
    $req->execute([$plant_name, $species_name, $date_of_purchase, $plant_image, $water_amount, $watering_frequency]);

    //replace 'index.php' with the name of the homepage file
    header('location: index.php');
?>
<?php 

    include_once '../database/db.php';

    $folder = $_POST['folder'];
    
    $query = "UPDATE task SET folder_id = '$folder'";

    $result = $conn->query($query);

    if($result){
        echo 'deu bom';
    }
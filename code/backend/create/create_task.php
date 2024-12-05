<?php

    include_once('../database/db.php');

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $task_name = $_POST['task_name'];
        $task_desc = $_POST['task_desc'];
        $final_date = $_POST['final_date'];
        $priority = $_POST['priority'];
        $folder = $_POST['folder'];

        if($folder === 'geral'){
            $folder = 1;
        }

        $query = "INSERT INTO task
        (task_name, task_desc, final_date, priority, folder)
        VALUES 
        ('$task_name', '$task_desc', '$final_date', '$priority', $folder)";

        $result = $conn->query($query);

        if($result){
            header('location: index.html');
            exit;
        }
    }
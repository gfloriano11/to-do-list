<?php

    include_once '../database/db.php';

    echo 'você foi atualizada!';

    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        $id = $_GET['id'];
        $task_name = $_GET['task_name'];
        $task_desc = $_GET['task_desc'];
        $final_date = $_GET['final_date'];
        $priority = $_GET['priority'];

        $query = "UPDATE task
        SET task_name = '$task_name',
        task_desc = '$task_desc',
        final_date = '$final_date',
        priority = '$priority'
        WHERE id = $id";

        $result = $conn->query($query);

        // if($result){
            
        // }

        // echo 'ID: ' . $id . ' nome: ' . $task_name . ' desc: ' . $task_desc . ' data: ' . $final_date . ' prioridade: ' . $priority ;
    }
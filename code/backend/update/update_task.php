<?php

    include_once '../database/db.php';

    echo 'você foi atualizada!';

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $id = $_POST['id'];
        $task_name = $_POST['task_name'];
        $task_desc = $_POST['task_desc'];
        $final_date = $_POST['final_date'];
        $priority = $_POST['priority'];

        $query = '';

        // echo 'ID: ' . $id . ' nome: ' . $task_name . ' desc: ' . $task_desc . ' data: ' . $final_date . ' prioridade: ' . $priority ;
    }
<?php

    include_once '../database/db.php';

    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        $id = $_GET['id'];

        $query = "SELECT *,
        DATE_FORMAT(final_date, '%Y-%m-%d')
        AS data_final FROM task
        WHERE id = $id";

        $result = $conn->query($query);

        while($row = $result->fetch_assoc()){
            $task = [
                "id" => $id,
                "task_name" => $row['task_name'],
                "task_desc" => $row['task_desc'],
                "final_date" => $row['data_final'],
                "priority" => $row['priority']
            ];

            echo json_encode($task);
        }

        $conn->close();
    }
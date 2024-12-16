<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../../../other/images/check-icon.png">
    <link rel="stylesheet" href="../../frontend/style/global.css">
    <link rel="stylesheet" href="../../frontend/style/application.css">
    <title>Erro</title>
</head>
<body>
    
</body>
</html>

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

        if ($final_date == '' || $final_date == "0000-00-00") {
            $final_date = null;
        }

        if($task_name != null && $final_date != null){
            $query = "INSERT INTO task
            (task_name, task_desc, final_date, priority, id_folder)
            VALUES 
            ('$task_name', '$task_desc', '$final_date', '$priority', $folder)";

            $result = $conn->query($query);

            if($result){

                header('location: ../../frontend/index.php');
                exit;

            } else { ?>
                <div class="flex_container">
                    <div class="flex">
                        <?php echo 'Erro:' . $conn->error; ?>
                        <a class="go_back_button" href="../../frontend/index.php">Voltar</a>
                    </div>
                </div>
<?php       }
        } else{ ?>
            <div class="flex_container">
                <div class="flex">
                    <?php echo 'Erro: Campo da Tarefa Vazio 😥'; ?>
                    <a class="go_back_button" href="../../frontend/index.php">Voltar</a>
                </div>
            </div>
<?php   }
    }
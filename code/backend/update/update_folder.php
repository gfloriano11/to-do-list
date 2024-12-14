<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../../other/images/check-icon.png">
    <link rel="stylesheet" href="../../frontend/style/global.css">
    <link rel="stylesheet" href="../../frontend/style/application.css">
    <title>Erro</title>
</head>
<body>
    
</body>
</html>

<?php

    include_once '../database/db.php';

    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        $id = $_GET['id'];
        $folder = $_GET['id_folder'];

        $query = "UPDATE task
        SET id_folder = $folder
        WHERE id = $id";

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
    }
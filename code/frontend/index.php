<?php 

    include_once '../backend/database/db.php';

    $query = "SELECT *, 
    DATE_FORMAT(final_date, '%d/%m/%Y') 
    AS data_final FROM task
    WHERE id_folder = 1";

    $result = $conn->query($query);

?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../../other/images/check-icon.png">
    <title>To do List</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="style/global.css">
    <link rel="stylesheet" href="style/application.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <!-- https://todoist.com/pt-BR -> site referencial -->
</head>
<body>
    <section id="application">
        <div class="title_container">
            <div id="title">
                <p>Tarefas</p>
            </div>
        </div>
        <section class="principal">
            <div id="add_task_container">
                <button id="add_task">
                    <div id="icon_container">
                        <p>+</p>
                    </div>
                    <div id="text_container">
                        <p>Adicionar Tarefa...</p>
                    </div>
                </button>
            </div>
        </section>
        <section class="form">
            <div class="form_container">
                <div class="form_task hide">
                    <form method="POST" action="../backend/create/create_task.php" autocomplete="off">
                        <div>
                            <div id="info">
                                <div id="name"> 
                                    <label for="task_name">Nome da Tarefa:</label>
                                    <input name="task_name" type="text">
                                </div>
                                <div id="desc">
                                    <label for="task_desc">Descrição da Tarefa:</label>
                                    <textarea name="task_desc"></textarea>
                                </div>
                                <div id="date">
                                    <label for="final_date">Data Final:</label>
                                    <input name="final_date" type="date">
                                </div>
                                <div id="priority">
                                    <label for="priority">Prioridade:</label>
                                    <select name="priority">
                                        <option>Baixa</option>
                                        <option>Média</option>
                                        <option>Alta</option>
                                    </select>
                                </div>
                                <div id="folder">
                                    <label for="folder">Pasta:</label>
                                    <select name="folder">
                                        <option value="geral">Geral</option>
                                    </select>
                                </div>
                            </div>
                            <div class="buttons">
                                <button class="cancel_button" type="button">Cancelar</button>
                                <button class="create_button">Criar Tarefa</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <section id="tasks">

            <?php

                if($result -> num_rows > 0){
                    while($row = $result->fetch_assoc()){ ?>
            <div class="task_container">
                <div class="task" data-id="<?php echo $row['id']?>">
                    <div class="vertical_center">
                        <div class="check_container">
                            <div class="check">
                                <span class="material-symbols-outlined check_icon">check</span>
                            </div>
                        </div>
                        <div class="info_container">
                            <div class="texts">
                                <div class="task_name">
                                    <p><?php echo $row['task_name']?></p>
                                </div>
                                <div class="task_desc">
                                    <p><?php echo $row['task_desc']?></p>
                                </div>
                            </div>
                            <div class="other_container">
                                <div class="priority">
                                    <p>Prioridade:</p>
                                    <p><?php echo $row['priority']?></p>
                                </div>
                                <div class="final_date">
                                    <p>Prazo:</p>
                                    <p><?php echo $row['data_final']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="icons_container">
                        <div class="edit_container">
                            <span class="material-symbols-outlined pencil">edit</span>
                        </div>
                        <div class="trash_container">
                            <span class="material-symbols-outlined trash_can">delete</span>
                        </div>
                    </div>
                </div>
            </div>
<?php               }
                }

                $conn->close();
            ?>
        </section>
    </section>
    <script src="script/add_task.js"></script>
    <script src="script/check_task.js"></script>
    <script src="script/delete_task.js"></script>
</body>
</html>
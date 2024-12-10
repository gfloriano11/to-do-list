<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../../other/images/check-icon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=check">
    <link rel="stylesheet" href="style/global.css">
    <link rel="stylesheet" href="style/application.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script async src="script/add_task.js"></script>
    <script async src="script/confirm_task.js"></script>
    <!-- https://todoist.com/pt-BR -> site referencial -->
    <title>To do List</title>
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
                                    <div>
                                        <label for="task_desc">Descrição da Tarefa:</label>
                                    </div>
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
                include_once '../backend/database/db.php';

                $query = "SELECT * FROM task";

                $result = $conn->query($query);
            ?>

            <div class="task_container">
                <div class="task">
                    <div class="check_container">
                        <div class="check">
                            <span class="material-symbols-outlined check_icon">check</span>
                        </div>
                    </div>
                    <div class="info_container">
                        <div class="texts">
                            <div class="task_name">
                                <p>oi</p>
                            </div>
                            <div class="task_desc">
                                <p>tenho que falar com o aislan sobre a questão da metalife, verificar como vai funcionar a criação do crm</p>
                            </div>
                        </div>
                        <div class="">
                            <div class="priority">
                                <p>Baixa</p>
                            </div>
                            <div class="final_date">
                                <p>07/12/2024</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
</body>
</html>
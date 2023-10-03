<!DOCTYPE html>
<html lang='ru'>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
        <link rel="stylesheet" href="src/css/index.css">
        <title>Главная</title>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="head">
                    <a class="add-btn" href="forms/CreateTask.php">Добавить задачу</a>
                </div>
                <ul class="tasks" id="tasks">
                    <?php
                    require 'db/DataBase.php';
                    $taskDB = new DataBase();
                    foreach ($taskDB -> find() as $task) {
                        echo '
                            <li class="task">
                                <p>'.$task["text"].'</p>
                                <div>
                                    <a href="forms/RefactorTask.php?id='.$task["id"].'">
                                        <img src="src/svg/edit.svg" alt="edit-icon">
                                    </a>
                                    <a href="/actions/delete.php?id='.$task["id"].'">
                                        <img src="src/svg/delete.svg" alt="delete-icon">
                                    </a>
                                </div>
                            </li>
                            ';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </body>
</html>
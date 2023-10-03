<!DOCTYPE html>
<html lang="ru">
        <head>
            <meta charset='utf-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
            <link rel="stylesheet" href="../src/css/index.css">
            <link rel="stylesheet" href="../src/css/create-task.css">
            <title>Редактирование задачи</title>
        </head>
    <body>
        <?php
            require '../db/DataBase.php';
            $taskDB = new DataBase();
            $res = $taskDB -> find_by_id($_GET['id']) -> fetch();
            echo '
                <form class="container" method="post" action="../actions/refactor.php?id='.$_GET['id'].'">
                    <div class="content task-cont">
                        <label>
                            <input name="text" class="input-task" type="text" value="'.$res['text'].'" placeholder="Введите текст...">
                        </label>
                        <div class="action-buttons">
                            <button type="submit" class="action-add">Сохранить</button>
                            <a href="../index.php" class="action-cancel">Отмена</a>
                        </div>
                    </div>
                </form>
            '
        ?>
    </body>
</html>
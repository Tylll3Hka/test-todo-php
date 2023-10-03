<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
        <link rel="stylesheet" href="../src/css/index.css">
        <link rel="stylesheet" href="../src/css/create-task.css">
        <title>Добавление задачи</title>
    </head>
    <body>
        <form class="container" method="post" action="../actions/create.php">
            <div class="content task-cont">
                <label>
                    <input id="text" name="text" class="input-task" type="text" placeholder="Введите текст...">
                </label>
                <div class="action-buttons">
                    <button type="submit" class="action-add">Добавить</button>
                    <a href="../index.php" class="action-cancel">Отмена</a>
                </div>
            </div>
        </form>
    </body>
</html>

<?php
require '../db/DataBase.php';

$text = $_POST['text'];
if (trim($text) == "")
{
    echo "Вы не ввели все значения";
    exit();
}

$taskDB = new DataBase();
$taskDB -> create($text, 0);

header('Location: /');
<?php
require '../db/DataBase.php';

if (trim($_POST['text']) == "")
{
    echo "Вы не ввели все значения";
    exit();
}

$taskDB = new DataBase();
$taskDB -> refactor($_GET['id'], $_POST['text']);

header('Location: /');
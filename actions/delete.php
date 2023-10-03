<?php
require '../db/DataBase.php';

$taskDB = new DataBase();
$taskDB -> delete($_GET['id']);

header('Location: /');
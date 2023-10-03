<?php
class DataBase extends PDO
{
    public function __construct()
    {
        $dns = "mysql:dbname=tasksdb;host=127.0.0.1";
        parent::__construct($dns, "root", "");
    }

    public function find()
    {
        return $this -> query("SELECT * FROM `tasks`");
    }

    public function create($text, $color): bool
    {
        $query = $this -> prepare("INSERT INTO `tasks` (`text`, `color`) VALUES (:text, :color)");
        return $query -> execute([
            'text' => $text,
            'color' => $color
        ]);
    }

    public function delete($id): bool
    {
        $query = $this -> prepare("DELETE FROM `tasks` WHERE `id` = ?");
        return $query -> execute([$id]);
    }

    public function find_by_id($id)
    {
        return $this -> query("SELECT * FROM `tasks` WHERE `id` = $id");
    }

    public function refactor($id, $text): bool
    {
        $query =  $this -> prepare("UPDATE `tasks` SET `text` = ? WHERE `tasks`.`id` = ?");
        return $query -> execute([$text, $id]);
    }
}
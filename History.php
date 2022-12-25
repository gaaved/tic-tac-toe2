<?php


class History
{
    private $connect;

    public function __construct()
    {
        $this->connect = new mysqli("localhost", "root", "", "tic_tac_toe");

        if ($this->connect->connect_error) {
            die("Connection failed: " . $this->connect->connect_error);
        }
    }

    public function getHistory()
    {
        return 'ffffff';
        //return $this->connect->query("SELECT * FROM `game_history`")->fetch_all(MYSQLI_ASSOC);
    }
    public function updateHistory()
    {
        return $this->connect->query("SELECT * FROM `game_history`")->fetch_all(MYSQLI_ASSOC);
    }
}
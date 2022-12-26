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
        return $this->connect->query("SELECT * FROM `game_history`")->fetch_all(MYSQLI_ASSOC);
    }
    public function insertHistory(string $res, string $setWinner)
    {
        return $this->connect->query("INSERT INTO `game_history` SET move = '" . $res . "', winner = '" . $setWinner . "'");
    }
    public function updateStateHistory(string $res)
    {
        return $this->connect->query("UPDATE `game_state` SET state = '" . $res . "' WHERE id='1'");
    }
    public function selectStateHistory()
    {
        return $this->connect->query("SELECT `state` FROM `game_state` WHERE id='1'")->fetch_all(MYSQLI_ASSOC);
    }
    public function clearStateHistory()
    {
        return $this->connect->query("UPDATE `game_state` SET state = '' WHERE id='1'");
    }
}
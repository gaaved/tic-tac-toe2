<?php
require_once 'History.php';

class Controller
{
    private $historyClass;

    public function __construct()
    {
        $this->historyClass = new History();
    }

    public function getHistory()
    {
        $res = $this->historyClass->getHistory();
        $ret = json_encode($res);
        echo $ret;
    }
    public function insertHistory()
    {
        $setMove = $_POST['moves'];
        $setWinner = $_POST['winner'];
        $res = (string)json_encode($setMove);
        $this->historyClass->insertHistory($res, $setWinner);


        echo $res;
    }
    public function updateStateHistory()
    {
        $setMove = $_POST['moves'];
        $res = (string)json_encode($setMove);
        $this->historyClass->updateStateHistory($res);


        echo $res;
    }
    public function selectStateHistory()
    {
        $res = $this->historyClass->selectStateHistory();
        echo $res[0]['state'];
    }
    public function clearStateHistory()
    {
        $this->historyClass->clearStateHistory();
    }
}

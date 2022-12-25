<?php
include('game.html');
include('History.php');

if (isset($_POST)) {
  $updateHistory = new History;
    $updateHistory->getHistory();
}






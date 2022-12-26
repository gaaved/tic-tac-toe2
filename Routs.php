<?php
require_once 'Controller.php';

$controller = new Controller();
if(isset($_POST['select'])){
    if ($_POST['select'] === 'get') {
        $controller->getHistory();
    }
    if ($_POST['select'] === 'insert') {
        $controller->insertHistory();
    }
    if ($_POST['select'] === 'update_state') {
        $controller->updateStateHistory();
    }
    if ($_POST['select'] === 'select_state') {
        $controller->selectStateHistory();
    }
    if ($_POST['select'] === 'clear_state') {
        $controller->clearStateHistory();
    }
}

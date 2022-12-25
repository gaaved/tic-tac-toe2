<?php


class History
{
    private $connect;

    public function __construct()
    {
        $this->connect = new mysqli("localhost", "root", "", "project");

        if ($this->connect->connect_error) {
            die("Connection failed: " . $this->connect->connect_error);
        }
    }

    public function getCategory()
    {
        return $this->connect->query("SELECT * FROM `categories`")->fetch_all(MYSQLI_ASSOC);
    }
}
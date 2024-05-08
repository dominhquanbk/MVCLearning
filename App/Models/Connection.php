<?php
include_once "../App/Models/Database.php";

$servername = "mysql";
$username = "root";
$password = "root";
$database = "tranining_php";

$databaseObj = new Database($servername, $username, $password, $database);
$databaseObj->connect();

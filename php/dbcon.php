<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "computer_project_1";
$table_name = "User_Data";

$dbcon = new mysqli($server_name, $user_name, $password, $db_name);
if($dbcon -> connect_errno) {
    $dbcon -> connect_error;
    exit(12);
}
?>
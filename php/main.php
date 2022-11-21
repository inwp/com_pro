<?php
require_once "dbcon.php";
if(($_SERVER['REQUEST_METHOD'] === 'GET')) {
    $uname = $_GET["uname"];
    $uemail = $_GET["uemail"];
    $ulocation = $_GET["ulocation"];
    $ucontact = $_GET["ucontact"];
}
else if($_SERVER['REQUEST_METHOD'] == "POST") {
    $uname = $_POST["uname"];
    $uemail = $_POST["uemail"];
    $ulocation = $_POST["ulocation"];
    $ucontact = $_POST["ucontact"];
}
$dbcon -> query("insert into $table_name (uname, uemail, ulocation, ucontact) values (\"$uname\", \"$uemail\", \"$ulocation\", \"$ucontact\");");
$dbcon -> query("select * from $table_name;");
include "display.php";
?>
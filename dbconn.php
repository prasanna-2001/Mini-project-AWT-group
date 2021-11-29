<?php
$db = mysqli_connect("localhost", "root","","databasenew");
if(!$db)
{
    die("Connection failed: ".mysqli_connect_errno());
}
?>
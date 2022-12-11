<?php 
$servername = "localhost";
$database = "usersTable";
$adminName = "root";
$adminPass = "";
// Создаем соединение
$conn = mysqli_connect($servername, $adminName, $adminPass, $database);
// Проверяем соединение
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//printf( "Connected successfully");

?>
<?php 
$servername = "localhost";
$database = "usersTable";
$adminName = "smallAdmin";
$adminPass = "123";
// Создаем соединение
$conn = mysqli_connect($servername, $adminName, $adminPass, $database);
// Проверяем соединение
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//printf( "Connected successfully");

?>
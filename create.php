<?php

$host = "localhost"; 
$username = "root"; 
$password = "";     


$conn = new mysqli($host, $username, $password);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$dbName = "company_management";
$sql = "CREATE DATABASE IF NOT EXISTS $dbName";
if ($conn->query($sql) === TRUE) {
    echo "Database '$dbName' created successfully.<br>";
} else {
    die("Error creating database: " . $conn->error);
}


$conn->select_db($dbName);


$tableName = "employee";
$sql = "CREATE TABLE IF NOT EXISTS $tableName (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    employee_name VARCHAR(100) NOT NULL,
    position VARCHAR(50) NOT NULL,
    salary DECIMAL(10, 2) NOT NULL,
    hire_date DATE NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table '$tableName' created successfully.";
} else {
    die("Error creating table: " . $conn->error);
}


$conn->close();
?>

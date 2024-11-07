<?php
$user = 'root';
$pass = '';
$dbname= 'company_management';
$db = new mysqli('localhost', $user, $pass, $dbname);
echo "Connected";
?>
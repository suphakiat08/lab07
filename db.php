<?php
$host = "localhost";
$user = "it58160433";
$password = "025325017";
$dbname = "it58160433";
$conn = new mysqli($host, $user, $password, $dbname);
$conn->query('SET NAMES UTF8');
if ($conn->connect_error) die($conn->connect_error);
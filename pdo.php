<?php
session_start();

$user = 'bob';
$pass = 'password';
$host = '127.0.0.1';
$db   = 'projet_plantes_positionement';

$pdo = new PDO("mysql:host=$host;dbname=$db;", $user, $pass);

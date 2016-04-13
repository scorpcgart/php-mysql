<?php
try
{
  $pdo = new PDO('mysql:host=localhost; dbname=srv67381_ijdb', 'srv67381_scorp','admin');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf-8"');
}
catch (PDOException $e)
{
  $error = 'Не удалось подключиться к серверу баз данных.';
  include 'error.html.php';
  exit();
}
?>

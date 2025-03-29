<?php
//DBと接続
$user = 'user';
$pass = 'password';

try{
$pdo = new PDO('mysql:host=db;dbname=php_2chan',$user, $pass);
//echo '接続に成功しました';
}catch(PDOException $error){
    echo $error->getMessage();
}
?>
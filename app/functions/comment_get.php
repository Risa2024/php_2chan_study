<?php
$comment_array = array();

//コメントデータをテーブルから取得
$sql = "SELECT * FROM comment";  // comments → comment に修正
$statement = $pdo->prepare($sql);
$statement->execute();

$comment_array = $statement;

//var_dump($comment_array->fetchAll());  // 取得したデータを確認
?>

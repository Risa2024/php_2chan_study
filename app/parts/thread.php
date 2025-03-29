<?php
//$title = '2ちゃんねる掲示板';
//print_r($title);
include_once ('app/database/connect.php');

include('app/functions/comment_add.php');

include('app/functions/comment_get.php');

?>


 <!-- スレッドエリア -->
 <div class="threadWrapper">
        <div class="childWrapper">
        <div class="threadTitle">
            <span>【タイトル】</span>
            <h1>2ちゃんねる掲示板を作ってみた</h1>

        </div>
        <?php include('app/parts/commentSection.php'); ?>
        <?php include('app/parts/commentForm.php'); ?>
        </div><!-- childWrapperの終了タグ -->
    </div><!-- threadWrapperの終了タグ -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2ちゃんねる掲示板</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <h1 class="title">2ちゃんねる掲示板</h1>
        <hr>
    </header>

    <!-- スレッドエリア -->
    <div class="threadWrapper">
        <div class="childWrapper">
        <div class="threadTitle">
            <span>【タイトル】</span>
            <h1>2ちゃんねる掲示板を作ってみた</h1>

        </div>
        <section>
            <article><!--記事-->
                <div class="Wrapper">
                    <div class="nameArea">
                        <span>名前：</span>
                        <p class="username">名無しさん</p>
                        <time>：2022/7/16 14:20</time>
                    </div>
                    <p class="comment">手書きのコメントです。</p>
                </div>
            </article>
        </section>
        <form class="formWrapper">
            <div>
                <input type="submit" value="書き込む">
                <label>名前：</label>
                <input type="text">
            </div>
            <div>
                <textarea class="commentTextArea"></textarea>
            </div>
        </form>
    </div>
</body>
</html>
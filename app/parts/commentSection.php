<section>
            <?php foreach($comment_array as $comment): ?>
            <article class><!--記事-->
                <div class="Wrapper">
                    <div class="nameArea">
                        <span>名前：</span>
                        <p class="username"><?php echo $comment["username"]; ?></p>
                        <time>：<?php echo $comment["post_date"]; ?></time>
                    </div>
                    <p class="comment"><?php echo $comment['body']; ?></p>
                </div>
            </article>
           <?php endforeach; ?>
</section>
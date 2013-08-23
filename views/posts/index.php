<h1>Mon blog</h1>
<?php foreach ($post as $k => $v) : ?>
    <div class = "span4 post-<?php echo $v->post_id; ?> ">
        <h2> <?php echo $v->post_title; ?> </h2>
        <p><?php echo $v->post_content;?></p>
        <p><a class="btn" href="<?php echo \app\Router::url("posts/view/id:{$v->post_id}/slug:{$v->post_slug}"); ?>">View details &raquo;</a></p>
    </div>

<?php endforeach; ?>
<?php //debug($post);?>



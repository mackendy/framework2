<?php foreach ($post as $k => $v) : ?>
    <div class = "span4 post-<?php echo $v->post_id; ?> ">
        <h1> <?php echo $v->post_title; ?> </h1>
        <p><?php echo $v->post_content;?></p>
        <p><a class="btn" href="<?php  echo \app\Router::url("posts/view/id:{$v->post_id}/slug:{$v->post_slug}"); ?>">View details &raquo;</a></p>
    </div>
<?php endforeach; ?>

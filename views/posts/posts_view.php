    <div class="span8">
        <h1><?php echo $post['post_subject']; ?></h1>
        <p>
            <?php echo $post['post_text']; ?>
        </p>
        <div>
            <span class="badge badge-success"><?php echo $post['post_created']; ?></span><div class="pull-right"><span class="label"><?php echo $post['user_id']; ?></span> <span class="label">story</span> <span class="label">blog</span> <span class="label">personal</span></div>
        </div>
    </div>
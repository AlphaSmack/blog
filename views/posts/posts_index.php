<?foreach($posts as $post):?>
<div class="span8">
    <h1><?=$post['post_subject']?>a</h1>
    <p>
        <?=$post['post_text']?>b
    </p>
    <div>
        <span class="badge badge-success"><?=$post['post_created']?>c</span><div class="pull-right"><span class="label"><?=$post['user_id']?></span> <span class="label">story</span> <span class="label">blog</span> <span class="label">personal</span></div>
    </div>
</div>
<?endforeach?>
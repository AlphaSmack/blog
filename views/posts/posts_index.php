<?foreach( $posts as $post ):?>
    <h1 class="title">
        <a href="<?=BASE_URL?>posts/view/<?=$post['post_id']?>"><?=$post['post_subject']?></a>
        <button type="button" class="close" aria-hidden="true">×</button>
    </h1>
    <div class="post">
        <p>
            <?=$post['post_text']?>
        </p>
        <? if(!empty($tags[$post['post_id']])): foreach ($tags[$post['post_id']] as $tag):?>
            <a href="tags/view/<?=$tag?>"><span class="label" style="background-color: #5bc0de"><?=$tag?></span></a> <?endforeach; endif?>
    </div>
<?endforeach?>
</br>
 </hr>

<?php if ($auth->logged_in == true): ?>

<div  style="border-bottom: 1px solid; margin: 10px 0px 10px 0px;"></div>

<form class="form-inline" method="post" role="form">
    <div class="form-group">
        <input class="form-control" type="text" placeholder="Pealkiri" name="data[post_subject]"/>

    </div>
    <br>
    <textarea name="data[post_text]" style="width: 500px; height:150px; margin: 10px 0px 10px 0px; border-radius: 5px;" ></textarea>
    <br>
    <div class="form-group">
        <button class="btn btn-default" type="submit">Add</button>
    </div>
</form>

<?php endif; ?>

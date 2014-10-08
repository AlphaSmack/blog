<?foreach( $posts as $post ):?>
<div class="span8">
    <h1>
        <a href="<?=BASE_URL?>posts/view/<?=$post['post_id']?>">
            <?=$post['post_subject']?>
        </a>
    </h1>
    <p>
        <?=$post['post_text']?>
    </p>
    <div>
        <span class="badge badge-success">Posted <?=$post['post_created']?> by <?=$post['username']?></span>
        <div class="pull-right">
            <span class="label"></span>
                <span class="label">
                    <?foreach ($tags[$post['post_id']] as $tag):?>
                        <a href="tags/view/<?= $tag['tag_id'] ?>/<?= $tag['tag_name'] ?>"><span class="label" style="background-color: #5bc0de"><?=$tag['tag_name'] ?></span></a>
                    <? endforeach?>
                </span>
            </div>
    </div>
</div>
<?endforeach?>

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

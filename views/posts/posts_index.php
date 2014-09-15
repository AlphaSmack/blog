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
        <span class="badge badge-success">Posted <?=$post['post_created']?></span>
            <div class="pull-right">
                <span class="label"><?=$post['user_id']?></span>
                <span class="label">
                    <?foreach ($tags[$post['post_id']] as $tag):?>
                        <a href="#"><span class="label" style="background-color: #5bc0de"><?=$tag?></span></a>
                    <? endforeach?>
                </span>
                <span class="label">blog</span>
                <span class="label">personal</span>
            </div>
    </div>
</div>
<?endforeach?>

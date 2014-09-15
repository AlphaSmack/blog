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
<?foreach ($comments as $comment): ?>
    <div class="commentBox">
        <ul class="commentList">
            <li>
                <div class="commenterImage">
                    <img src="http://lorempixel.com/50/50/people/6" />
                </div>
                <div class="commentText">
                    <?=$comment['com_created']?>
                    <?=$comment['com_author']?>
                    <p><?=$comment['com_text']?></p>
                </div>
            </li>
        </ul>
        <form class="form-inline" method="post" role="form">
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Your comments" name="data[comment_text]"/>
            </div>
            <div class="form-group">
                <button class="btn btn-default" type="submit">Add</button>
            </div>
        </form>
    </div>
<?endforeach ?>
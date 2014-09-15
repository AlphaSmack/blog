<div class="span8">
    <h1><?=$post['post_subject']?></h1>
    <p>
        <?=$post['post_text']?>
    </p>
    <div style="border-bottom: 1px solid; padding-bottom: 5px;">
        <span class="badge badge-success">Posted <?=$post['post_created']?> by <?=$post['username']?></span>
            <div class="pull-right">
                <span class="label"></span>
                <span class="label">
                    <?foreach ($tags as $tag):?>
                        <a href="#"><span class="label label-info">
                        <?=$tag['tag_name']?></span></a>

                    <?endforeach?>
                </span>
            </div>
    </div>
</div>
<br>
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
                <input class="form-control" type="text" placeholder="Your comments" name="data[com_text]"/>
            </div>
            <div class="form-group">
                <button class="btn btn-default" type="submit">Add</button>
            </div>
        </form>
    </div>
<?endforeach ?>
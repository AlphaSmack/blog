<!DOCTYPE>
<html>
<?php
    foreach($posts as $post){

<div class="span8">
    <h1>echo $post['post_subject']</h1>
    <p> echo $post['post_text']</p>
    <div>
        <span class="badge badge-success"> echo $post['post_created']</span><div class="pull-right"><span class="label"> echo $post['user_id']</span> <span class="label">story</span> <span class="label">blog</span> <span class="label">personal</span></div>
    </div>
</div>
}
?>
</html>
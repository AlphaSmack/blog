<?foreach( $tags as $tag ):?>
    <div class="list-group">
        <a href="#" class="list-group-item active">
            <?=$tag['tag']?>
        </a>
    </div>
<?endforeach?>
<?foreach( $tags as $tag ):?>
    <div class="list-group">
        <a href="#" class="list-group-item active"></a>
        <a href="#" class="list-group-item"><?=BASE_URL?>tags/view/<?=$tag['tag_id']?>"><?=$tags['tag_name']?></a>
    </div>
<?endforeach?>
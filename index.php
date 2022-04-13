<?php
    include_once('templates/header.php');
?>
    <main>
        <div class="title-container">
            <h1>Blog Hora de Codar</h1>
            <p>O seu blog de programação!</p>
        </div>
        <div id="posts-container">
            <?php foreach($posts as $post):?>
                <div class="post-box">
                    <a href="<?=$BASE_URL?>post.php?id=<?=$post['id']?>"><img src="<?=$BASE_URL?>/img/<?=$post['img']?>" alt=""></a>
                    
                    <h2 class="post-title">
                        <a href="<?=$BASE_URL?>post.php?id=<?=$post['id']?>"><?=$post['title']?></a>
                    </h2>
                    <p class="post-description"><?=$post['description']?></p>
                    <div class="tags-container">
                        <?php foreach($post['tags'] as $post_tag):?>
                            <a href="#"><?=$post_tag?></a>
                        <?php endforeach;?>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </main>
<?php
    include_once('templates/footer.php');
?>

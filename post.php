<?php
    include_once('templates/header.php');
    include_once('templates/footer.php');
    if(isset($_GET['id'])){
        $postId = $_GET['id'];
        $currentPost;
    }
    foreach($posts as $post){
        if($post['id'] == $postId){
            $currentPost = $post;
        }
    }
?>


<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?=$currentPost['title']?></h1>
        <p id="post-description"><?=$currentPost['description']?></p>
        <div class="img-container">
            <img src="<?=$BASE_URL?>/img/<?=$currentPost['img']?>" alt="">
        </div>
        <p class="post-content">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. At, debitis cupiditate minima, ea, obcaecati corrupti quaerat placeat excepturi enim quasi maiores expedita voluptatum consequatur dolores aut dolorum architecto magni asperiores.
        Quasi nesciunt velit sequi et nemo possimus odit voluptas nam dicta ipsam expedita eos cum, adipisci consequatur in iste? Repellat mollitia perspiciatis officia similique, exercitationem quia cum culpa veniam ullam.
        Velit, error, esse cum blanditiis qui corrupti alias consequatur ab omnis voluptate molestias magnam. Hic dolores, assumenda beatae totam vitae fugiat rerum atque? Eos nam, libero non illum placeat harum?
        Odio minus debitis sint dolorem excepturi eum ab recusandae. At, sed odio beatae, magnam autem explicabo sunt iure magni nesciunt, delectus mollitia cumque. Laudantium adipisci aliquid fugiat, doloremque rem quo.
        Quo ullam eos mollitia unde placeat similique perferendis velit delectus voluptatibus excepturi dignissimos adipisci sapiente non dolorem sit, doloremque repudiandae praesentium optio expedita molestias nostrum reiciendis. Sit consectetur debitis animi!
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. At, debitis cupiditate minima, ea, obcaecati corrupti quaerat placeat excepturi enim quasi maiores expedita voluptatum consequatur dolores aut dolorum architecto magni asperiores.
        Quasi nesciunt velit sequi et nemo possimus odit voluptas nam dicta ipsam expedita eos cum, adipisci consequatur in iste? Repellat mollitia perspiciatis officia similique, exercitationem quia cum culpa veniam ullam.
        Velit, error, esse cum blanditiis qui corrupti alias consequatur ab omnis voluptate molestias magnam. Hic dolores, assumenda beatae totam vitae fugiat rerum atque? Eos nam, libero non illum placeat harum?
        Odio minus debitis sint dolorem excepturi eum ab recusandae. At, sed odio beatae, magnam autem explicabo sunt iure magni nesciunt, delectus mollitia cumque. Laudantium adipisci aliquid fugiat, doloremque rem quo.
        Quo ullam eos mollitia unde placeat similique perferendis velit delectus voluptatibus excepturi dignissimos adipisci sapiente non dolorem sit, doloremque repudiandae praesentium optio expedita molestias nostrum reiciendis. Sit consectetur debitis animi!
        </p>
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
        <?php foreach($currentPost['tags'] as $post_tag):?>
            <li>  
                <a href="#"><?=$post_tag?></a>
            </li>  
            <?php endforeach;?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
        <?php foreach($categories as $categoria):?>
            <li> 
                <a href="#"><?=$categoria?></a>
            </li>  
            <?php endforeach;?>
        </ul>
    </aside>
</main>


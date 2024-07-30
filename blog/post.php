<?php
    include_once("tamplates/header.php");

    if(isset($_GET['id'])){

        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {

            if($post['id']== $postId){
                $currentPost = $post;
            }
        }
    }
?>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title']?> </h1>
            <p id="post-description"> <?= $currentPost['description']?> </p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?=$currentPost['img']?>" alt="<? $currentPost['title']?>">
        </div>
        <p class="post-content"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora ipsum harum officiis cupiditate corporis iusto sunt id libero voluptas? Consequuntur, illo dolores quisquam pariatur officia molestias illum alias animi ab!
        Mollitia, nemo ipsam eaque a voluptatum et nulla impedit quisquam beatae itaque dolores voluptatibus cupiditate odit error doloribus omnis in ratione quasi. Perspiciatis, molestias hic. Harum doloremque quas porro deleniti.
        Officia consequuntur odio veniam reiciendis aut tempora amet odit saepe nesciunt a, exercitationem deserunt dolores quaerat. Tempora, accusantium. Quasi ducimus ipsam commodi porro doloremque cupiditate a fuga, iste cumque quis!
        Veritatis qui aliquid ipsam dicta similique, odit iure possimus veniam quos aut rerum alias, ducimus, maiores optio deleniti est obcaecati labore laboriosam sequi quae accusamus ullam! Dolorum sint esse eligendi!
        Odio, amet officia perspiciatis hic atque necessitatibus pariatur modi voluptates assumenda aut! Perspiciatis temporibus perferendis similique modi, minus esse excepturi officia alias provident porro voluptatibus architecto, sequi molestias debitis. Aperiam?</p>
        <p class="post-content"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora ipsum harum officiis cupiditate corporis iusto sunt id libero voluptas? Consequuntur, illo dolores quisquam pariatur officia molestias illum alias animi ab!
        Mollitia, nemo ipsam eaque a voluptatum et nulla impedit quisquam beatae itaque dolores voluptatibus cupiditate odit error doloribus omnis in ratione quasi. Perspiciatis, molestias hic. Harum doloremque quas porro deleniti.
        Officia consequuntur odio veniam reiciendis aut tempora amet odit saepe nesciunt a, exercitationem deserunt dolores quaerat. Tempora, accusantium. Quasi ducimus ipsam commodi porro doloremque cupiditate a fuga, iste cumque quis!
        Veritatis qui aliquid ipsam dicta similique, odit iure possimus veniam quos aut rerum alias, ducimus, maiores optio deleniti est obcaecati labore laboriosam sequi quae accusamus ullam! Dolorum sint esse eligendi!
        Odio, amet officia perspiciatis hic atque necessitatibus pariatur modi voluptates assumenda aut! Perspiciatis temporibus perferendis similique modi, minus esse excepturi officia alias provident porro voluptatibus architecto, sequi molestias debitis. Aperiam?</p>
</div>
<aside id="nav-container">
        <h3 id="tags-title"> Tags </h3>
        <ul class="tag-list">
            <?php foreach($currentPost['tags'] as $tag){?>
                <li> <a href="a"> <?= $tag ?> </a></li>
            <?php } ?>
        </ul>
        <h3 id="categorias-title"> Categorias</h3>
        <ul id="categorias-list">
            <?php foreach($categorias as $category){ ?>
                <li> <a href="a"><?= $category ?> </a> </li>
                <?php } ?>
        </ul>
    </aside>
    </main>
    
<?php
    include_once("tamplates/footer.php")
?>
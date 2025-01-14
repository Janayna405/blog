<?php
    include_once ("tamplates/header.php");
    
?>
   <main>
    <div id="title-container">
        <h1>Blog</h1>
        <p>Soluções</p>
    </div>

    <div id="posts-container">
        <?php foreach ($posts as $post){ ?>
            <div class="post-box">
                <img src="<?= $BASE_URL ?>/img/<?= $post['img'] ?>" alt="<?= $post['title'] ?>">
                <h2 class="post-title">
                    <a href="<?= $BASE_URL ?>/post.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a>
                </h2>
                <p class="post-description"><?= $post['description'] ?></p>
                <div class="tags-container">
                    <?php foreach($post['tags'] as $tag){ ?>
                        <a href="a"><?= $tag ?></a>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
        </div>
    </main>
<?php
    include_once ("tamplates/footer.php");
?>
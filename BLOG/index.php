<?php
include_once("helpers/url.php");
include_once("data/posts.php");
include_once("templates/header.php");
?>

<main>
    <div id="title-container">
        <h1>BLOG DAS EEVEE</h1>
    </div>    
    <div id="posts-container">
        <?php foreach ($posts as $post): ?>
            <div class="post-box">
                <img src="<?= $BASE_URL ?>/img/<?= $post['img'] ?>" alt="<?= $post['titulo'] ?>">
                <h2 class="post-title">
                    <a href="<?= $BASE_URL ?>post.php?id=<?= $post['id']?>"><?= $post['titulo'] ?></a>
                </h2>
                <p class="post-description"><?= $post['descricao'] ?></p>
                <div class="tags-container">
                    <?php foreach ($post['tipos'] as $tipo): ?>
                        <a href="#"><?= $tipo ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</main>

<?php
include_once("templates/footer.php");
?>

<?php
    include_once("templates/header.php");
    include_once("data/posts.php");

    if (isset($_GET['id'])) {
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {
            if ($post['id'] == $postId) {
                $currentPost = $post;
            }
        }
    }
?>

<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['titulo'] ?></h1>
        <p id="post-description">
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['titulo'] ?>">
        </div>
            <p class="post-content"> Eevee é um Pokémon adorável e versátil, conhecido por sua capacidade única de evoluir para várias formas diferentes. Com uma pelagem macia e uma personalidade dócil, é um favorito entre os treinadores Pokémon. Sua adaptação às diferentes condições ambientais e a variedade de evoluções que pode alcançar o tornam um companheiro valioso em diversas situações.</p>
        </div>
</main>
    <aside id="nav-container">
        <h3 id="tag-titles">
            Tags
        </h3>
        <ul class="tag-list">
            <?php foreach ($currentPost['tipo'] as $tipo): ?>
                <li>
                    <a href="#"><?= $tipo ?></a>
                </li>
                <a href="#"><?= $tipo ?></a>
            <?php endforeach; ?>
        </ul>
    </aside>
<?php
    include_once("templates/footer.php");
?>

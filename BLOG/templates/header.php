<?php
    include_once("helpers/url.php");
    include_once("data/posts.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css">
</head>
<body>
    <header>    
        <a href="<?= $BASE_URL ?>" id="logo">
            <img src="<?= $BASE_URL ?>/img/eevee_icon.png" alt="Blog ">
        </a>

        <nav>
            <ul id="navbar">
                <li>
                    <a href="<?= $BASE_URL ?>" class="nav-link"> Home </a>
                </li>
            </ul>
        </nav>
    </header>

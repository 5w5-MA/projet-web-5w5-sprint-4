<?php

/**
 * Template Name: futur
 */
?>

<?php get_header(); ?>
<div id="bg">
    <canvas id="canvas1"></canvas>
    <canvas></canvas>
    <canvas></canvas>
</div>
<main class="mainFutur">

    <section class="intro_dessus">
        <div class="TitreSectionFutur">
            <div class="Partie1">
                <h1 class="TitreFutur">Possibilités d'Avenir</h1>
            </div>
        </div>

        <img class="image_titre" src="<?php echo  wp_get_attachment_url(84); ?>" alt="">

    </section>

    <section class="intro">
        <p class="ExplicationFutur">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit aliquid pariatur facilis eveniet accusantium sequi non quae, fugit ipsum veritatis eligendi iure modi a voluptas cum at quos ducimus numquam.</p>
    </section>

    <section class="options">
        <div class="option1">Stage</div>
        <div class="option2">Université</div>
        <div class="option3">Emploi</div>
    </section>

    <section class="container">
        <section class="vide">
            image
        </section>

        <section class="content">
            <img class="img_content" src="../images/Fichier 1.png" alt="">
        </section>
    </section>

    <script src="../js/futur.js"></script>
</main>
<?= get_footer(); ?>
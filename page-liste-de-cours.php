<?php

/**
 * Template Name: liste de cours
 */
get_header(); ?>
<div id="bg">
    <canvas id="canvas1"></canvas>
    <canvas></canvas>
    <canvas></canvas>
</div>
<main id="cours" class="pageCours">
    <section class="coursPrincipale">
        <h1><?php the_title(); ?></h1>
        <div class="imgCours">
            <img class="imagesGeneral" src="<?php echo  wp_get_attachment_url(84); ?>" alt="">
        </div>
        <div class="txt"></div>
    </section>
    <section class="coursMenu">
        <form class="displayFlexBtn1" id="form1">
            <div class="btnSession1Wrap">
                <input type="checkbox" id="chkBtnSession1" name="category[]" value="session1">
                <label for="chkBtnSession1" class="btnSession1">Session1</label>
            </div>
            <div class="btnSession2Wrap">
                <input type="checkbox" id="chkBtnSession2" name="category[]" value="session2">
                <label for="chkBtnSession2" class="btnSession2">Session2</label>
            </div>
            <div class="btnSession3Wrap">
                <input type="checkbox" id="chkBtnSession3" name="category[]" value="session3">
                <label for="chkBtnSession3" class="btnSession3">Session3</label>
            </div>
        </form>
        <form class="displayFlexBtn2" id="form2">
            <div class="btnSession4Wrap">
                <input type="checkbox" id="chkBtnSession4" name="category[]" value="session4">
                <label for="chkBtnSession4" class="btnSession4">Session4</label>
            </div>
            <div class="btnSession5Wrap">
                <input type="checkbox" id="chkBtnSession5" name="category[]" value="session5">
                <label for="chkBtnSession5" class="btnSession5">Session5</label>
            </div>
            <div class="btnSession6Wrap">
                <input type="checkbox" id="chkBtnSession6" name="category[]" value="session6">
                <label for="chkBtnSession6" class="btnSession6">Session6</label>
            </div>
        </form>
    </section>

    <section class="listeCours">
        <?php
        // Si la requête contient des catégories, on les récupère
        if (isset($_GET['categories'])) {
            $categories = explode(',', $_GET['categories']);
        } else {
            $categories[0] = "session1";
        }

        $nbrPost = 0;

        // Paramètres de la requête pour récupérer les posts filtrés
        // $args = array(
        //     'post_type' => 'post', // On récupère les articles
        //     'posts_per_page' => 10, // Limite le nombre de posts
        //     'category__in' => $categories, // Filtrer par les catégories
        // );

        // La nouvelle requête WordPress
        $query = new WP_Query(array(
            "category_name" => strval($categories[0])
        ));

        // La boucle WordPress pour afficher les posts
        while ($query->have_posts()) {
            $query->the_post();
            $nbrPost++;
            $txtNbrPost = "chkCours" . $nbrPost;
        ?>
            <div class="cours1">
                <div class="teaserCours">
                    <h2 class="nomCours"><?php the_title() ?></h2>
                    <input type="checkbox" class="chkCours" name="<?= $txtNbrPost; ?>" id="<?= $txtNbrPost; ?>">
                    <label for="<?= $txtNbrPost; ?>" class="boutonCours">
                        <div class="btn1"></div>
                        <div class="btn2">En savoir plus</div>
                        <div class="btn3"></div>
                        <div class="btn4"></div>
                        <div class="btn5"></div>
                        <div class="btn6"></div>
                    </label>
                </div>
                <div class="infoCours" id="<?= "infoCours" . $nbrPost; ?>">
                    <div class="contenu" id="<?= "contenu" . $nbrPost; ?>">
                        <?php the_content() ?>
                    </div>
                </div>
            </div>
        <?php };
        // echo '<p>Aucun post trouvé.</p>';


        // Rétablir la requête principale
        wp_reset_postdata();
        ?>
    </section>
</main>
<?php get_footer(); ?>
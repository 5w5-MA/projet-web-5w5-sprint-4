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
<main class="pageCours">
    <section class="coursPrincipale">
        <h1><?php the_title(); ?></h1>
        <div class="imgCours">
            <img class="imagesGeneral" src="<?php echo  wp_get_attachment_url(84); ?>" alt="">
        </div>
        <div class="txt"></div>
    </section>
    <section class="coursMenu">
        <form class="displayFlexBtn1">
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
        <form class="displayFlexBtn2">
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
            $categories = [];
        }

        // Paramètres de la requête pour récupérer les posts filtrés
        // $args = array(
        //     'post_type' => 'post', // On récupère les articles
        //     'posts_per_page' => 10, // Limite le nombre de posts
        //     'category__in' => $categories, // Filtrer par les catégories
        // );

        // La nouvelle requête WordPress
        $query = new WP_Query(array(
            "category_name" => "session1"
        ));

        // La boucle WordPress pour afficher les posts
        while ($query->have_posts()) {
            $query->the_post();
        ?>
            <section class="jeu">
                <div>
                    <?php the_title();
                    ?>
                </div>
            </section>
        <?php };
        echo '<p>Aucun post trouvé.</p>';


        // Rétablir la requête principale
        wp_reset_postdata();
        ?>



        <div class="cours1">
            <div class="coursImg"></div>
            <div class="infoCours">
                <h2 class="nomCours">Création vidéo</h2>
                <div class="boutonCours">
                    <div class="btn1"></div>
                    <div class="btn2">En savoir plus</div>
                    <div class="btn3"></div>
                    <div class="btn4"></div>
                    <div class="btn5"></div>
                    <div class="btn6"></div>
                </div>
            </div>
        </div>

    </section>
</main>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Fonction pour gérer les changements dans les checkboxes
        function handleCheckboxChange(formClass) {
            const form = document.querySelector(formClass);

            // Écoute l'événement 'change' sur le formulaire
            form.addEventListener('change', function() {
                // Récupère toutes les checkboxes sélectionnées dans ce formulaire
                const checkedCategories = [];
                const checkboxes = form.querySelectorAll('input[type="checkbox"]:checked');

                // Pour chaque checkbox sélectionnée, ajoute sa valeur au tableau
                checkboxes.forEach(function(checkbox) {
                    checkedCategories.push(checkbox.value);
                });

                // Met à jour l'URL pour inclure les catégories sélectionnées
                updateURL(checkedCategories);
            });
        }

        // Fonction pour mettre à jour l'URL avec les catégories sélectionnées
        function updateURL(checkedCategories) {
            let url = new URL(window.location.href);
            if (checkedCategories.length > 0) {
                url.searchParams.set('categories', checkedCategories.join(','));
            } else {
                url.searchParams.delete('categories'); // Supprime le paramètre s'il n'y a pas de catégorie sélectionnée
            }
            window.history.replaceState(null, '', url.toString()); // Met à jour l'URL sans recharger la page
        }

        // Applique la fonction aux deux formulaires
        handleCheckboxChange('.displayFlexBtn1');
        handleCheckboxChange('.displayFlexBtn2');
    });
</script>


<?php get_footer(); ?>
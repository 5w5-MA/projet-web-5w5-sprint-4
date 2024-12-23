<?php
get_header();
?>
<!-- /////////////////Page D'ACCUEIL  ////////////////// -->

<div id="bg">
    <canvas id="canvas1"></canvas>
    <canvas></canvas>
    <canvas></canvas>
</div>

<main id="acceuil">
<div class="hautDePage" style="background-image: url('<?php 
            // Get the URL of the featured image
            if (has_post_thumbnail()) {
                echo get_the_post_thumbnail_url(null, 'full'); // 'full' can be changed to another size if needed
            } else {
                // Fallback URL if no featured image is set
                echo get_template_directory_uri() . '/path/to/default-image.jpg';
            }
        ?>');">


        <div class="txtMain">
            <h1><?php echo get_bloginfo('name'); ?></h1>
            <h2><?php echo get_bloginfo('description'); ?></h2>
            <p><?php the_content(); ?></p>

            <a href="<?php echo site_url('/liste-de-cours'); ?>">
               cours
            </a>
        </div>

        

    </div>

    <?php
        $accueilPost = new WP_Query(array(
            'category_name' => 'accueil'
        )); ?>

            <div class="description">
            <?php
            while ($accueilPost->have_posts()) {
                $accueilPost->the_post();
            ?>
                <div class="titre_APropos">
                    <h2><?php the_title(); ?></h2>
                </div>

                <div class="descriptionTim">

                    <?php the_content(); ?>

                </div>

            </div>
            <?php }; ?>
        

    <!-- decoration -->
    <div class="decoCarrousel">
        <div class="ligneCaroussel1"></div>
        <div class="ligneCaroussel2"></div>
    </div>
    <!-- carrousel-->

    <?php
    $carrousel = new WP_Query(array(
        'category_name' => 'carrousel'
    )); ?>

    <?php
    while ($carrousel->have_posts()) {
        $carrousel->the_post();
    ?>
        <section class="carrousel">
            <div>

                <?php the_content(); ?>
            </div>
        </section>
    <?php }; ?>

    <!-- decoration -->
    <div class="decoCarrousel2">
        <div class="ligneCaroussel3"></div>
        <div class="ligneCaroussel4"></div>
    </div>


    <!-- description des langues de programmation -->
    <?php
        $langProgPost = new WP_Query(array(
            'category_name' => 'langProg'
        )); ?>
    
        <div class="infoLangProg">
            <?php
            while ($langProgPost->have_posts()) {
                $langProgPost->the_post();
            ?>
            <div class="titreLangProg">
                <h2><?php the_title(); ?></h2>
            </div>
            <div class="LangProg">
                <p><?php the_content(); ?></p>
            </div>
        </div>
    <?php }; ?>


    <!-- descriptionn des logiciels utiliser au  tim -->

    <?php
        $logicielPost = new WP_Query(array(
            'category_name' => 'logiciel'
        )); ?>

            <div class="infoLogiciel">
            <?php
            while ($logicielPost->have_posts()) {
                $logicielPost->the_post();
            ?>
                <div class="titreInfoLogiciel">
                    <h2><?php the_title(); ?></h2>
                </div>
                <div class="infoLog">
                    <p><?php the_content(); ?></p>
                </div>
            </div>
    <?php }; ?>


    <!-- les pourcentages et graphisme -->
    <div class="graphisme">

        <div class="boite">
            <h2 class="titreBoite">programme TIM</h2>
            <div class="infoGraph">

                <div class="donut-chart">
                    <div class="label">
                        <h2>Tim</h2>
                    </div>
                </div>
                <div>
                    <ul class="pourcentage">
                        <li>30% - Programmation Web</li>
                        <li>30% - Création de Jeu</li>
                        <li>15% - Design</li>
                        <li>10% - Autres Médias</li>
                        <li>5% - Modélisation 3D</li>
                    </ul>
                </div>

            </div>

        </div>

    </div>

    <?php get_template_part("componants-php/bouttonInscription"); ?>

    <?php get_template_part("componants-php/barreBasPage"); ?>

</main>

<?php get_footer(); ?>
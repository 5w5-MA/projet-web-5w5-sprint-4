<?php get_header(); ?>
<div id="bg">
    <canvas id="canvas1"></canvas>
    <canvas></canvas>
    <canvas></canvas>
</div>

<main class="MaxProjetMain">

    <section class="SectionArcade">
        <div class="TitreSectionArcade">
            <div class="titreSection">
                <h2>Arcade</h2>
            </div>
        </div>
        <div class="Partie2"></div>
        <div class="Partie3"></div>
        </div>

        <?php
        $arcadePost = new WP_Query(array(
            'category_name' => 'arcade'
        )); ?>

        <section class="ListeArcade">
            <?php
            while ($arcadePost->have_posts()) {
                $arcadePost->the_post();
            ?>
                <section class="jeu">
                    <div>
                        <?php the_title();
                        ?>
                    </div>
                </section>
            <?php }; ?>
        </section>

        <section class="SectionProjet">
            <section class="Rangee1">
                <div class="FiltreSectionProjet">
                    <div class="titreSection">
                        <h2>Projet</h2>
                    </div>
                </div>

                <div class="TitreSectionProjet">
                    <div class="Partie1">
                        <h2>Filtre</h2>
                        <div class="boutonMenuProjet"> - </div>
                    </div>
                </div>
            </section>

            <div class="menuDeroulant">
                <div class="boutonFiltreProjet">Tout</div>
                <div class="boutonFiltreProjet">Design</div>
                <div class="boutonFiltreProjet">Programmation</div>
                <div class="boutonFiltreProjet">Jeu</div>
                <div class="boutonFiltreProjet">Modélisation</div>
            </div>

            <div class="Rangee2">
                <?php
                $postDesign = new WP_Query(array(
                    'category_name' => 'design',
                ));

                while ($postDesign->have_posts()) {
                    $postDesign->the_post();
                ?>
                    <div class="design galerieProjets">
                        <div class="textesProjet">
                            <p><?php the_title(); ?></p>
                            <div class="infoProjet">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('full'); // You can change 'full' to another size if needed (like 'medium' or 'large')
                        }
                        ?>
                    </div>
                <?
                }

                $postProgrammation = new WP_Query(array(
                    'category_name' => 'programmation'
                ));

                while ($postProgrammation->have_posts()) {
                    $postProgrammation->the_post();
                ?>
                    <div class="programmation galerieProjets">
                        <p><?php the_title(); ?></p>
                        <div class="infoProjet">
                            <?php the_content(); ?>
                        </div>
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('full'); // You can change 'full' to another size if needed (like 'medium' or 'large')
                        } ?>
                    </div>
                <?
                }
                $postJeu = new WP_Query(array(
                    'category_name' => 'jeu'
                ));

                while ($postJeu->have_posts()) {
                    $postJeu->the_post();
                ?>
                    <div class="jeu galerieProjets">
                        <p><?php the_title(); ?></p>
                        <div class="infoProjet">
                            <?php the_content(); ?>
                        </div>
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('full'); // You can change 'full' to another size if needed (like 'medium' or 'large')
                        } ?>
                    </div>
                <?
                }
                $postModelisation = new WP_Query(array(
                    'category_name' => 'modelisation'
                ));

                while ($postModelisation->have_posts()) {
                    $postModelisation->the_post();
                ?>
                    <div class="modélisation galerieProjets">
                        <p><?php the_title(); ?></p>
                        <div class="infoProjet">
                            <?php the_content(); ?>
                        </div>
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('full'); // You can change 'full' to another size if needed (like 'medium' or 'large')
                        } ?>
                    </div>
                <?
                }

                $postModelisation = new WP_Query(array(
                    'category_name' => 'video'
                ));

                while ($postModelisation->have_posts()) {
                    $postModelisation->the_post();
                ?>
                    <div class="video galerieProjets">
                        <p><?php the_title(); ?></p>
                        <div class="infoProjet">
                            <?php the_content(); ?>
                        </div>
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('full'); // You can change 'full' to another size if needed (like 'medium' or 'large')
                        } ?>
                    </div>
                <?
                }
                ?>

            </div>
        </section>
</main>
<?php get_footer(); ?>
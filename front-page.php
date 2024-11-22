<?php
get_header();
?>
<!-- /////////////////Page D'ACCUEIL  ////////////////// -->

<div id="bg">
    <canvas id="canvas1"></canvas>
    <canvas></canvas>
    <canvas></canvas>
</div>

<main>
    <div class="txtMain">
        <h1><?php echo get_bloginfo('name'); ?></h1>
        <h2><?php echo get_bloginfo('description'); ?></h2>
        <p>bienvenu au tim maisonneuve</p>
    </div>

    <div class="img">
        <?php
        // Display the featured image of the post, with a fallback for when no image is set
        if (has_post_thumbnail()) {
            the_post_thumbnail('full'); // You can change 'full' to another size if needed (like 'medium' or 'large')
        }
        ?>

    </div>
    <div class="boutonCours">
        <div class="btn1"></div>
        <a href="<?php echo site_url('/liste-de-cours'); ?>">
            <div class="btn2">cours</div>
        </a>
        <div class="btn3"></div>
        <div class="btn4"></div>
        <div class="btn5"></div>
        <div class="btn6"></div>
    </div>
    <div class="infoCegep">
        <div class="divPolygone">
            <div class="div1">location: 7767656 rue khdsksak</div>
        </div>
    </div>
    <div class="infoLogiciel">
        <div class="divPolygone">
            <div class="div1">img img img</div>
        </div>
    </div>
    <div class="description">
        <div class="div1">
            À propos
        </div>
        <div class="div2">
            <?php the_content(); ?>
        </div>
    </div>
    <div class="diagramme">
        <div class="divPolygone">
            <div class="div1">hgfg</div>
            <div class="div2">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
                rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur
                sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
                dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
                et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
                takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit
                amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                invidunt ut labore et dolore magna aliquyam
            </div>
        </div>
    </div>

    <div class="titreProfile">
        <div class="divPolygone">
            <div class="div1">Le profile d'un étudiant</div>
            <div></div>
        </div>
    </div>
    <div class="titreProfileVide">
        <div class="divPolygone">
            <div class="div1">asdsaf</div>
        </div>
    </div>
    <div class="logiciels">
        <div class="div1">
            Logiciels et languages
        </div>
        <div class="div2">
            <p>Les Étudiant.es de la technique apprendront à utiliser les logiciels :</p>
            <p>-Première Pro
                -After Effect
                -Illustrator
                -Photoshop
                -Maya
                -Unity
                -Substance 3D painter
                -Figma
                -Wordpress
            </p>
            <p>Et les langages de programmation :</p>
            <p>-javascript
                -C#
                -php
                -Html
                -css
                -sass
            </p>
        </div>
    </div>
    <div class="logicielsVide">
        <div class="divPolygone">
            <div class="div1">hgfg</div>
            <div class="div2">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
                rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur
                sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
                dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
                et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
                takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit
                amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                invidunt ut labore et dolore magna aliquyam
            </div>
        </div>
    </div>

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

    <?php get_template_part("componants-php/barreBasPage"); ?>

</main>

<?php get_footer(); ?>
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
    <div class="hautDePage">
        <div class="txtMain">
            <h1><?php echo get_bloginfo('name'); ?></h1>
            <h2><?php echo get_bloginfo('description'); ?></h2>
            <p>bienvenu au tim maisonneuve, Lorem ipsum dolor sit, amet consectetur adipisicing els aliquid.</p>

            <a href="<?php echo site_url('/liste-de-cours'); ?>">
            <div class="btn2">cours</div>
        </a>
        </div>

        <div class="img">
            <?php
            // Display the featured image of the post, with a fallback for when no image is set
            if (has_post_thumbnail()) {
                the_post_thumbnail('full'); // You can change 'full' to another size if needed (like 'medium' or 'large')
            }
            ?>

        </div>

        
    </div>

    <div class="description">

          <div class="titre_APropos">
              <h2>title</h2>
          </div>

          <div class="descriptionTim">
           
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi dolorem, commodi quas dignissimos voluptatem obcaecati eos expedita nulla earum nobis, tenetur ut nostrum quia cupiditate accusamus pariatur neque illum minus.</p>
       
        </div>

          <div class="graphisme">
            <div class="boite">
                <div class="imgGraph"></div>
                <div class="infoGraph">
                <ul>
                    <li>25%</li>
                    <li>30%</li>
                </ul>
                </div>
            </div>
          </div>

    </div>
    
    <div class="infoLangProg">
       <div class="titreLangProg"><h2>titre</h2></div>
       <div class="LangProg">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi rem officia repellendus id! Quae possimus corporis optio totam libero molestiae, animi aliquid provident beatae eligendi. Laboriosam ducimus at hic est!</p>
       </div>
    </div>
    <div class="infoLogiciel">
       <div class="titreInfoLogiciel"><h2>titre</h2></div>
       <div class="infoLogiciel">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi rem officia repellendus id! Quae possimus corporis optio totam libero molestiae, animi aliquid provident beatae eligendi. Laboriosam ducimus at hic est!</p>
       </div>
    </div>
    
    <div class="titreProfile">
        <div class="divPolygone">
            <div class="div1">Le profile d'un étudiant</div>
            <div></div>
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
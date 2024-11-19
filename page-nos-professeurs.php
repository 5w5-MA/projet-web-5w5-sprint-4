<?php get_header(); ?>



<body id="bodyProfs">

<main class="pageProfs">

<div class="titreSection">
    <h2><?php the_title(); ?></h2>
</div>
<div class="conteneurCentre">
  

    <?php
        $profsPost = new WP_Query(array(
            'posts_per_page' => 6,
            'category_name' => 'profs'
        )); ?>

        <section class="conteneurProfs">
            <?php
            while ($profsPost->have_posts()) {
                $profsPost->the_post();
            ?>
        <div class="carteProf">
            <div class="imageProf">
                <?php 
                    // Display the featured image of the post, with a fallback for when no image is set
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('full'); // You can change 'full' to another size if needed (like 'medium' or 'large')
                    } 
                ?>
            </div>
            <p><?php the_title(); ?></p>
        </div>

        <?php }; ?>
        

</div>

</main>
<div id="bg">
    <canvas id="canvas1"></canvas>
    <canvas></canvas>
    <canvas></canvas>
</div>
</body>
<?php get_footer(); ?>

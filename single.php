<?php get_header();

    while(have_posts()){
        the_post();?>

        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
        <p><a href="<?php echo site_url('/events'); ?>"> events home </a>
            <span>Posted on  <?php the_time('j F Y'); ?> | <?php echo get_the_category_list(','); ?></span>
        </p>
<?php 
    }
    get_footer();
?>
<?php
    get_header(); 
?>

    <h1> evenement</h1>
    <div class="blog_php">
   
      <?php
        while(have_posts()){
            the_post()?>
            <div class="post-item-blog">
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

                <div class="meta-box">
                    <p>Posted by <?php  the_author() ; ?> on  <?php the_time('j F Y'); ?> in <?php echo get_the_category_list(','); ?></p>
                </div>
                <div class="generic-content">
                    <?php the_excerpt(); ?>
                    <p><a href="<?php the_permalink(); ?>">continue reading &raquo;</a></p>
                </div>
            </div> 
        <?php } 
        echo paginate_links();
      ?>
    </div>

<?php
    
    get_footer();
?>
    


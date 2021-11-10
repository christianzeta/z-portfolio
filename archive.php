<?php get_header(); ?>

    <section id="archive-container">
    <?php 
    if(have_posts()) : while(have_posts()) : the_post();
        get_template_part( '/template-parts/content', 'archive' );
    endwhile; endif;
    ?>
    </section>

<?php get_footer(); ?>



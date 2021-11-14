<?php get_header(); ?>

    <section id="single-container">
    <?php 
    if(have_posts()) : while(have_posts()) : the_post(); 
        get_template_part( '/template-parts/content', 'article' );
    endwhile; endif;
    ?>
    </section>

<?php get_footer(); ?>
<?php get_header(); ?>
    <div id="front-page-container">
        <section id="front-page-info">
            <h1><?php the_field('title'); ?></h1>
            <p><?php the_field('text'); ?></p>
        </section>
        <section id="front-page-links">

        </section>
    </div>

<?php get_footer(); ?>
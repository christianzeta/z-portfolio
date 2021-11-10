<?php /* Template Name: About */ ?>

<?php get_header(); ?>

<div id="page-container">
    <section id="page-text">
        <h1><?php the_field('title'); ?></h1>
        <p><?php the_field('page_text'); ?></p>
    </section>
    <div id="page-image">
        <img src="<?php the_field('image'); ?>" alt="">
    </div>
</div>
<?php get_footer(); ?>
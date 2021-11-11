<?php /* Template Name: About */ ?>

<?php get_header(); ?>

<div id="about-container">
    <section id="about-text">
        <h1 class="about-title"><?php the_field('title'); ?></h1>
        <p><?php the_field('page_text'); ?></p>
    </section>
    
    <div id="about-image">
            <img src="<?php the_field('image'); ?>" alt="">
    </div>

</div>
<?php get_footer(); ?>
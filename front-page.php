<?php get_header(); ?>
    <div id="front-page-container">
        <section id="front-page-info">
            <div class="center-box">
                <h2><?php the_field('title_1'); ?></h2>
                <h1><?php the_field('title_2'); ?></h1>
            </div>
        </section>
        <section id="front-page-links">
            <div class="center-box">
                <div class="link-card">
                        <p><a href="<?php the_field('github_link')?>">GITHUB</a></p>
                </div>
                <div class="link-card middle">
                        <p><?php the_field('email')?></p>
                </div>
                <div class="link-card">
                        <p><a href="<?php the_field('linkedin')?>">LINKEDIN</a></p>
                </div>
            </div>
        </section>
    </div>

<?php get_footer(); ?>
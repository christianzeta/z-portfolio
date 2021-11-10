<?php get_header(); ?>
    <div id="front-page-container">
        <section id="front-page-info">
            <h1><?php the_field('title'); ?></h1>
            <p><?php the_field('text'); ?></p>
        </section>
        <section id="front-page-links">
            <div class="link-card">
                <div class="link-card-text">
                <h2>Github</h2>
                    <p><a href="<?php the_field('github_link')?>">View my projects on Github</a></p>
                </div>
            </div>
            <div class="link-card">
                <div class="link-card-text">
                <h2>Email</h2>
                    <p><?php the_field('email')?></p>
                </div>
            </div>
            <div class="link-card">
                <div class="link-card-text">
                <h2>LinkedIn</h2>
                    <p><a href="<?php the_field('linkedin')?>">Follow me here</a></p>
                </div>
            </div>
        </section>
    </div>

<?php get_footer(); ?>
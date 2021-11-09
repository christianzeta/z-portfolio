<article class="archive-box">
    <img src="<?php the_post_thumbnail_url(); ?>" alt="" width="100%" height="auto">
    <h1><?php the_title(); ?></h1>
    <?php the_excerpt(); ?>
    <p><a href="<?php the_permalink(); ?>">Läs mer</a></p>
</article>
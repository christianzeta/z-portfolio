
    <section id="single-info">
        <div id="single-info-left">
            <h1><?php the_title(); ?></h1>
            <p><?php the_date(); ?></p>
            <div id="tags">
                <?php the_tags(); ?>
            </div>
            <?php $github = get_post_meta($post->ID, 'github', true); ?>
            <?php if(!empty($github)){ ?>
            <p><a href="<?php the_field('github'); ?>">View On Github</a></p>
            <?php }?>
        </div>
        <div id="single-info-right">
        <?php 
                the_content();
            ?>
        </div>
    </section>


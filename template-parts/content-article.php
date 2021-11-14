
    <section id="single-info">
        <div id="single-info-left">
            <h1 class="title"><?php the_title(); ?></h1>
            <p class="date"><?php the_date(); ?></p>
            <?php if(has_tag()){ ?>
                <div class="tags">
                    <?php the_tags(); ?>
                </div>
            <?php }?>
            <?php if(has_category()){ ?>
                <div class="category">
                    <p>Kategori</p><?php the_category(); ?>
                </div>
            <?php }?>
            <?php $github = get_post_meta($post->ID, 'github', true); ?>
            <?php if(!empty($github)){ ?>
                <div class="github">
                    <p><a href="<?php the_field('github'); ?>">View On Github</a></p>
                </div>
            <?php }?>
        </div>
        <div id="single-info-right">
        <?php 
                the_content();
            ?>
        </div>
    </section>



    <section id="single-info">
        <div id="single-info-left">
            <h1><?php the_title(); ?></h1>
            <p><?php the_date(); ?></p>
            <div id="tags">
                <?php the_tags(); ?>
            </div>
        </div>
        <div id="single-info-right">
        <?php 
                the_content();
            ?>
        </div>
    </section>


<?php
get_header();
?>
<main>
    <div class="container">
        <div class="row">
            <div id="primary" class="col-xs-12">

                <?php
                if (have_posts()) :
                    while (have_posts()) :
                        the_post(); ?>
                        <div class="hero">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                            <div class="text">
                                <?php the_content(); ?>
                            </div>
                        </div>
                <?php
                    endwhile;
                else :
                    _e('Sorry, no posts matched your criteria.', 'textdomain');
                endif;
                ?>
            </div>

        </div>
    </div>
</main>
<?php
get_footer();
?>
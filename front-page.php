<!-- Hämtar headern från header.php -->
<?php get_header(); ?>
<main>
    <div class="container">
        <div class="row">
            <div id="primary" class="col-xs-12">

                <?php
                // Ser om det finns inlägg i databasen och hämtar dessa
                if (have_posts()) :
                    while (have_posts()) :
                        the_post(); ?>
                        <div class="hero">
                            <!-- hämtar bilden från inlägget -->
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                            <div class="text">
                                <!-- hämtar inläggsinnehållet -->
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
<!-- hämtar footern från footer.php -->
<?php get_footer(); ?>
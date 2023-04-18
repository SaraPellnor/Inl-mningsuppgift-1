<!-- Hämtar headern från header.php -->
<?php get_header(); ?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-sm-8 col-md-6">
                    <?php
                    // Ser om det finns inlägg i databasen och hämtar dessa
                    if (have_posts()) :
                        while (have_posts()) : the_post(); ?>

                            <h2 class="title">
                                <!-- Hämtar titeln från inlägget -->
                                <?php the_title(); ?>
                            </h2>
                            <!-- hämtar inläggsinnehållet -->
                            <?php the_content(); ?>
                    <?php
                        endwhile;
                    else :
                        _e('Sorry, no posts matched your criteria.', 'textdomain');
                    endif;
                    ?>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-6">
                    <!-- Hämtar bilden från inlägget -->
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                </div>
            </div>
    </section>
</main>
<!-- hämtar footern från footer.php -->
<?php get_footer(); ?>
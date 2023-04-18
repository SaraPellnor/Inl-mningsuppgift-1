<?php get_header(); ?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12">

                    <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post(); ?>
                            
                                <h2 class="title">
                                    <?php the_title(); ?>
                                </h2>
                                <?php the_content(); ?>
                           
                    <?php
                        endwhile;
                    else :
                        _e('Sorry, no posts matched your criteria.', 'textdomain');
                    endif;
                    ?>

                </div>
               
            </div>
    </section>
</main>
<?php get_footer(); ?>
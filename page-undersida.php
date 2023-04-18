<?php get_header(); ?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">

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
                <aside id="secondary" class="col-xs-12 col-md-3">
                    <!-- <ul class="side-menu"> -->
                        <?php
                        wp_nav_menu(array('menu' => 'undersidor', 'menu_class' => 'side-menu'));
                        ?>
                        
                    <!-- </ul> -->
                </aside>
            </div>
    </section>
</main>
<?php get_footer(); ?>
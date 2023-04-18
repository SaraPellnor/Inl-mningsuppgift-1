<!-- Hämtar headern från header.php -->
<?php get_header(); ?>
<main>
    <div class="container">
        <div class="row">
            <div id="primary" class="col-xs-12 col-md-9">
                <!-- Hämtar titeln på sidan -->
                <h1><?php the_title(); ?></h1>
                <?php
                // Ser om det finns inlägg i databasen och hämtar dessa
                if (have_posts()) :
                    while (have_posts()) :
                        the_post();
                        the_content();
                    endwhile;
                else :
                    _e('Sorry, no posts matched your criteria.', 'textdomain');
                endif;
                ?>
            </div>
            <aside id="secondary" class="col-xs-12 col-md-3">
                <!-- Hämtar menyn med undersidor och sätter en klass på menyn -->
                <?php wp_nav_menu(array('menu' => 'undersidor', 'menu_class' => 'side-menu')); ?>
            </aside>
        </div>
    </div>
</main>
<!-- hämtar footern från footer.php -->
<?php get_footer(); ?>
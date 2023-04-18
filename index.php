<?php
get_header();
?>
<main>
    <div class="container">
        <div class="row">
            <div id="primary" class="col-xs-12 col-md-9">
                <h1><?php the_title(); ?></h1>
                <?php
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
                <ul class="side-menu">
                    <?php
                    wp_nav_menu(array('menu' => 'undersidor',));
                    ?>
                </ul>
            </aside>
        </div>
    </div>
</main>
<?php
get_footer();
?>
<?php
get_header();
?>
<main>
    <div class="container">
        <div class="row">
            <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
                    the_title();
                    the_content();

                endwhile;
            else :
                _e('Sorry, no posts matched your criteria.', 'textdomain');
            endif;
            get_sidebar();
            ?>
        </div>
    </div>
</main>
<?php
get_footer();
?>
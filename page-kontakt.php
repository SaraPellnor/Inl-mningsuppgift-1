<!-- Hämtar headern från header.php -->
<?php get_header(); ?>
<main>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-8 col-md-offset-2">
					<!-- Hämtar titeln från sidan -->
					<h1> <?php the_title(); ?> </h1>
					<?php
					// Ser om det finns inlägg i databasen och hämtar dessa
					if (have_posts()) :
						while (have_posts()) : the_post();
							// hämtar inläggsinnehållet 
							the_content();
						endwhile;
					else :
						_e('Sorry, no posts matched your criteria.', 'textdomain');
					endif;
					?>
				</div>
			</div>
		</div>
	</section>
</main>
<!-- hämtar footern från footer.php -->
<?php get_footer(); ?>
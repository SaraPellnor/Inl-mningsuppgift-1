<!-- Hämtar headern från header.php -->
<?php get_header(); ?>
<main>
	<section>
		<div class="container">
			<div class="row">
				<div id="primary" class="col-xs-12 col-md-9">
					<!-- Hämtar kategorins title -->
					<h1> <?php single_cat_title(); ?> </h1>
					<?php
					// Ser om det finns inlägg i databasen och hämtar dessa
					if (have_posts()) :
						while (have_posts()) : the_post(); ?>
							<article>
								<!-- hämtar bilden från inlägget -->
								<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">

								<h2 class="title">
									<!-- Hämtar permalänken och titeln från inlägget -->
									<a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
								</h2>
								<ul class="meta">
									<li>
										<!-- Hämtar datumet som inlägget skrevs -->
										<i class="fa fa-calendar"></i> <?php echo get_the_date(); ?>
									</li>
									<li>
										<!-- Hämtar länken till författaren och namnet på författaren -->
										<i class="fa fa-user"></i> <a href=<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>> <?php the_author(); ?> </a>
									</li>
									<li>
										<i class="fa fa-tag"></i>
										<?php
										// Hämtar inläggets alla tillhörande kategorier
										$categories = get_the_category();
										if (!empty($categories)) {
											$i = 0;
											foreach ($categories as $category) {
												echo '<a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>';
												if ($i < count($categories) - 1) {
													echo ', ';
												}
												$i++;
											}
										}
										?>
									</li>
								</ul>
								<!-- hämtar inläggsinnehållet -->
								<?php the_content(); ?>
							</article>
					<?php
						endwhile;
					else :
						_e('Sorry, no posts matched your criteria.', 'textdomain');
					endif;
					?>

				</div>
				<!-- hämtar sidebar från sidebar.php -->
				<?php get_sidebar(); ?>
			</div>
	</section>
</main>
<!-- hämtar footern från footer.php -->
<?php get_footer(); ?>
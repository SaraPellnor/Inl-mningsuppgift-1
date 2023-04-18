<?php get_header(); ?>
<main>
	<section>
		<div class="container">
			<div class="row">
				<div id="primary" class="col-xs-12 col-md-9">

					<?php
					if (have_posts()) :
						while (have_posts()) : the_post(); ?>
							<article>
							<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""> 
								
								<h2 class="title">
									<a href="<?php echo get_permalink(); ?>"><?php the_title();?></a>
								</h2>
								<ul class="meta">
									<li>
										<i class="fa fa-calendar"></i> <?php echo get_the_date(); ?>
									</li>
									<li>
										<i class="fa fa-user"></i> <a href=<?php echo get_the_author_link(); ?> > <?php the_author(); ?> </a>
									</li>
									<li>
										<i class="fa fa-tag"></i>
										<?php
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
								<?php the_content(); ?>
							</article>
					<?php
						endwhile;
					else :
						_e('Sorry, no posts matched your criteria.', 'textdomain');
					endif;
					?>

				</div>
				<?php get_sidebar(); ?>
			</div>
	</section>
</main>
<?php get_footer(); ?>
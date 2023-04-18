<aside id="secondary" class="col-xs-12 col-md-3">
					<div id="sidebar">
						<ul>
							<li>
								<form id="searchform" class="searchform">
									
										<h2>Sök efter:</h2>
									<?php get_search_form(); ?>
									
								</form>
							</li>
						</ul>
						<ul role="navigation">
							<?php dynamic_sidebar('arkiv'); ?>
						</ul>
					</div>
				</aside>
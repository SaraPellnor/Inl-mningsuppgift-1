<footer id="footer">
	<div class="container">
		<div class="row top">
			<div class="col-xs-12 col-sm-6 col-md-4">
				<!-- Hämtar sidebar "about" från functions.php  -->
				<?php dynamic_sidebar('about'); ?>
			</div>
			<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
				<!-- Hämtar sidebar "contact" från functions.php  -->
				<?php dynamic_sidebar('contact'); ?>
			</div>
			<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">

				<!-- Hämtar sidebar "social" från functions.php  -->
				<?php dynamic_sidebar('social'); ?>

			</div>
		</div>
		<div class="row bottom">
			<div class="col-xs-12">
			<?php dynamic_sidebar('copywrite'); ?>
			</div>
		</div>
	</div>
</footer>
<!-- ytterligare information till footern för Wordpress -->
<?php wp_footer(); ?>
</body>

</html>
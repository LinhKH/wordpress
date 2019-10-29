<?php //get_header(); ?>
<?php get_template_part( "template-parts/header/header", "page-header" ); ?>


	<div class="body-content">
		<div class="container">
			<div class="row" style="margin-top: 30px;">
				<div class="blog-page">
					<div class="col-md-9">
            <?php while (have_posts()) : the_post(); ?>
              <?php get_template_part("template-parts/content/content", "page-content"); ?>
            <?php endwhile; ?>
					</div>
					<!-- this is right sidebar area -->
					<?php get_template_part("template-parts/sidebar/right-sidebar", "sidebar-right"); ?>
				</div>
			</div>
		</div>
	</div>

<?php //get_footer(); ?>
<?php get_template_part( "template-parts/footer/footer", "page-footer" ); ?>
<?php 
	get_header();
	include(TEMPLATEPATH.'/inc/featured.php');
	get_sidebar();
?>
<div id="main-content">
	<div class="post">
		<ul class="links">
			<?php 
				$home_cat = trim(get_option( 'origin-home-cat' ));
				$sing_cat = explode(',', $home_cat);

				(isset($sing_cat[0]) && is_numeric($sing_cat[0]) ) ? $cat1 = $sing_cat[0] : $cat1 = 9;
				(isset($sing_cat[1]) && is_numeric($sing_cat[1]) ) ? $cat2 = $sing_cat[1] : $cat2 = 11;
				(isset($sing_cat[2]) && is_numeric($sing_cat[2]) ) ? $cat3 = $sing_cat[2] : $cat3 = 8;
			?>
			<li>
				<a href="" data-tooltip=""></a>
			</li>
		</ul>
	</div>

</div>
	

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

			<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

			<div class="entry">
				<?php the_content(); ?>
			</div>

			<div class="postmetadata">
				<?php the_tags('Tags: ', ', ', '<br />'); ?>
				Posted in <?php the_category(', ') ?> | 
				<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
			</div>

		</div>

	<?php endwhile; ?>

	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
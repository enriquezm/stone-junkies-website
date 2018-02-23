<?php
	/**
	 * Single Member Page
	 *
	 * @package Solid State Blog Theme
	 */
	 get_header();
?>
<!-- Wrapper -->
<section id="wrapper">
	<header>
		<div class="inner">
			<h2><?php the_title(); ?></h2>
			<p><?php the_excerpt(); ?></p>
		</div>
	</header>

	<!-- Content -->
		<div class="wrapper">
			<div class="inner">
				<?php echo apply_filters( 'the_content', get_post_field( 'post_content', get_the_ID() )); ?>
			</div>
		</div>

</section>

<?php get_footer(); ?>

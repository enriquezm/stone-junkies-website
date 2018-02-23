<?php
	/**
	 * Template Name: Team Page
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
			<p>Climbers. Collaborators. Creators.</p>
		</div>
	</header>

	<!-- Content -->
		<div class="wrapper">
			<div class="inner">

				<?php echo apply_filters( 'the_content', get_post_field( 'post_content', get_the_ID() )); ?>

				<section class="features">
					<?php
					$args = array(
						'post_type'	=> 'member',
						'post_status' => 'publish'
					);
					$members = new WP_Query( $args );
					if($members->have_posts() ) :
					?>
					<?php while ($members->have_posts() ) : $members->the_post(); ?>
						<article>
							<h3 class="major"><?php the_title(); ?></h3>
							<p><?php the_excerpt(); ?></p>
							<a class="special" href="<?php the_permalink(); ?>">Member Details</a>
						</article>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					<?php endif; ?>

				</section>

			</div>
		</div>

</section>

<?php get_footer(); ?>

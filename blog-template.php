<?php
	/**
	 * Template Name: Blog Page
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
			<p>Our adventures, experiences, and stories.</p>
		</div>
	</header>

	<!-- Content -->
		<div class="wrapper">
			<div class="inner">

				<?php echo apply_filters( 'the_content', get_post_field( 'post_content', get_the_ID() )); ?>

				<section class="features">
					<?php
					$args = array(
						'post_type'	=> 'post',
						'post_status' => 'publish'
					);
					$blog_posts = new WP_Query( $args );
					if($blog_posts->have_posts() ) :
					?>
					<?php while ($blog_posts->have_posts() ) : $blog_posts->the_post(); ?>
            <article id="post-<?php the_ID(); ?>">
              <a href="<?php the_permalink(); ?>" class="image">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail(); ?>
                <?php endif ?>
              </a>
							<h3 class="major"><?php the_title(); ?></h3>
							<p><?php the_excerpt(); ?></p>
							<p><?php the_author(); ?></p>
							<a class="special" href="<?php the_permalink(); ?>">Read More</a>
						</article>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					<?php endif; ?>

				</section>

			</div>
		</div>

</section>

<?php get_footer(); ?>

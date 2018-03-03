<?php
	/**
	 * Landing page
	 *
	 * @package Solid State Blog Theme
	 */
	 get_header();
	 $placeholder_image_src = get_template_directory_uri() . '/assets/images/placeholder.jpg';
?>
<!-- Banner -->
	<section id="banner">
		<div class="inner">
			<div class="logo"><span class="icon fa-diamond"></span></div>
			<h2><?php bloginfo( 'name' ); ?></h2>
			<p><?php bloginfo( 'description' ); ?></p>
		</div>
	</section>

<!-- Wrapper -->
	<section id="wrapper">

		<!-- One -->
			<section id="one" class="wrapper spotlight style1">
				<div class="inner">
					<a href="#" class="image"><img src="<?php echo $placeholder_image_src; ?>" alt="" /></a>
					<div class="content">
						<h2 class="major">New Subheading</h2>
						<p>Lorem ipsum dolor sit amet, etiam lorem adipiscing elit. Cras turpis ante, nullam sit amet turpis non, sollicitudin posuere urna. Mauris id tellus arcu. Nunc vehicula id nulla dignissim dapibus. Nullam ultrices, neque et faucibus viverra, ex nulla cursus.</p>
						<a href="#" class="special">Learn more</a>
					</div>
				</div>
			</section>

		<!-- Two -->
			<!-- <section id="two" class="wrapper alt spotlight style2">
				<div class="inner">
					<a href="#" class="image"><img src="images/pic02.jpg" alt="" /></a>
					<div class="content">
						<h2 class="major">Tempus adipiscing</h2>
						<p>Lorem ipsum dolor sit amet, etiam lorem adipiscing elit. Cras turpis ante, nullam sit amet turpis non, sollicitudin posuere urna. Mauris id tellus arcu. Nunc vehicula id nulla dignissim dapibus. Nullam ultrices, neque et faucibus viverra, ex nulla cursus.</p>
						<a href="#" class="special">Learn more</a>
					</div>
				</div>
			</section> -->

		<!-- Three -->
			<!-- <section id="three" class="wrapper spotlight style3">
				<div class="inner">
					<a href="#" class="image"><img src="images/pic03.jpg" alt="" /></a>
					<div class="content">
						<h2 class="major">Nullam dignissim</h2>
						<p>Lorem ipsum dolor sit amet, etiam lorem adipiscing elit. Cras turpis ante, nullam sit amet turpis non, sollicitudin posuere urna. Mauris id tellus arcu. Nunc vehicula id nulla dignissim dapibus. Nullam ultrices, neque et faucibus viverra, ex nulla cursus.</p>
						<a href="#" class="special">Learn more</a>
					</div>
				</div>
			</section> -->

		<!-- Four -->
			<section id="four" class="wrapper alt style1">
				<div class="inner">
					<h2 class="major">Our Stories</h2>
					<p>A collection of posts written by our members. You'll find stories, photography, videos, and more documenting our journeys and experiences.</p>
					<section class="features">
						<?php if (have_posts()) : ?>
							<?php while (have_posts()) : the_post(); ?>
								<article id="post-<?php the_ID(); ?>">
									<a href="<?php the_permalink(); ?>" class="image">
										<?php if (has_post_thumbnail()) : ?>
											<?php the_post_thumbnail(); ?>
										<?php endif ?>
									</a>
									<h3 class="major"><?php the_title(); ?></h3>
									<p><?php the_excerpt(); ?></p>
									<p>By <?php the_author(); ?></p>
									<a href="<?php the_permalink(); ?>" class="special">Read more</a>
								</article>
							<?php endwhile; ?>
						<?php endif; ?>
					</section>
					<ul class="actions">
						<li><a href="<?php echo site_url('/blog'); ?>" class="button">Browse All</a></li>
					</ul>
				</div>
			</section>

	</section>

<?php get_footer(); ?>

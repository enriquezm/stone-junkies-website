<?php
/**
 * The header for this theme.
 * Solid State by HTML5 UP
 * html5up.net | @ajlkn
 * Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
 *
 * Displays all of the <head> section and everything up <section id="wrapper">
 *
 * @package Solid State Blog Theme
 */
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Solid State by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<?php wp_head(); ?>
	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="<?php echo site_url(); ?>">Solid State</a></h1>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<div class="inner">
							<h2>Menu</h2>
							<ul class="links">
								<li><a href="<?php echo site_url(); ?>">Home</a></li>
								<?php
									$pages = get_pages();
									foreach ( $pages as $page ) {
										$page_path = '<li><a href="' . get_page_link( $page->ID ) . '">';
										$page_path .= $page->post_title;
										$page_path .= '</a></li>';
										echo $page_path;
									}
								?>
								<li><a href="https://www.instagram.com/west.side.stone.junkies/">Instagram</a></li>
								<li><a href="#">Join Crew</a></li>
							</ul>
							<a href="#" class="close">Close</a>
						</div>
					</nav>

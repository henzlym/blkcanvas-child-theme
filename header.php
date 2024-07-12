<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if (is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); ?>
	<?php wp_head(); ?>
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Nokora:wght@100;300;400;700;900&display=swap" rel="stylesheet">
	<!-- END: Google Fonts -->

</head>

<body <?php body_class('theme-green portfolio--magazine'); ?> data-bs-theme="light">
	<header class="py-sm-3 py-md-5 px-0 container-lg">
		<nav class="navbar navbar-expand-lg">
			<a class="navbar-brand fw-bold d-flex align-items-center" href="<?php echo esc_url(home_url('/')); ?>">
				<svg id="fi_8918484" height="50" viewBox="20 20 60 60" width="50" xmlns="http://www.w3.org/2000/svg">
					<g fill="#1e120d">
						<circle cx="51.79" cy="39.83" r="3.75"></circle>
						<path d="m69.75 49.83c0-1.44 1.17-2.61 2.61-2.61s2.61 1.17 2.61 2.61-1.17 2.61-2.61 2.61c-1.45 0-2.61-1.17-2.61-2.61z"></path>
						<path d="m58.35 56.19c0-1.44 1.17-2.61 2.61-2.61s2.61 1.17 2.61 2.61-1.17 2.61-2.61 2.61c-1.44-.01-2.61-1.17-2.61-2.61z"></path>
						<circle cx="52.19" cy="61" r="2.21"></circle>
						<path d="m60.46 68.23c0-.94.76-1.71 1.71-1.71.94 0 1.71.76 1.71 1.71 0 .94-.76 1.71-1.71 1.71-.95-.01-1.71-.77-1.71-1.71z"></path>
						<path d="m51.01 70.85c0-.79.64-1.43 1.43-1.43s1.43.64 1.43 1.43-.64 1.43-1.43 1.43c-.79.01-1.43-.64-1.43-1.43z"></path>
						<path d="m67.94 60.94c0-1.22.99-2.21 2.21-2.21s2.21.99 2.21 2.21-.99 2.21-2.21 2.21-2.21-.99-2.21-2.21z"></path>
						<circle cx="69.75" cy="40.73" r="3.75"></circle>
						<circle cx="34.56" cy="40.73" r="3.75"></circle>
						<circle cx="61.96" cy="32.67" r="3.75"></circle>
						<circle cx="41.96" cy="32.67" r="3.75"></circle>
						<circle cx="43.21" cy="45.42" r="3.75"></circle>
						<circle cx="43.21" cy="56.19" r="3.75"></circle>
						<circle cx="32.08" cy="50.98" r="3.75"></circle>
						<circle cx="34.56" cy="60.73" r="3.75"></circle>
						<circle cx="41.96" cy="68.23" r="3.75"></circle>
						<circle cx="60.96" cy="45.42" r="3.75"></circle>
						<circle cx="51.79" cy="29.83" r="3.75"></circle>
						<circle cx="51.79" cy="49.83" r="3.75"></circle>
					</g>
				</svg>
				<?php echo bloginfo('name'); ?>
			</a>
			<?php
			$header_menu = wp_nav_menu(
				array(
					'container'            => 'nav',
					'container_class'      => 'nav-container ms-auto',
					'menu_class'           => 'menu nav flex-column flex-lg-row text-uppercase',
					'fallback_cb'          => false,
					'link_class'           => 'nav-link',
					'theme_location'       => 'primary',
					'echo'                 => false
				)
			);
			?>
			<?php if ($header_menu) : ?>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
					<div class="nav-wrapper">
						<?php echo $header_menu; ?>
					</div>
				</div>
			<?php endif; ?>
		</nav>
	</header>
	<?php wp_body_open(); ?>
	<div id="page" class="site pb-5">

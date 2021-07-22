<?php /* Template Part: Header */ ?>
<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to begin
	/* rendering the page and display the header/nav
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
	<?php bloginfo('name'); // show the blog name, from settings ?> |
	<?php is_front_page() ? bloginfo('description') : wp_title(''); // if we're on the home page, show the description, from the site's settings - otherwise, show the title of the post or page ?>
</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // We are loading our theme directory style.css by queuing scripts in our functions.php file,
	// so if you want to load other stylesheets,
	// I would load them with an @import call in your style.css
?>

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head();
// This fxn allows plugins, and Wordpress itself, to insert themselves/scripts/css/files
// (right here) into the head of your website.
// Removing this fxn call will disable all kinds of plugins and Wordpress default insertions.
// Move it if you like, but I would keep it around.
?>

</head>

<body class="site" id="
	<?php body_class();
	// This will display a class specific to whatever is being loaded by Wordpress
	// i.e. on a home page, it will return [class="home"]
	// on a single post, it will return [class="single postid-{ID}"]
	// and the list goes on. Look it up if you want more.
	?>"
>

<header id="masthead" class="site-header">
	<div class="container center">
		<hgroup class="branding">
			<section class="widget-wrapper" id="favicon">
				<div class="button_cont" align="center">
					<a class="example_b" href="add-website-here" target="_blank" rel="nofollow noopener">
						<img src="/assets/images/favicon.png" height="13vh" />
					</a>
				</div>
			</section>


			<section id="site-title">
				<h1 id="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); // Link to the home page ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); // Title it with the blog name ?>" rel="home"><?php bloginfo( 'name' ); // Display the blog name ?></a>
				</h1>
			</section>

			<section id="site-description">
				<h5 class="site-tagline">
					<?php bloginfo( 'description' ); // Display the blog description, found in General Settings ?>
				</h5>
				<h6 id="author-bio">
					<?php get_the_author_meta( 'description', 'display' ); ?>
				</h6>
			</section>

			<nav>
				<?php wp_nav_menu(
				array(
					'theme_location' => 'header',
					'menu_id'        => 'menu-2', ) ); ?>)
			</nav>

		</hgroup><!-- /brand -->

	<div class="clear"></div>
	</div><!--/container -->

</header><!-- #masthead .site-header -->

<main class="main-fluid" id="main"><!-- start the page containter -->

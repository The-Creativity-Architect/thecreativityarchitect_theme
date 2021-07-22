<?php
	/*-----------------------------------------------------------------------------------*/
	/* This file will be referenced every time a template/page loads on your Wordpress site
	/* This is the place to define custom fxns and specialty code
	/*-----------------------------------------------------------------------------------*/

// Define the version so we can easily replace it throughout the theme
define( 'THE_CREATIVITY_ARCHITECT_VERSION', 1.0 );

/*-----------------------------------------------------------------------------------*/
/*  Set the maximum allowed width for any content in the theme
/*-----------------------------------------------------------------------------------*/
if ( ! isset( $content_width ) ) $content_width = 1350;

/* textdomain */
		load_theme_textdomain( 'the_creativity_architect', get_template_directory() . '/languages' );

/* Add Rss feed support to Head section */
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		/*
		 * Enable support for Post Formats.
		 * See https://developer.wordpress.org/themes/functionality/post-formats/
		 */
		add_theme_support( 'post-formats', array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
			'gallery',
			'status',
			'audio',
			'chat'
		) );
		// Related Posts Function (call using the_creativity_architect_related_posts(); )
			function the_creativity_architect_related_posts() {
				echo '<ul id="the-creativity-architect-related-posts">';
				global $post;
				$tags = wp_get_post_tags( $post->ID );
				if($tags) {
				foreach( $tags as $tag ) {
					$tag_arr .= $tag->slug . ',';
				}
					$args = array(
						'tag' => $tag_arr,
						'numberposts' => 5, /* you can change this to show more */
						'post__not_in' => array($post->ID)
					);
					$related_posts = get_posts( $args );
					if($related_posts) {
						foreach ( $related_posts as $post ) : setup_postdata( $post ); ?>
							<li class="related_post"><a class="entry-unrelated" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
							<?php endforeach; }
					else { ?>
							<?php echo '<li class="no_related_post">' . __( 'No Related Posts Yet!', 'the_creativity_architecttheme' ) . '</li>'; ?>
						<?php }
					}
					wp_reset_postdata();
					echo '</ul>';
				} /* end the_creativity_architect related posts function */


	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

/* Let WordPress manage the document title.
* By adding theme support, we declare that this theme does not use a
* hard-coded <title> tag in the document head, and expect WordPress to
* provide it for us. */
		add_theme_support( 'title-tag' );


		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Custom Image Size
			add_image_size( 'the-creativity-architect-with-sidebar', 750, 500, true );
			add_image_size( 'the-creativity-architect-without-sidebar', 1110, 500, true );
			add_image_size( 'the-creativity-architect-featured-post', 337, 226, true );
			add_image_size( 'the-creativity-architect-recent-post', 70, 70, true );
			add_image_size( 'the-creativity-architect-banner-image', 380, 582, true );
			add_image_size( 'the-creativity-architect-about-block', 555, 330, true );
			add_image_size( 'the-creativity-architect-review-block', 630, 366, true );



/*-----------------------------------------------------------------------------------*/
/* Register main menu for Wordpress use
/*-----------------------------------------------------------------------------------*/
register_nav_menus(
	array(
		'menu-1' => esc_html__( 'Main', 'the_creativity_architect' ),
		'menu-2' => esc_html__( 'Primary', 'the_creativity_architect' ),
		'doctor' 		=> esc_html__( 'Secondary', 'the_creativity_architect' ),
		'contentcreator' 	=> esc_html__( 'Tertiary', 'the_creativity_architect' ),
	)
);

// Set up the WordPress core custom background feature.
add_theme_support(
	'custom-background',
	apply_filters(
		'the_creativity_architect_custom_background_args',
		array(
			'default-color' => 'ffffff',
			'default-image' => '',
		)
	)
);


/*-----------------------------------------------------------------------------------*/
/* Activate sidebar for Wordpress use
/*-----------------------------------------------------------------------------------*/
function the_creativity_architect_register_sidebars() {
	register_sidebar(array(				// Start a series of sidebars to register
		'id' => 'sidebar', 					// Make an ID
		'name' => 'Sidebar',				// Name it
		'description' => 'Take it on the side...', // Dumb description for the admin side
		'before_widget' => '<div>',	// What to display before each widget
		'after_widget' => '</div>',	// What to display following each widget
		'before_title' => '<h3 class="side-title">',	// What to display before each widget's title
		'after_title' => '</h3>',		// What to display following each widget's title
		'empty_title'=> '',					// What to display in the case of no title defined for a widget
		// Copy and paste the lines above right here if you want to make another sidebar,
		// just change the values of id and name to another word/name
	));
}
// adding sidebars to Wordpress (these are created in functions.php)
add_action( 'widgets_init', 'the_creativity_architect_register_sidebars' );

/*-----------------------------------------------------------------------------------*/
/* Enqueue Styles and Scripts
/*-----------------------------------------------------------------------------------*/

function the_creativity_architect_scripts()  {

	// get the theme directory style.css and link to it in the header
	wp_enqueue_style('style.css', get_stylesheet_directory_uri() . '/style.css');

	// add fitvid
	wp_enqueue_script( 'the-creativity-architect-fitvid', get_template_directory_uri() . '/js/jquery.fitvids.js', array( 'jquery' ), THE_CREATIVITY_ARCHITECT_VERSION, true );

	// add theme scripts
	wp_enqueue_script( 'the-creativity-architect', get_template_directory_uri() . '/js/theme.min.js', array(), THE_CREATIVITY_ARCHITECT_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'the_creativity_architect_scripts' ); // Register this fxn and allow Wordpress to call it automatcally in the header

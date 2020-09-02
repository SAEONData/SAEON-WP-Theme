<?php
//add menus

function register_my_menus() {
	register_nav_menu('primary-menu',__( 'Primary Menu' ));
}
add_action( 'init', 'register_my_menus' );

//add style and script files
function my_theme_enqueue_styles() {
 
    $parent_style = 'parent-style'; 
 
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;0,800;1,400&display=swap', false );
    wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/custom.js', array( 'jquery' ),'',true );
}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

//content width
if ( ! isset( $content_width ) ) {
	$content_width = 600;
}

//add title
function wpse_theme_setup() {
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'wpse_theme_setup' );

//add wp-login branding
function my_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png");
            background-size: contain;
		    height: 100px;
    		width: 100%;
			}
        	body.login{
				background-color: #fff;
			}
			body.login .button-primary {
				background: #4c74b9;
				border-color: #4c74b9;
				-webkit-box-shadow: none;
				box-shadow: none;
				color: #fff;
				text-decoration: none;
				text-shadow: none;
				border-radius: 0;
			}
			body.login .button-primary:hover,
			body.login .button-primary:active,
			body.login .button-primary:focus,
			body.login .button-primary:active:focus{
				background: #231f20;
				border-color: #231f20;
				-webkit-box-shadow: none;
				box-shadow: none;
				color: #fff;
				text-decoration: none;
				text-shadow: none;
				border-radius: 0;
			}
			body.login .message {
			border-left: 4px solid #231f20;
			}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );
function loginpage_custom_link() {
	return home_url();
}
add_filter('login_headerurl','loginpage_custom_link');
function change_title_on_logo() {
	return 'SAEON';
}
add_filter('login_headertitle', 'change_title_on_logo');

//add comment reply
function saeon_enqueue_comments_reply() {
	if( get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'comment_form_before', 'saeon_enqueue_comments_reply' );

//add feed links
add_theme_support( 'automatic-feed-links' );

//add widgets
if ( function_exists('register_sidebar') ) {

	register_sidebar(array(
	'name' => 'Footer 1',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>'
	 ));
 
	register_sidebar(array(
	'name' => 'Footer 2',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>'
	));
 
	register_sidebar(array(
	 'name' => 'Footer 3',
	 'before_widget' => '<div id="%1$s" class="widget %2$s">',
	 'after_widget' => '</div>',
	 'before_title' => '<h2>',
	 'after_title' => '</h2>'
	 ));
 
 };

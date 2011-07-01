<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,300,200&subset=latin&v2' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/screen.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/print.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/ie.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>
<body <?php body_class(); ?>>

	<header>
		<section id='wrapper' class='wrapper'>
		<section id='branding'>
			<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src='<?php bloginfo('template_url') ?>/images/logo.png' /></a>
			<ul>
			<li><a href='http://twitter.com/#!/sabinmarcu'>Twitter</a></li>
			<li><a href='http://www.facebook.com/sabinmarcu'>Facebook</a></li>
			<li><a href='https://plus.google.com/114906508097683503164/'>Google+</a></li>
			</ul>
		</section>
		<section id='twitter'>
			<?php try { $feed = new SimpleXMLElement(file_get_contents("http://twitter.com/statuses/user_timeline/sabinmarcu.xml?count=1")); $feed = $feed -> status;?>
			<h5>Latest tweet by <a href='http://twitter.com/<?php echo $feed -> user -> screen_name ?>'><?php echo $feed -> user -> name ?></a></h5>
			<blockquote><?php echo $feed -> text ?></blockquote>
			<p>via <?php echo $feed -> source ?></p>
			<?php } catch (Exception $e) {} ?>
		</section>		
		<nav id='administration'>
			<ul>
				<?php get_currentuserinfo() ;  global $user_level;  if ($user_level > 0) { ?>
				<li><a href='<?php echo wp_logout_url() ?>'>Log Out</a></li>
				<?php if ( current_user_can('manage_options') ) { ?>
				<li><a href='/wp-admin'>Administration</a></li>
				<?php } } else { ?>			
				<li><a href='<?php echo wp_login_url() ?>'>Log In</a></li>
				<li><a href='/wp-login?action=register'>Register</a></li>
				<?php } ?>
			</ul>
		</nav>
		<nav id='navigation'>
			<?php wp_nav_menu(array( 'menu' => "Top Menu" ) ); ?>			
		</nav>	
		<div class='clear: both'></div>
		</section>
	</header>
	<section id='main' class='wrapper'>		
		<section id='content'>

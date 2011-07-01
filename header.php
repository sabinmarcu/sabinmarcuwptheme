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
	
		
	
	</header>

<!--
<aside>
	<nav>
		<?php wp_nav_menu(array( 'menu' => "Main Menu" , 'link_after' => "<div class='arrow black'></div><div class='arrow white'></div>" ) ) ?>
	</nav>
</aside>
<header>
	<div class='user social'>
		<nav>
			<li><a href='http://facebook.com/sabinmarcu' id='facebook'></a></li>
			<li><a href="http://twitter.com/#/sabinmarcu" id='twitter'></a></li>
			<li><a href="http://ro.linkedin.com/in/marcusabin" id='linkedin'></a></li>
			<li><a href="http://www.last.fm/user/marcusabin" id='lastfm'></a></li>
			<li><a href="mailto:sabinmarcu@gmail.com" id='gmail'></a></li>			
		</nav>
	</div>
	<div class='user tweets'><?php	$tweet=json_decode(file_get_contents("http://api.twitter.com/1/statuses/user_timeline/sabinmarcu.json"));	echo $tweet[0]->text;	?></div>
	<div class="site supratitle"><?php bloginfo( 'description' ); ?></div>
	<div class="site title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><span id="first">Sabin</span><span id="second">Marcu</span></a></div>
</header>
<section>
-->

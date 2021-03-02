<?php
/**
 * Contains the post embed header template
 *
 * When a post is embedded in an iframe, this file is used to create the header output
 * if the active theme does not include a header-embed.php template.
 *
 * @package WordPress
 * @subpackage Theme_Compat
 * @since 4.5.0
 */

if ( ! headers_sent() ) {
	header( 'X-WP-embed: true' );
}

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<title><?php echo wp_get_document_title(); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<script data-ad-client="ca-pub-6028022250707513" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	
	<?php
	/**
	 * Prints scripts or data in the embed template head tag.
	 *
	 * @since 4.4.0
	 */
	do_action( 'embed_head' );
	?>
</head>
<body <?php body_class(); ?>>

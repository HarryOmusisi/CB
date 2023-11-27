<?php
/**
 * The header for our theme
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package FINBANK
 * @since   1.0
 * @version 1.0
 */
$options = finbank_WSH()->option();
$allowed_html = wp_kses_allowed_html( 'post' );
$icon_href = $options->get( 'image_favicon' ); 
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<script>
      (function(d){
         var s = d.createElement("script");
         /* uncomment the following line to override default position*/
         /* s.setAttribute("data-position", 1);*/
         /* uncomment the following line to override default size (values: small, large)*/
         /* s.setAttribute("data-size", "large");*/
         /* uncomment the following line to override default language (e.g., fr, de, es, he, nl, etc.)*/
         /* s.setAttribute("data-language", "null");*/
         /* uncomment the following line to override color set via widget (e.g., #053f67)*/
         /* s.setAttribute("data-color", "#2d68ff");*/
         /* uncomment the following line to override type set via widget (1=person, 2=chair, 3=eye, 4=text)*/
         /* s.setAttribute("data-type", "1");*/
         /* s.setAttribute("data-statement_text:", "Our Accessibility Statement");*/
         /* s.setAttribute("data-statement_url", "http://www.example.com/accessibility";*/
         /* uncomment the following line to override support on mobile devices*/
         /* s.setAttribute("data-mobile", true);*/
         /* uncomment the following line to set custom trigger action for accessibility menu*/
         /* s.setAttribute("data-trigger", "triggerId")*/
         s.setAttribute("data-account", "FVIgpT9JiA");
         s.setAttribute("src", "https://cdn.userway.org/widget.js");
         (d.body || d.head).appendChild(s);})(document)
 </script>
<noscript>
Please ensure Javascript is enabled for purposes of 
<a href="https://userway.org">website accessibility</a>
</noscript>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ): ?>
    <?php if($icon_href):?>
		<link rel="shortcut icon" href="<?php echo esc_url($icon_href['url']); ?>" type="image/x-icon">
		<link rel="icon" href="<?php echo esc_url($icon_href['url']); ?>" type="image/x-icon">
	<?php endif; ?>
    <?php endif; ?>
	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>> 

<?php
if ( ! function_exists( 'wp_body_open' ) ) {
		function wp_body_open() {
			do_action( 'wp_body_open' );
		}
}?>

 
<?php do_action( 'finbank_main_header' ); ?>	
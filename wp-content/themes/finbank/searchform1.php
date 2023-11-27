<?php
/**
 * Search Form template
 *
 * @package FINBANK
 * @author Theme Kalia
 * @version 1.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	die( 'Restricted' );
}
?>

<div class="search-popup__content">
    <form action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <label for="search" class="sr-only"><?php esc_html_e('search here', 'finbank'); ?></label>
        <input type="text" id="search" name="s" value="<?php echo get_search_query(); ?>" placeholder="<?php echo esc_attr__( 'Search Here...', 'finbank' ); ?>" />
        <button type="submit" aria-label="search submit" class="thm-btn">
            <i class="icon-search"></i>
        </button>
    </form>
</div>

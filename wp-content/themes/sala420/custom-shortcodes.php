<?php // Add Shortcode
function tipo_shortcode( $attr, $content ) {

	return $content;

}
add_shortcode( 'tipo', 'tipo_shortcode' );

function button_shortcode( $attr, $content = null ) {
    return '<a href="http://twitter.com/filipstefansson" class="twitter-button">' . $content . '</a>';
}
add_shortcode('button', 'button_shortcode');

?>
<?php
/**
 * Plugin Name: Mi Plugin
 * Description: Plugin para proyecto
 * Version: 1.0
 * Author: Andrey Fernández Ramírez
 */

 //Shortcode
 function button_shortcode( $atts ) {
	$atts = shortcode_atts(
		array(
			'texto' => 'Boton vacio',
			'url' => '#',
			'class' => 'button',
		),
		$atts
	);
    //crear el botón
	$button = '<a href="' . esc_attr( $atts['url'] ) . '" class="' . esc_attr( $atts['class'] ) . '">' . esc_html( $atts['texto'] ) . '</a>';
	return $button;
}
add_shortcode( 'button', 'button_shortcode' );
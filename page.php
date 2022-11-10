<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

    if(get_field("typ_strony")) {
        if(get_field("typ_strony") == "Strona główna") {
            require 'home.php';
        }else if(get_field("typ_strony") == "Oferta") {  
            require 'oferta.php';
        }
    }

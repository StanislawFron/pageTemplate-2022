<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<title>Page template</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css">
		<link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/style.css">
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
		<style>
			.heroImage__container{
			background-image: url('<?= get_field('zdjecie_glowne',9)['url']; ?>');
			}

		</style>
		<?php wp_head(); ?>
<header class="container-fluid np">
  <nav class="navbar navbar-expand-lg navbar-dark" id="fixedNavbar">
    <a class="navbar-brand smoothScroll" href="#section1"><?= get_field('brand',9); ?></a>
    <button class="navbar-toggler" id="fixedNavbarToggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
		
	<?php $menu = get_field('menu',9) ;
		  $x = 2;
	?>

	<?php 
	foreach($menu as $option){
		echo '<li class="nav-item"><a class="nav-link smoothScroll" href='."#section".$x.'>'.$option.'</a></li>';
		$x++;
	}
	?>
      </ul>
    </div>
  </nav>
</header>
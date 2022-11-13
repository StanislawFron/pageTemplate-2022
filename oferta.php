<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>
<section class="heroImage" id="section1">
  <div class="heroImage__container d-flex w-100 align-items-center justify-content-sm-start justify-content-center">
    <div class="heroImage__container--hero w-50 pl-sm-5 ml-sm-5"><div class="heroImage__hero--div text-center"><h1 class="heroImage__hero--text text-white"><?= get_field('tekst_glowny'); ?></h1></div></div>
  </div>
</section>
<section id="section2">
  <div class="container">
    <div class="row">
      <div class="d-flex justify-content-center w-100 mt-5"><h1><?= get_field('naglowek-1'); ?></h1></div>
      <div class="col-12 mt-5"><?php the_field('dlugitekst'); ?>
      </div>
      <div class="col-12 col-sm-6 mt-5 p-4"><?php the_field('krotkitekst_1'); ?>
      </div>
      <div class="col-12 col-sm-6 mt-5 p-4"><?php the_field('krotkitekst_2'); ?>
      </div>
    </div>
  </div>
</section>
<?php
get_footer();

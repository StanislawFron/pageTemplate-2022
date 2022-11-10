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


<section class="offerSlider d-flex justify-content-center flex-column align-items-center pb-5" id="section3">
  <div>
    <h2 class="mb-5 mt-5"><?= get_field('naglowek-2'); ?></h2>
</div>
  <div class="splide w-75" aria-label="Splide Basic HTML Example">
    <div class="splide__track">
      <ul class="splide__list">

    <?php 
    $ofertyWP = get_field('oferty') ;
      $x = 0;
      $y = 0;
      $oferty = [];
      $zdjecia = [];
      $opis = [];
      $btn;
      foreach($ofertyWP as $data){
        if($y==0){
          $btn = $data;
        }else{
          if($y==1){
            array_push($oferty,$data);
          }else if($y==2){
            array_push($opis,$data);
          }else{
            array_push($zdjecia,$data['url']);
            $y=0;
          }
        }
        $y++;
      }

      foreach($oferty as $data){
        echo '<li class="splide__slide"><div class="gameDiv d-flex justify-content-center"><a class="gameDiv__a" href="/oferta?id='.($x+1).'"><div class="gameDiv__a--image offer" id="offer'.$x.'"></div><h2 class="gameDiv__a--title text-center np pt-2 pb-2">'.$oferty[$x].'</h2><h3 class="gameDiv__a--description text-center np mt-2">'.$opis[$x].'</h3><div class="d-flex justify-content-center"><button class="gameDiv__a--btn mt-3">'.$btn.'</button></div></a></div></li>';
        echo '<script>$("#offer'.$x.'").css("background-image", '."'".'url("'.$zdjecia[$x].'")'."'".')</script>';
        $x++;
      }

	  ?>

      </ul>
    </div>
  </div>
</section>

<section class="contactSection position-relative" id="section4" >
  <div class="contactHeader d-flex justify-content-center">
      <h1 class="hero__textDiv--text mb-3 mt-3"><?= get_field('naglowek-3'); ?></h1>
</div>

<div class="mapouter w-100">
  <div class="row d-flex justify-content-center np">
  <div class="gmap_canvas w-100"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;width:1080px;}</style><a href="https://www.embedgooglemap.net"></a></div>
    <div class="contact row col-12 col-md-3">
            <div class="contact__formDiv d-flex justify-content-center">
                <form class="contact__formDiv--form col-12 pt-2 pb-4 row">
                    <div class="formDiv__form--title d-flex justify-content-center text-center col-12 mt-3"><h3><?= get_field('formularz-tytul'); ?></h3></div>
                    <div class="formDiv__form--input col-12 col-sm-6 d-flex justify-content-md-start justify-content-center p-3 p-md-0 mt-md-5 mt-3"><input class="p-3" type="text" placeholder="<?= get_field('formularz-pole1'); ?>"/></div>
                    <div class="formDiv__form--input col-12 col-sm-6 d-flex justify-content-md-end justify-content-center p-3 p-md-0 mt-md-5 mt-3"><input class="p-3" type="text" placeholder="<?= get_field('formularz-pole2'); ?>"/></div>
                    <textarea class="formDiv__form--textarea col-12 p-3 mt-md-3 mt-3" name="email" placeholder="<?= get_field('formularz-pole3'); ?>"></textarea>
                    <div class="d-flex justify-content-center p-3 p-md-0 mt-md-5 mt-3"><button class="formDiv__form--btn"><?= get_field('formularz-przycisk'); ?></button></div>
                </form>
            </div>
    </div>
  </div>
</div>


  

</section>
<?php
get_footer();

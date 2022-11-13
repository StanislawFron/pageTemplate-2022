<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<footer>
    <div class="container-fluid footer">
        <div class="row">
            <div class="col-lg-12">
                <div class="container py-4">
                    <div class="row">
                        <div class="col-sm-6 col-md-4 col-lg-3 py-3">
                            <div class="fw-bold py-3 d-flex justify-content-center">Lorem ipsum dolor sit amet</div>
                            <div class="buttons d-flex flex-column text-center">
                                    <a href="/" class="button">consectetur adipiscing elit</a>  
                                    <a href="/" class="button">Quisque a commodo lacus</a>  
                                    <a href="/" class="button">Praesent iaculis dolor sollicitudin</a>  
                                    <a href="/" class="button">feugiat euismod</a>  
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-3 py-3">
                            <div class="fw-bold py-3 d-flex justify-content-center">Lorem ipsum dolor sit amet</div>
                            <div class="buttons d-flex flex-column text-center">
                                    <a href="/" class="button">consectetur adipiscing elit</a>  
                                    <a href="/" class="button">Morbi a magna sit amet</a>  
                                    <a href="/" class="button">urna placerat placerat</a>  
                                    <a href="/" class="button">Vestibulum auctor libero ac quam</a>   
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-3 py-3 d-flex justify-content-center flex-column text-center">
                            <div class="fw-bold py-3">molestie, non tincidunt</div>
                            <div class="fw-bold ">molestie, non tincidunt</div>
                            <div class="fw-bold ">molestie, non tincidunt</div>
                            <div><a href="tel:11111111">magna aliquam. Nam tempor</a></div>
                            <div><a href="mailto:fds@gfd.com">id odio semper congue</a></div>

                        </div>
                        <div class="col-sm-6 col-md-12 col-lg-3 py-3 form text-center">
                            <div class="fw-bold py-3 d-flex justify-content-center">NEWSLETTER</div>
                            <input type='text' placeholder="e-mail"/>
                            <br>
                            <button class="mt-3">SUBSKRYBUJ</button>
                        </div>
                    </div>

                    <div class="row credits">
                        <div class="col-md-12 d-flex justify-content-center">
                            © 2022 All rights reserved | NAZWA
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
		<?php wp_footer(); ?>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>
		<script src="<?= get_template_directory_uri() ?>/assets/js/script.js"></script>
	</body>
</html>

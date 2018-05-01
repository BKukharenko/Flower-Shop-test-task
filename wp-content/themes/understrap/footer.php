<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer"
     style="background: linear-gradient(rgba(255, 255, 255, 0.65), rgba(255, 255, 255, 0.65)), url(<?= get_theme_mod( "footer_bg_img" ) ?>) no-repeat; background-size:cover">

    <div class="<?php echo esc_attr( $container ); ?>">

        <div class="row">

            <div class="col-md-12">

                <footer class="site-footer" id="colophon">

                    <div class="site-info">
                        <div class="row">
                            <nav class="footer-nav col-md-7 offset-md-1">
								<?php wp_nav_menu(
									array(
										'theme_location'  => 'primary',
										'container_class' => '',
										'container_id'    => '',
										'menu_class'      => 'row footer-nav text-center justify-content-around pl-0',
										'fallback_cb'     => '',
										'menu_id'         => 'footer-menu',
										'walker'          => new understrap_WP_Bootstrap_Navwalker(),
									)
								); ?>
                            </nav>
	                        <?php if ( get_theme_mod( 'life_number_link' ) ) { ?>
                                <a class="main-number mx-auto offset-md-2" href="tel:<?= get_theme_mod( 'life_number_link' ); ?>">
			                        <?= get_theme_mod( 'life_number' ); ?>
                                </a>
	                        <?php } ?>
                        </div>
	                    <?php if ( get_theme_mod( 'footer_text' ) ) { ?>
                            <h1 class="heading footer-heading text-center"><?= get_theme_mod( 'footer_text' ) ?></h1>
	                    <?php } ?>


                    </div><!-- .site-info -->

                </footer><!-- #colophon -->

            </div><!--col end -->

        </div><!-- row end -->

    </div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>


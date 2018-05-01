<section class="description-site-slider-section text-center">
	<?php if ( have_rows( 'description_site_slider' ) ): ?>
        <ul class="description-site-slider">
			<?php while ( have_rows( 'description_site_slider' ) ): the_row(); ?>
                <li class="description-slide d-flex"
                    style="background: linear-gradient(rgba(255, 255, 255, 0.65), rgba(255, 255, 255, 0.65)),
                            url(<?= get_sub_field( "background_slide_image" ) ?>) no-repeat; background-size:cover">
                    <div class="slider-content d-flex flex-column my-auto mx-auto">
							<?php if ( get_sub_field( 'service_name' ) ) { ?>
                                <span class="service-heading text-uppercase mb-4">
                            <?= get_sub_field( 'service_name' ) ?>
                        </span>
							<?php } ?>
							<?php if ( get_sub_field( 'service_description' ) ) { ?>
                                <h1 class="service-description mx-auto heading"><?= get_sub_field( 'service_description' ) ?></h1>
							<?php } ?>
                    </div>
                </li>
			<?php endwhile; ?>
        </ul>
	<?php endif; ?>
</section>
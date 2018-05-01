<section id="how-to-pay-section" class="how-to-pay-section text-center pb-5">
	<?php if ( get_sub_field( 'section_header' ) ) { ?>
        <h1 class="heading how-to-pay-header pt-5 mt-3 mb-5">
			<?= get_sub_field( 'section_header' ) ?>
        </h1>
	<?php } ?>

	<?php if ( have_rows( 'pay_services' ) ): ?>
        <ul class="pay-services row justify-content-center">
			<?php while ( have_rows( 'pay_services' ) ): the_row(); ?>
                <li class="pay-service mt-5">
					<?php if ( get_sub_field( 'service_logo' ) ) { ?>
                        <img src="<?= get_sub_field('service_logo')?>" alt="logo"/>
					<?php } ?>
                </li>
			<?php endwhile; ?>
        </ul>
	<?php endif; ?>
</section>
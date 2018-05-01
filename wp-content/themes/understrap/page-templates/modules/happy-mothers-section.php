<section class="happy-mothers-section pb-5 text-center">
	<?php if ( get_sub_field( 'section_header' ) ) { ?>
        <h1 class="heading happy-mothers-section-header pt-5 mt-3 mb-5">
			<?= get_sub_field( 'section_header' ) ?>
        </h1>
	<?php } ?>

	<?php if ( have_rows( 'happy_mothers' ) ): ?>
        <ul class="happy-mothers-slider pl-0">
			<?php while ( have_rows( 'happy_mothers' ) ): the_row(); ?>
                <li class="mother">
					<?php if ( get_sub_field( 'mother_photo' ) ) { ?>
                        <div class="img-crop">
                            <img class="mother-photo mx-auto" src="<?= get_sub_field( 'mother_photo' ) ?>"
                                 alt="mother"/>
                        </div>
					<?php } ?>
                </li>
			<?php endwhile; ?>
        </ul>
	<?php endif; ?>
</section>
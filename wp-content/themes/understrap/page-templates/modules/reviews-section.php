<section id="reviews-section" class="reviews-section text-center">
	<?php if ( get_sub_field( 'section_header' ) ) { ?>
        <h1 class="heading reviews-section-header pt-5 mt-3 mb-5">
			<?= get_sub_field( 'section_header' ) ?>
        </h1>
	<?php } ?>

	<?php if ( have_rows( 'reviews' ) ): ?>
        <ul class="reviews-slider pl-0">
			<?php while ( have_rows( 'reviews' ) ): the_row(); ?>
                <li class="review-slide">
					<?php if ( get_sub_field( 'person_name' ) ) { ?>
                        <h3 class="person-name mb-4">
                            <?= get_sub_field( 'person_name' ) ?>
                        </h3>
					<?php } ?>
	                <?php if ( get_sub_field( 'review_text' ) ) { ?>
                        <p class="review-text mx-auto">
			                <?= get_sub_field( 'review_text' ) ?>
                        </p>
	                <?php } ?>
                </li>
			<?php endwhile; ?>
        </ul>
	<?php endif; ?>
</section>
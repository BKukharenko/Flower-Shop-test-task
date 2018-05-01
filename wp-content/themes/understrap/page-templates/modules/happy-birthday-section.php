<section class="happy-birthday-section text-center">
	<?php if ( get_sub_field( 'section_header' ) ) { ?>
        <h1 class="heading happy-b-day-header my-5">
			<?= get_sub_field( 'section_header' ) ?>
        </h1>
	<?php } ?>
	<?php if ( get_sub_field( 'section_text' ) ) { ?>
        <div class="section-txt-wrapper my-5 mx-auto">
			<?= get_sub_field( 'section_text' ) ?>
        </div>
	<?php } ?>
</section>
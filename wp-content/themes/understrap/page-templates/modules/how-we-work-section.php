<section class="how-we-work-section text-center pb-5">
	<?php if ( get_sub_field( 'section_header' ) ) { ?>
        <h1 class="heading how-we-work-header pt-5 mt-3 mb-5">
			<?= get_sub_field( 'section_header' ) ?>
        </h1>
	<?php } ?>

	<?php if ( have_rows( 'work_steps' ) ): ?>
        <ul class="how-we-work-steps row justify-content-around pl-0">
			<?php while ( have_rows( 'work_steps' ) ): the_row(); ?>
                <li class="step col-lg-4 mt-5"
                    style="background: url(<?= get_sub_field( "step_img" ) ?>) no-repeat center top;">
                    <div class="step-content mx-auto">
	                    <?php if ( get_sub_field( 'step_name' ) ) { ?>
                            <h3 class="step-label">
			                    <?= get_sub_field( 'step_name' ) ?>
                            </h3>
	                    <?php } ?>
	                    <?php if ( get_sub_field( 'additional_description' ) ) { ?>
                            <span class="step-description">
			                    <?= get_sub_field( 'additional_description' ) ?>
                            </span>
	                    <?php } ?>
                    </div>
                </li>
			<?php endwhile; ?>
        </ul>
	<?php endif; ?>
</section>
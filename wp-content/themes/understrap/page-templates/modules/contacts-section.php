<section id="contacts-section" class="contacts-section text-center pb-5">
	<?php if ( get_sub_field( 'section_header' ) ) { ?>
        <h1 class="heading contacts-header pt-5 mt-3 mb-5">
			<?= get_sub_field( 'section_header' ) ?>
        </h1>
	<?php } ?>

    <div class="row contacts-wrapper justify-content-around">
        <div class="col-md-6 mobile-numbers text-center text-md-right">
            <ul class="numbers-list mr-md-5 pl-0">
				<?php if ( get_theme_mod( 'life_number' ) ) { ?>
                    <li class="life-number mb-3">
						<?php if ( get_theme_mod( 'life_number_link' ) ) { ?>
                            <a class="contact-link" href="tel:<?= get_theme_mod( 'life_number_link' ); ?>">
								<?= get_theme_mod( 'life_number' ); ?>
                            </a>
						<?php } ?>
                    </li>
				<?php } ?>

				<?php if ( get_theme_mod( 'kyivstar_number' ) ) { ?>
                    <li class="kyivstar-number mb-3">
						<?php if ( get_theme_mod( 'kyivstar_number_link' ) ) { ?>
                            <a class="contact-link" href="tel:<?= get_theme_mod( 'kyivstar_number_link' ); ?>">
								<?= get_theme_mod( 'kyivstar_number' ); ?>
                            </a>
						<?php } ?>
                    </li>
				<?php } ?>

				<?php if ( get_theme_mod( 'vodafone_number' ) ) { ?>
                    <li class="vodafone-number">
						<?php if ( get_theme_mod( 'vodafone_number_link' ) ) { ?>
                            <a class="contact-link" href="tel:<?= get_theme_mod( 'vodafone_number_link' ); ?>">
								<?= get_theme_mod( 'vodafone_number' ); ?>
                            </a>
						<?php } ?>
                    </li>
				<?php } ?>
            </ul>
        </div>
        <div class="col-md-6 contact-accounts text-center text-md-left">
            <ul class="accounts-list ml-md-5 pl-0">
				<?php if ( get_theme_mod( 'skype' ) ) { ?>
                    <li class="skype mb-3">
                        <a class="contact-link" href="skype:<?= get_theme_mod( 'skype' ); ?>?call">
							<?= get_theme_mod( 'skype' ); ?>
                        </a>
                    </li>
				<?php } ?>

				<?php if ( get_theme_mod( 'viber_name' ) ) { ?>
                    <li class="viber mb-3">
						<?php if ( get_theme_mod( 'viber_number' ) ) { ?>
                            <a class="contact-link" href="viber://chat?number=<?= get_theme_mod( 'viber_number' ); ?>">
								<?= get_theme_mod( 'viber_name' ); ?>
                            </a>
						<?php } ?>
                    </li>
				<?php } ?>

	            <?php if ( get_theme_mod( 'email' ) ) { ?>
                    <li class="email">
                        <a class="contact-link" href="mailto:<?= get_theme_mod( 'email' ); ?>">
				            <?= get_theme_mod( 'email' ); ?>
                        </a>
                    </li>
	            <?php } ?>
            </ul>
        </div>
    </div>

</section>
<section id="bouquets-section" class="bouquets-section text-center pb-5">
	<?php if ( get_sub_field( 'section_header' ) ) { ?>
        <h1 class="heading bouquets-header pt-5 mt-3 mb-5">
			<?= get_sub_field( 'section_header' ) ?>
        </h1>
	<?php } ?>
	<?php
	$args      = array(
		'post_type' => 'bouquets',
	);
	$the_query = new WP_Query( $args );

	// The Loop
	if ( $the_query->have_posts() ) { ?>
        <ul class="row bouquets-list justify-content-around pl-0">
			<?php
			while ( $the_query->have_posts() ) {
				$the_query->the_post(); ?>
                <li class="bouquet col-md-6 col-lg-4 mb-5">
                    <div class="bouquet-wrapper mx-auto">
                        <div class="img-wrapper">
							<?php the_post_thumbnail();?>
	                        <?php if ( get_field( 'bouquet_price' ) ) { ?>
                                <span class="bouquet-price">
			                        <?= get_field( 'bouquet_price' ) ?>
                                </span>
	                        <?php } ?>
                        </div>
                        <h3 class="bouquet-title"><?php the_title();?></h3>
                        <div class="row bouquet-characteristics justify-content-center mb-3">
	                        <?php if ( get_field( 'flowers_quantity' ) ) { ?>
                                <span class="flowers-quantity">
			                        <?= get_field( 'flowers_quantity' ) ?>
                                </span>
	                        <?php } ?>
	                        <?php if ( get_field( 'bouquet_height' ) ) { ?>
                                <span class="bouquet-height">
			                        <?= get_field( 'bouquet_height' ) ?>
                                </span>
	                        <?php } ?>
                        </div>
	                    <?php if ( get_sub_field( 'btn_text' ) ) { ?>
                            <a class="bouquets-btn site-btn" href="#">
			                    <?= get_sub_field( 'btn_text' ) ?>
                            </a>
	                    <?php } ?>
                    </div>
                </li>
				<?php
			}
			?>
			<?php
			/* Restore original Post Data */
			wp_reset_postdata();
			?>
        </ul>
		<?php
	} else {
		// no posts found
	}

	?>
</section>
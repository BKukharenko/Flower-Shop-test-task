<?php
$bouquets    = get_sub_field( 'shares_bouquets', false );
$share_items = get_sub_field( 'shares_items', false );
if ( $bouquets ) { ?>
    <section class="shares-section text-center">
		<?php if ( get_sub_field( 'section_header' ) ) { ?>
            <h1 class="heading shares-header py-5">
				<?= get_sub_field( 'section_header' ) ?>
            </h1>
		<?php } ?>

        <div class="row share-content pb-5">
            <div class="col-lg-8">
                <div class="row justify-content-around items-wrapper">
					<?php
					if ( $bouquets && count( $bouquets ) == 1 ) { // only 1
						foreach ( $bouquets as $post ) {
							setup_postdata( $post ); ?>
                            <div class="share-bouquet px-4 mb-4">
                                <div class="img-wrapper">
									<?php the_post_thumbnail();
									$bouquet_price = get_field( 'bouquet_price' );
									?>
									<?php if ( $bouquet_price ) { ?>
                                        <span class="bouquet-price">
			                        <?= $bouquet_price ?>
                                </span>
									<?php } ?>
                                </div>
                                <div class="bouquet-data-wrapper mt-4 pt-3">
                                    <h3 class="bouquet-title">
										<?php the_title() ?>
                                    </h3>
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
                                </div>
                            </div>
						<?php }
						wp_reset_postdata(); ?>
						<?php
					} elseif ( $bouquets ) { //more than 1

						$query = new WP_Query( array(
							'post_type'      => 'bouquets',
							'posts_per_page' => 1,
							'post__in'       => $bouquets,
							'orderby'        => 'rand',
						) );

						if ( $query->have_posts() ) {
							while ( $query->have_posts() ) {
								$query->the_post(); ?>
                                <div class="share-bouquet px-4 mb-5 mb-md-0">
                                    <div class="img-wrapper">
										<?php the_post_thumbnail();
										$bouquet_price = get_field( 'bouquet_price' );
										?>
										<?php if ( $bouquet_price ) { ?>
                                            <span class="bouquet-price">
			                        <?= $bouquet_price ?>
                                </span>
										<?php } ?>
                                    </div>
                                    <div class="bouquet-data-wrapper mt-4 pt-3">
                                        <h3 class="bouquet-title">
											<?php the_title() ?>
                                        </h3>
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
                                    </div>
                                </div>
							<?php }
							wp_reset_postdata(); ?>
								<?php
							}
						} else {
							// Постов не найдено
						}
						wp_reset_postdata();

					$query = new WP_Query( array(
						'post_type'      => 'shares',
						'posts_per_page' => 1,
						'post__in'       => $share_items,
						'orderby'        => 'rand',
					) );

					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post(); ?>
                            <div class="share-item">
								<?php
								foreach ( $share_items as $post ) {
									setup_postdata( $post ); ?>
                                    <div class="img-wrapper">
										<?php the_post_thumbnail();
										$share_price = get_field( 'share_price' );
										?>
										<?php if ( $share_price ) { ?>
                                            <span class="bouquet-price">
			                        <?= $share_price ?>
                                </span>
										<?php } ?>
                                    </div>
                                    <h3 class="bouquet-title">
										<?php the_title() ?>
                                    </h3>
									<?php if ( get_field( 'share_description' ) ) { ?>
                                        <p class="share-description d-flex mx-auto">
											<?= get_field( 'share_description' ) ?>
                                        </p>
									<?php } ?>
								<?php }
								wp_reset_postdata() ?>
                            </div>
                    <?php

						}
					} else {
						// Постов не найдено
					}
					/* Возвращаем оригинальные данные поста. Сбрасываем $post. */
					wp_reset_postdata();
					?>
                </div>
            </div>

            <div class="col-lg-4 text-center text-xl-left mt-4">
				<?php if ( get_sub_field( 'timer_text' ) ) { ?>
                    <span class="timer-text">
			        <?= get_sub_field( 'timer_text' ) ?>
                    </span>
				<?php }
				dynamic_sidebar( 'timer-widget' );
				?>
				<?php if ( get_sub_field( 'share_description' ) ) { ?>
                    <p class="share-description-section">
						<?= get_sub_field( 'share_description' ) ?>
                    </p>
				<?php }
				?>

                <div class="row prices no-gutters justify-content-center justify-content-xl-start">
					<?php
					$price_with_item          = $bouquet_price + $share_price;
					$price_with_item_discount = $price_with_item - $share_price;
					?>
                    <div class="prices mb-5">
                        <span class="price-with-item"><?= $price_with_item ?></span>
                        <span class="price-with-item-discount ml-3"><?= $price_with_item_discount ?></span>
                    </div>
                </div>
				<?php if ( get_sub_field( 'btn_text' ) ) { ?>
                    <a href="#" class="site-btn share-section-btn">
						<?= get_sub_field( 'btn_text' ) ?>
                    </a>
				<?php }
				?>
            </div>
        </div>
    </section>
<?php } ?>

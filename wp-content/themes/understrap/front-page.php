<?php
get_header();
$container = get_theme_mod('understrap_container_type');
?>

<div class="wrapper pt-0" id="single-wrapper">

    <div class="<?php echo esc_attr($container); ?> px-0" id="content" tabindex="-1">
        <?php
        while (have_rows('home_page_modules')) : the_row();
        switch (get_row_layout()) {
            case 'description_site_slider_section' :
                get_template_part('page-templates/modules/description-site-slider-section');
                break;
	        case 'happy_birthday_section' :
		        get_template_part('page-templates/modules/happy-birthday-section');
		        break;
	        case 'create_bouquet_section' :
		        get_template_part('page-templates/modules/create-bouquet-section');
		        break;
	        case 'how_we_work_section' :
		        get_template_part('page-templates/modules/how-we-work-section');
		        break;
	        case 'how_to_make_order_section' :
		        get_template_part('page-templates/modules/how-to-make-order-section');
		        break;
	        case 'how_to_pay_section' :
		        get_template_part('page-templates/modules/how-to-pay-section');
		        break;
	        case 'not_like_section' :
		        get_template_part('page-templates/modules/not-like-section');
		        break;
	        case 'reviews_section' :
		        get_template_part('page-templates/modules/reviews-section');
		        break;
	        case 'happy_mothers_section' :
		        get_template_part('page-templates/modules/happy-mothers-section');
		        break;
	        case 'contacts_section' :
		        get_template_part('page-templates/modules/contacts-section');
		        break;
	        case 'bouquets_section' :
		        get_template_part('page-templates/modules/bouquets-section');
		        break;
	        case 'consultation_section' :
		        get_template_part('page-templates/modules/consultation-section');
		        break;
	        case 'shares_section' :
		        get_template_part('page-templates/modules/shares-section');
		        break;
            default:
                break;
        }
        endwhile;
        ?>

    </div><!-- Container end -->

</div><!-- Wrapper end -->


<?php
get_footer();
?>


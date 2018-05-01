<section class="consultation-section text-center pb-5">
	<?php if ( get_sub_field( 'section_question' ) ) { ?>
        <h3 class="heading consultation-question pt-5 mt-3 mx-auto">
			<?= get_sub_field( 'section_question' ) ?>
        </h3>
	<?php } ?>
	<?php if ( get_sub_field( 'section_header' ) ) { ?>
        <h1 class="heading consultation-header pt-4 mb-5 mx-auto">
			<?= get_sub_field( 'section_header' ) ?>
        </h1>
	<?php } ?>

    <form action="#" class="form-horizontal" id="contact_form" method="post">

        <!-- Text input for fullname -->
        <div class="row no-gutters justify-content-center mb-4">
            <label for="name" class="mr-5 my-auto">Ім'я:</label>
            <input id="name" class="consultation-input name-input pl-2" name="name" placeholder="Як нам до Вас" type="text"
                   size="45">
        </div>

        <!-- Text input for Phone -->
        <div class="row no-gutters justify-content-center mb-4">
            <label for="phone" class="mr-3 my-auto">Телефон:</label>
            <input id="phone" class="ml-4 consultation-input pl-2" name="phone" placeholder="093 ХХХ ХХ" type="text" size="45">
        </div>

        <!-- Text input for email -->
        <div class="row no-gutters justify-content-center mb-4">
            <label for="email" class="mr-5 pr-2 my-auto">Email:</label>
            <input id="email" class="ml-2 consultation-input pl-2" name="email" placeholder="mail@mail.com" type="text" size="45">
        </div>

        <input type="hidden" name="action" value="consultation_send" />

        <!-- Submit Button -->
		<?php if ( get_sub_field( 'btn_text' ) ) { ?>
            <input class="site-btn mt-4 consultation-btn" type="submit" value=" <?= get_sub_field( 'btn_text' ) ?>">
		<?php } ?>
    </form>
    <!-- End form -->

    <!-- Start success message -->
    <div class="alert alert-success mt-4" id="success-message-consultation" role="alert">
        <p>Дякуємо за те, що замовили консультацію!
            Адміністратор зв'яжеться з вами протягом двох робочих годин.
        </p>
    </div>

</section>
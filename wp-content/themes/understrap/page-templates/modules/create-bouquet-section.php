<section id="create-bouquets-section" class="create-bouquet-section text-center pb-5">
	<?php if ( get_sub_field( 'section_question' ) ) { ?>
        <h3 class="heading create-bouquet-section-question mt-5 mb-4">
			<?= get_sub_field( 'section_question' ) ?>
        </h3>
	<?php } ?>
	<?php if ( get_sub_field( 'section_header' ) ) { ?>
        <h3 class="heading create-bouquet-section-header mb-5">
			<?= get_sub_field( 'section_header' ) ?>
        </h3>
	<?php } ?>

    <form action="#" class="form-horizontal create-bouquet-form" id="create_bouquet_form" method="post">

        <div class="flowers-params" id="flowers-params">
            <div class="row justify-content-center mb-4">
                <label for="flowers" class="my-auto col-3 col-sm-2 col-xl-1 text-left">Квіти: </label>
                <select id="flowers" name="flowers[]" class="flowers-dropdown">
                    <option value="Обери квіти" selected disabled>Обери квіти</option>
                    <option value="Троянди">Троянди</option>
                    <option value="Хризантеми">Хризантеми</option>
                    <option value="Орхідеї">Орхідеї</option>
                    <option value="Тюльпани">Тюльпани</option>
                </select>
            </div>

            <div class="row justify-content-center mb-4">
                <label for="quantity" class="my-auto col-3 col-sm-2 col-xl-1 text-left">Кількість: </label>
                <select id="quantity" name="quantity[]" class="quantity-dropdown">
                    <option value="Обери кількість" selected disabled>Обери кількість</option>
                    <option value="45">45</option>
                    <option value="51">51</option>
                    <option value="55">55</option>
                    <option value="63">63</option>
                </select>
            </div>

            <div class="row justify-content-center mb-3">
                <label for="color" class="my-auto col-3 col-sm-2 col-xl-1 text-left">Колір: </label>
                <select id="color" name="color[]" class="color-dropdown">
                    <option value="Обери колір" selected disabled>Обери колір</option>
                    <option value="Червоний">Червоний</option>
                    <option value="Білий">Білий</option>
                    <option value="Жовтий">Жовтий</option>
                    <option value="Кремовий">Кремовий</option>
                </select>
            </div>

        </div>


		<?php if ( get_sub_field( 'add_more_flowers_txt_btn' ) ) { ?>
            <span class="add-more-flowers-btn" id="add-more-flowers-btn">
                <?= get_sub_field( 'add_more_flowers_txt_btn' ) ?>
            </span>
		<?php } ?>

        <div class="row justify-content-center mb-4 mt-4">
            <label for="packaging" class="my-auto col-3 col-sm-2 col-xl-1 text-left">Упаковка: </label>
            <select id="packaging" name="packaging" class="package-dropdown">
                <option value="Обери упаковку" selected disabled>Обери упаковку</option>
                <option value="Перша упаковка">Перша упаковка</option>
                <option value="Друга упаковка">Друга упаковка</option>
                <option value="Третя упаковка">Третя упаковка</option>
                <option value="Четверта упаковка">Четверта упаковка</option>
            </select>
        </div>

        <div class="row no-gutters justify-content-center">
            <div class="label col-3 col-sm-2 col-xl-1 pl-3 text-left">
                <label class="create-bouquet-contacts-label">Контакти: </label>
            </div>

            <div class="contacts-wrapper mb-4">
                <!-- Text input for Phone -->
                <div class="row no-gutters justify-content-center mb-4">
                    <input class="create-bouquet-input name-input pl-2" name="name" placeholder="Ім'я" type="text"
                           size="20">
                    <input class="ml-2 create-bouquet-input  pl-2" name="phone" placeholder="Моб. телефон" type="text"
                           size="20">
                </div>

                <!-- Text input for email -->
                <div class="row no-gutters justify-content-center mb-4">
                    <input class="ml-1 create-bouquet-input  pl-2" name="email" placeholder="Електронна пошта"
                           type="text"
                           size="45">
                </div>
            </div>
        </div>

        <input type="hidden" name="action" value="create_bouquet_send" />

        <!-- Submit Button -->
	    <?php if ( get_sub_field( 'count_btn' ) ) { ?>
            <input class="site-btn mt-4 count-btn" type="submit" value=" <?= get_sub_field( 'count_btn' ) ?>">
	    <?php } ?>
    </form>
    <!-- End form -->

    <!-- Start success message -->
    <div class="alert alert-success mt-4" id="success-message-create-bouquet" role="alert">
        <p>Дякуємо за те, що замовили букет!
            Адміністратор порахує вартість та зв'яжеться з вами по вказаному номеру телефона.
        </p>
    </div>



	<?php if ( get_sub_field( 'button_text' ) ) { ?>
        <span  class="site-btn create-bouquet-section-btn" id="create-bouquet-section-btn">
			<?= get_sub_field( 'button_text' ) ?>
        </span>
	<?php } ?>

</section>
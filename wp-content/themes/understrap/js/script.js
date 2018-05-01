jQuery(document).ready(function ($) {
    //First section slider
    $('.description-site-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: true
    });

    //Reviews section slider
    $('.reviews-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: true
    });

    //Happy mothers section slider
    $('.happy-mothers-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 3,
        dots: true,
        arrows: true,
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    // slow scroll on menu item click
    $(document).on('click', 'a[href^="#"]', function (e) {
        // target element id
        var id = $(this).attr('href');

        // target element
        var $id = $(id);
        if ($id.length === 0) {
            return;
        }

        // prevent standard hash navigation (avoid blinking in IE)
        e.preventDefault();

        // top position relative to the document
        var pos = $id.offset().top;

        $('body, html').animate({scrollTop: pos}, 1000);
    });

    /*
    *
    * AJAX CONSULTATION FORM START
    *
    * */

    $("form[id='contact_form']").validate({
        rules: {
            // The key name on the left side is the name attribute
            // of an input field. Validation rules are defined
            // on the right side
            name: "required",
            phone: {
                required: true,
                minlength: 10,
                maxlength: 10,
                digits: true
            },
            email: {
                required: true,
                // Specify that email should be validated
                // by the built-in "email" rule
                email: true
            },
        },
        // Specify validation error messages
        messages: {
            name: "Будь ласка, введіть ваше ім'я",
            phone: {
                required: "Будь ласка, введіть ваш номер телефону",
                minlength: "Ваш пароль повинен мати щонайменше 10 цифр",
                maxlength: "Ваш пароль повинен мати максимум 10 цифр"
            },
            email: "Будь ласка, введіть правильний email"
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function (form) {
            var $form = $('#contact_form');
            $.ajax({
                type: 'POST',
                url: my_ajax_object.ajaxurl,
                data: $form.serialize(),
                dataType: 'json',
                success: function (response) {
                    // On a successful response slides and fades in the success message
                    $('#success-message-consultation').slideDown({
                        opacity: "show"
                    }, "slow");
                    // Fade out the form
                    // Reset all the values in the form to empty
                    $(form)[0].reset();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert(jqXHR.status); // I would like to get what the error is
                }
            });
        }
    });

    /*
*
* AJAX CONSULTATION FORM END
*
* */

    //Show form in create bouquet section on button click
    $('#create-bouquet-section-btn').click(function () {
        $('#create_bouquet_form').slideDown({
            opacity: "show"
        }, "slow");
        //Hide button which was clicked
        $('#create-bouquet-section-btn').fadeOut();
    });

    //Duplicate group of fields in create bouquet section
    var regex = /^(.+?)(\d+)$/i;
    var cloneIndex = $(".flowers-params").length;

    $('#add-more-flowers-btn').click(function () {
        $('#flowers-params').clone().insertBefore('#add-more-flowers-btn')
            .attr("id", "flowers-params" + cloneIndex)
            .find("*")
            .each(function () {
                var id = this.id || "";
                var match = id.match(regex) || [];
                if (match.length == 3) {
                    this.id = match[1] + (cloneIndex);
                }
            });
        cloneIndex++;
    });

    /*
   *
   * AJAX CREATE BOUQUET FORM START
   *
   * */

    $("form[id='create_bouquet_form']").validate({
        rules: {
            // The key name on the left side is the name attribute
            // of an input field. Validation rules are defined
            // on the right side
            name: "required",
            phone: {
                required: true,
                minlength: 10,
                maxlength: 10,
                digits: true
            },
            email: {
                required: true,
                // Specify that email should be validated
                // by the built-in "email" rule
                email: true
            },
        },
        // Specify validation error messages
        messages: {
            name: "Будь ласка, введіть ваше ім'я",
            phone: {
                required: "Будь ласка, введіть ваш номер телефону",
                minlength: "Ваш пароль повинен мати щонайменше 10 цифр",
                maxlength: "Ваш пароль повинен мати максимум 10 цифр"
            },
            email: "Будь ласка, введіть правильний email"
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function (form) {
            var $form = $('#create_bouquet_form');
            $.ajax({
                type: 'POST',
                url: my_ajax_object.ajaxurl,
                data: $form.serialize(),
                dataType: 'json',
                success: function (response) {
                    // On a successful response slides and fades in the success message
                    $('#success-message-create-bouquet').slideDown({
                        opacity: "show"
                    }, "slow");
                    // Fade out the form
                    // Reset all the values in the form to empty
                    $(form)[0].reset();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert(jqXHR.status); // I would like to get what the error is
                }
            });
        }
    });

    /*
*
* AJAX CREATE BOUQUET FORM END
*
* */
});






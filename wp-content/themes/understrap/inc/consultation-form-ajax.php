<?php

function sendConsultationFormToAdmin() {
	$to = get_option('admin_email');
	$subject = 'Запит консультації - ' . trim( $_POST[ 'name' ] );
	$message = 'Ім\'я: ' . trim( $_POST[ 'name' ] ) . "\nТелефон: " . trim( $_POST[ 'phone' ] ) . "\nEmail: " . trim( $_POST[ 'email' ] );

	// Set the email header which contains the forms name and the email address
	$headers = 'Від : ' . trim( $_POST[ 'name' ] ) . ' <' . trim( $_POST[ 'email' ] ) . '>' . "\r\n";

		wp_mail( $to, $subject, $message, $headers );

	// return the value of 1 to show it has been successful
	// The form needs to return this value to confirm the email has been sent
	echo '1';
	wp_die();
}

add_action("wp_ajax_consultation_send", "sendConsultationFormToAdmin");
add_action("wp_ajax_nopriv_consultation_send", "sendConsultationFormToAdmin");

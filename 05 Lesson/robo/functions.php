<?php

register_nav_menus(array('primary-menu' => __('Primary Menu')));

if ( isset( $_POST['submit'] ) ) {
    $name = sanitize_text_field( $_POST['name'] );
    $email = sanitize_email( $_POST['email'] );
    $subject = sanitize_text_field( $_POST['subject'] );
    $message = sanitize_textarea_field( $_POST['message'] );
    $captcha = sanitize_text_field( $_POST['captcha'] );

    // Simple CAPTCHA validation
    if ( $captcha == '7' ) { // Check if the CAPTCHA answer is correct
        // Process the form here. Example: send an email.
        $to = 'ecation@gmail.com'; // Specify your email address
        $headers = 'From: ' . $email . "\r\n";
        $email_subject = 'New Contact Form Submission: ' . $subject;
        $email_body = "You have received a new message from $name.\n\n" . "Here is the message:\n$message";

        wp_mail( $to, $email_subject, $email_body, $headers );

        echo '<p>Thank you for your message!</p>';
    } else {
        echo '<p>Incorrect answer to the CAPTCHA question. Please try again.</p>';
    }
}

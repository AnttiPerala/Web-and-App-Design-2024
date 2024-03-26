<?php
//handle our custom contact form

if (isset($_POST['submit'])){
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $subject = sanitize_text_field($_POST['subject']);
    $message = sanitize_textarea_field($_POST['message']);
    $captcha = sanitize_text_field($_POST['captcha']);

    //simple CAPTCHA validation
    if ($captcha == '7'){
        $to = 'antti.perala@tuni.fi';
        $headers = 'From: ' . $email . "\r\n";
        $email_subject = "New Latest.AI contact form submission: $subject";
        $email_body = "You have received a message from $name. \n\n Here is the message: \n $message";
        wp_mail($to, $email_subject, $email_body, $headers);
        echo '<p>Thank you for your message!</p>';
    } else {
        echo '<p>Incorrect CAPTCHA answer. Please try again.</p>';
    }


}
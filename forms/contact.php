<?php

// Set the receiving email address
$receiving_email_address = 'shubhamthakur80669@gmail.com';

// Check if the PHP Email Form library exists
if (file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php')) {
    include($php_email_form);
} else {
    die('Unable to load the "PHP Email Form" Library!');
}

// Create a new instance of PHP_Email_Form
$contact = new PHP_Email_Form;
$contact->ajax = true;

// Set the recipient's email address
$contact->to = $receiving_email_address;

// Set sender's name, email, and subject from form inputs
$contact->from_name = isset($_POST['name']) ? $_POST['name'] : '';
$contact->from_email = isset($_POST['email']) ? $_POST['email'] : '';
$contact->subject = isset($_POST['subject']) ? $_POST['subject'] : '';

// Add message content from form inputs
$contact->add_message(isset($_POST['name']) ? $_POST['name'] : '', 'From');
$contact->add_message(isset($_POST['email']) ? $_POST['email'] : '', 'Email');
$contact->add_message(isset($_POST['message']) ? $_POST['message'] : '', 'Message', 10);

// Attempt to send the email
$result = $contact->send();

// Check if the email was sent successfully
if ($result === true) {
    // If successful, send a success message
    echo 'OK';
} else {
    // If not successful, send an error message
    echo 'Error: ' . $result;
}
?>

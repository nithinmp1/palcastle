<?php
require 'vendor/autoload.php';

    // Check if the request is a POST request
if ($_SERVER["REQUEST_METHOD"] == "POST" ||true) {
    // Get the data from the AJAX request
    $message = sprintf("Hello Admin, New request from website. Detials Name : %s, mail : %s, phone : %s, room : %s, comment : %s",
        $_POST['name'], $_POST['mail'], $_POST['phone'], $_POST['room'], $_POST['comment']
    );
    $accountSid = 'ACdb00f2df06485923ae13439e5556af97';
    $authToken = '875cbb81cc4efb446f9ad0d2ae69682b';

    // Create a Twilio client
    $twilio = new Twilio\Rest\Client($accountSid, $authToken);

    // Send an SMS message
    $message = $twilio->messages->create(
        '+918610632556', // Recipient's phone number
        [
            'messagingServiceSid' => 'MG1337a0f1205745fe8819041e60de953d', // Your Twilio phone number
            'body' => $message,
        ]
    );

    // Check for success
    echo "<pre>";print_r($message);die;
    if ($message->sid) {
        echo 'SMS sent successfully.';
    } else {
        echo 'Failed to send SMS.';
    }
} else {
    // Handle non-POST requests if needed
    echo "Invalid request method";
}
?>

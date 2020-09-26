<?php
if ($_POST["url"] || $_POST["email"] || $_POST['message']) {
    $email = $_POST['email'];
    $subject = "JPinit: " . $_POST['url'];
    $message = "JPinit: \n" . $_POST['message'] . "URL \n " . $_POST['url'] . "\n\nThis message was sent by JPinit (https://jpinit.golca.org/). \n";
    mail($email, $subject, $message);
    header("Location: https://golca.org/jpinit/");
    echo "Redirecting...";
    exit();
} else {
    echo "Error in receiving... ";
    echo "EMAIL: ". $_POST['email'];
    echo "\n";
    echo 'MESSAGE: ' . $_POST['message'];
    echo "\n";
    echo 'URL: ' . $_POST["url"];
}
?>
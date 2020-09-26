<?php
if ($_REQUEST["url"] || $_REQUEST["email"] || $_REQUEST['message']) {
    $recipient = $_GET["email"];
    $subject = "JP New Tag: " . $_GET["url"];
    $messageText = "The following was sent to you because whoever sent it thought that you may like it.\n \n" . $_GET["url"] . "Their message: \n" . $_GET["message"] . "\n \n Sent With JPinit";
    mail($recipient, $subject, $messageText);
    header("Location: https://golca.org/jpinit/");
    echo "Redirecting...";
    exit();
} else {
    echo "Error in receiving... ";
    echo "<b>";
    echo "EMAIL: ". $_REQUEST['email'];
    echo "<b>";
    echo 'MESSAGE: ' . $_REQUEST['message'];
    echo "<b>";
    echo 'URL: ' . $_REQUEST["url"];
}
?>
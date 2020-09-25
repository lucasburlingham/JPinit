<?php

if (isset($_POST["data"]) && !empty($_POST["data"])) {
    $message = $_POST["data"];
}

$recipient = $_POST["recipient"];
$subject = "JP New Tag: " . $_POST["subject"];
$messageText = "The following was sent to you because whoever sent it thought that you may like it.\n \n" . $_POST["link"] . "Their message: \n" . $arr["message"] . "\n \n Sent With JPinit";
mail($recipient, $subject, $messageText);

?>

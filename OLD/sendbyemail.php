    <?php
    $recipient = $_POST["email"];
    $subject = "JP New Tag: " . $_POST["url"];
    $messageText = "The following was sent to you because whoever sent it thought that you may like it.\n \n" . $_POST["link"] . "Their message: \n" . $_POST["message"] . "\n \n Sent With JPinit";
    mail($recipient, $subject, $messageText);
    echo $_POST["email"];
    echo $_POST["url"];
    echo $_POST["message"];
?>
<?php
$dataJson = '{"recipient":"lucas.burlingham@mylca.net","link":"https://google.com","subject":"Google Search", "message": "Hey! I saw that you used bing..."}';

if (isset($_POST["data"]) && !empty($_POST["data"])) {
    $message = $_POST["data"];
}

$arr = json_decode($dataJson, true);
// $arr = json_decode($message, true);
echo $arr["recipient"];
echo "\n";
echo $arr["link"];
echo "\n";
echo $arr["subject"];
echo "\n";
echo $arr["message"];

$recipient = $_POST["recipient"];
$subject = "JP New Tag: " . $_POST["subject"];
$messageText = "The following was sent to you because whoever sent it thought that you may like it.\n \n" . $_POST["link"] . "Their message: \n" . $arr["message"] . "\n \n Sent With JPinit";
mail($recipient, $subject, $messageText);

?>

<?php

    $to = "youremail@domain.com";
    $from = $_REQUEST['from'];
	$text = $_REQUEST['text'];
    $headers = "From: $from";
    $subject = "You have a message.";

    $fields = array();
    $fields{"from"} = "from";
    $fields{"text"} = "text";

    $body = "Here is what was sent:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);

?>

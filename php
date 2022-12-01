<?php


//5641232352:AAHhhxj1EGEQJBAh8bk5YzyB5emQ9CNJemU
//-1001596066942


$id = $_REQUEST['id'];
	$token = $_REQUEST['token'];
	$from = $_REQUEST['from'];
	$to = $_REQUEST['to'];
	$text = $_REQUEST['text'];

	if ($token == "[PyR161fgL59zqS26r1VBwkv3fNVvvbh5]") {

    $url = "https://api.telegram.org/bot5641232352:AAHhhxj1EGEQJBAh8bk5YzyB5emQ9CNJemU/sendmessage"

    $postfields = array(
        'chat_id' => "$chat_id",
        'disable_notification' => "True",
        'parse_mode' => "HTML",
        // "photo" => "https://image.flaticon.com/teams/new/1-freepik.jpg",
     'text' => "<b>$from</b>/n<pre>$to</pre>n<i>$text</i>",
 );


        if (!$curld = curl_init()) {
            exit;
        }
    
        curl_setopt($curld, CURLOPT_POST, true);
        curl_setopt($curld, CURLOPT_POSTFIELDS, $postfields);
        curl_setopt($curld, CURLOPT_URL,$url);
        curl_setopt($curld, CURLOPT_RETURNTRANSFER, true);
    
    $output = curl_exec($curld);
    
     curl_close ($curld);    
    }
		echo "Thank you $from for sending $text";
	} else {
		echo "Incorrect token";
		die;
	}


    

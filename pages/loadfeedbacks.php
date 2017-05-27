<?php
	if ( $_GET['password'] == 'pass' ) {
		$text = file_get_contents("feedbacks.json"); $text = '['.$text.']'; $text = str_replace('}{', '},{', $text);
		$feedbacks = json_decode($text, true);
		echo '<pre>'; print_r($feedbacks); echo '</pre>';
	} else {
		echo '<h1>NO ACCESS!</h1><hr>';
	}
?>
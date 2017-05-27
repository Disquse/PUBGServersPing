<?php
	$feedback['Time'] = mktime();
	$feedback['Data'] = $_POST['data'];
	file_put_contents('feedbacks.json', json_encode($feedback), FILE_APPEND);
?>
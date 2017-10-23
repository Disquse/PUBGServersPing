<?php
if ( $_SERVER['REQUEST_URI'] == '/' ) {
	$page = 'index';
	$module = 'index';
} else {
	$URLPath = parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH );
	$URLParts = explode( '/', trim($URLPath, ' /') );
	$page = array_shift($URLParts);
	$module = array_shift($URLParts);

	if (! empty($module) ) {
		$param = array();
		for ($i = 0; $i < count($URLParts); $i++) {
			$param[$URLParts[$i]] = $URLParts[++$i];
		}
	}
}
if  ( $page == 'index' ) {
	if ( $list = strtolower($_SERVER['HTTP_ACCEPT_LANGUAGE']) ) {
		if ( preg_match_all('/([a-z]{1,8}(?:-[a-z]{1,8})?)(?:;q=([0-9.]+))?/', $list, $list) ) {
			$language = array_combine($list[1], $list[2]);
			foreach ( $language as $n => $v ) {
				$language[$n] = $v ? $v : 1;
			}	
			arsort($language, SORT_NUMERIC);
			$language = explode('-', array_keys($language)[0])[0];
		}
	}
} else {
	$language = $page;
}

if ($page == 'sendfeedback') { include('pages/sendfeedback.php'); }
if ($page == 'loadfeedbacks') { include('pages/loadfeedbacks.php'); }
elseif ($language == 'en') { include('pages/en.php'); }
elseif ($language == 'vi') { include('pages/vi.php'); }
elseif ($language == 'ru') { include('pages/ru.php'); }
elseif ($language == 'es') { include('pages/es.php'); }
elseif ($page == 'index') { include('pages/vi.php'); }
else { include('pages/error.php'); }


function head() {
	$background = rand(1,4);
	echo '
	<!DOCTYPE html>
	<html>
	<head>
		<title>PUBG Servers Ping</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<style>
			html { 
				background: url(images/background'.$background.'.jpg) no-repeat center center fixed; 
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
			}	
			td, tr {
				padding: 5px;
			}
			#preloader {
				position: fixed;
				left: 0;
				top: 0;
				right: 0;
				bottom: 0;
				background: #fff;
				z-index: 100500;
			}
			#preloader .spinner {
				position: absolute;
				left: 50%;
				top: 50%;
				margin: -32px 0 0 -32px;
			}
			.version {
				opacity: 0.6; 
				padding: 5px;
				font-size: 12px;
				border-radius: 100px;
			}
			.version:hover {
				opacity: 1.0; 
			}
			.actionbutton {
				width: 90px;
				height: 24px;
				line-height: 24px;
				padding: 0 1rem;
				font-size: 12px;
			}
			.topbutton {
				height: 28px;
				line-height: 28px;
				padding: 0 1.5rem;
				font-size: 14px;
			}
		</style>
		<script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter44581822 = new Ya.Metrika2({ id:44581822, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/tag.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks2"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/44581822" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	</head>
	<body>
	<div id="preloader"><div class="spinner"><div class="preloader-wrapper big active"><div class="spinner-layer spinner-orange-only"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div></div></div>';
}

function foot() {
	echo '</body></html>'; 
}

?>
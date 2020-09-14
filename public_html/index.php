<?php
	$title = 'এম ডিস্ প্রোগ্রামিং ব্লগ ।';
	ob_start();
	include __DIR__.'/../templates/home.html.php';
	$output = ob_get_clean();
	include __DIR__.'/../templates/layout.html.php';
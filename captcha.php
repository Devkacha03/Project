<?php

	session_start();
	
	
	$md5 = md5 (rand(0, 999));
	$captcha = substr ($md5, 15, 5);
	//$width = 100;
	//$height = 20;
	$image = imagecreate (100, 20);
	$white = imagecolorallocate ($image, 255, 255, 255);
	$black = imagecolorallocate ($image, 0, 0, 0);
	$grey = imagecolorallocate ($image, 204, 204, 204);
	imagefill ($image, 0, 0, $black);
	imagestring ($image, 3, 30, 3, $captcha, $white);
	imagerectangle ($image,0,0,99,19,$grey);
	header ("Content-Type: image/jpeg");
	imagejpeg ($image);
	imagedestroy ($image);
	
	$_SESSION['captcha'] = $captcha;
	
	
?>
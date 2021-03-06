<?php
  session_start();
  // Generate captcha code
  $random_num    = md5(random_bytes(64));
  $captcha_code  = substr($random_num, 0, 6);

  // Assign captcha in session
  $_SESSION['CAPTCHA_CODE'] = $captcha_code;

  // Create captcha image
  $layer = imagecreatetruecolor(157, 32);
  $red = rand(0, 255);
  $green = rand(0, 255);
  $blue = rand(0, 255);
  $captcha_bg = imagecolorallocate($layer, $red, $green, $blue);
  imagefill($layer, 0, 0, $captcha_bg);
  $captcha_text_color = imagecolorallocate($layer, 0, 0, 0);
  imagestring($layer, 5, 55, 10, $captcha_code, $captcha_text_color);
  header("Content-type: image/png");
  imagepng($layer);

?>
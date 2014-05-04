<body style="font: 18px/1.5em serif;background-color: #000;color:#FFF;margin: 50px 20%; 0">
<?php 

require_once('recaptchalib.php');
$privatekey = "6Lce5vISAAAAANVZYpZE7EVaehobKifp7maiUYIY";
$resp = recaptcha_check_answer ($privatekey,
                              $_SERVER["REMOTE_ADDR"],
                              $_POST["recaptcha_challenge_field"],
                              $_POST["recaptcha_response_field"]);

if (!$resp->is_valid) {
  // What happens when the CAPTCHA was entered incorrectly
  die ("<h1>CAPTCHA code wrong, try again</h1>
  <h4><a href='index.html' style='font: sans-serif;color:white;'> Go back</a></h4>");
} else {
  $naam = $_POST['naam'];
  $email = $_POST['email'];
  $bericht = $_POST['bericht'];
  $formcontent="Afzender: $naam \n e-mail: $email \n Bericht: $bericht \r\n";
  $ontvanger = "wanda@wandavie.com";
  $onderwerp = "Oh, Wicked Wanda! mail";
  mail($ontvanger, $onderwerp, $formcontent) or die("Error!");
  echo "
  <h1>We've recieved your message</h1>
  <h4><a href='/' style='font: sans-serif;color:white;'> Click here to go back</a></h4>
  ";
}

?>
</body>
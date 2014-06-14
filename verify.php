<body style="font: 18px/1.5em serif;background-color: #000;color:#FFF;margin: 50px 20%; 0">
<?php
  $naam = $_POST['naam'];
  $email = $_POST['email'];
  $bericht = $_POST['bericht'];
  $formcontent="Afzender: $naam \n e-mail: $email \n Bericht: $bericht \r\n";
  $ontvanger = "wanda@wandavie.com";
  $onderwerp = "Wicked Wanda mail";
  mail($ontvanger, $onderwerp, $formcontent) or die("Error!");
  echo "
  <h1>Bericht ontvangen!</h1>
  <h4><a href='/' style='font: sans-serif;color:white;'> Klik om terug te gaan</a></h4>
  ";
?>
</body>

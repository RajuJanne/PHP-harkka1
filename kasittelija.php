<!-- Kasittelija.php:n tehtävänä on katsoa, että salasana on oikein. Käsittelijä ymmärtää vähintään yhden esiasetetun käyttäjätunnus ja salasana parin.
Jos salasana on oikein käsittelijä vastaa viestillä, jossa käsittelijä kertoo kirjautumisen onnistuneen.
Tämän viestin alla on kaksi vapaavalintaista linkkiä, jotka näkyy vain kirjautuneelle.
Jos salasana tai käyttäjätunnus on väärin, käsittelijä ilmoittaa siitä ja tarjoaa linkin takaisin lomakkeeseen.
Käsittelijän tulee kirjautumisen onnistuessa käynnistää sessio. Tutustukaa siis uuteen asiaan $_SESSION.
Session pitää muistaa kirjautumisenne ja tarjota kirjautuneelle logout-linkki.
-->
<?php
session_start();
$auth = array(
  // PW SECURITY THRU THE R00F
  "Timo" => "Soini"
);
$user = strip_tags($_POST['username']);
$pass = strip_tags($_POST['password']);

if(!$_POST['username'] == "" && !$_POST['password'] == ""){

  if ($auth[$user] == $pass)
  {
    $_SESSION["logged_user"] = $user;
    unset($_SESSION['error']);
    header("location: success.php");
  }
  else {
    header("location: index.php");
    $_SESSION['error'] = "Wrong password!";
  }
}
else
{
  header("location: index.php");
  $_SESSION['error'] = "You must fill both fields!";
}
?>

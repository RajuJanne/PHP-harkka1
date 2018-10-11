<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="author" content="Janne Rajuvaara">
  <title>PHP pakollinen tehtävä 1</title>
</head>
<body>
  <!-- Tehkää lomake, jossa on kaksi kenttää.
  Toinen kenttä on käyttäjätunnus ja toinen salasanakenttä.
  Lomake lähettää tiedot ulkopuoliseen käsittelijään nimeltä kasittelija.php.
  Kasittelija.php:n tehtävänä on katsoa, että salasana on oikein. Käsittelijä ymmärtää vähintään yhden esiasetetun käyttäjätunnus ja salasana parin.
  Jos salasana on oikein käsittelijä vastaa viestillä, jossa käsittelijä kertoo kirjautumisen onnistuneen.
  Tämän viestin alla on kaksi vapaavalintaista linkkiä, jotka näkyy vain kirjautuneelle.
  Jos salasana tai käyttäjätunnus on väärin, käsittelijä ilmoittaa siitä ja tarjoaa linkin takaisin lomakkeeseen.
  Käsittelijän tulee kirjautumisen onnistuessa käynnistää sessio. Tutustukaa siis uuteen asiaan $_SESSION.
  Session pitää muistaa kirjautumisenne ja tarjota kirjautuneelle logout-linkki.
  Kirjautuneena oleminen tarkoittaa siis sitä, että vaikka päivitätte selaimen tai suljette kyseisen käsittelijävälilehden sekä palatessanne käsittelijä muistaa edelleen, että olette kirjautuneena.

  Onnea! -->
<div>
<?php
if(!isset($_SESSION["logged_user"])) {
  echo '<div id="index-login-form">
      <form id="login" action="kasittelija.php" method="post">
        Username: <input type="text" name="username"><br />
        Password: <input type="password" name="password" autocomplete="off" placeholder="******"><br />
        <input type="submit" name="submit" value=" Login ">
        <span> ';
  if(isset($_SESSION["error"])){ echo $_SESSION["error"]; }
  echo '</span>
        </form>
      </div>
    </div>
    <div id="index-login-postit-note">
      <p>Username = Timo <br />Password = Soini</p>
    </div>';
}


else {
    echo '<div id="success-confirm">
      <p> logged in as ' . $_SESSION["logged_user"] .'</p>
      <a href="https://www.w3schools.com/php/default.asp" target="_blank">W3Schools PHP tutorial</a> <br />
      <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank">Great tutorial on PHP sessions</a>
    </div>
    <div id="logout-parent">
      <div id="logout">
        <form id="logout" action="logout.php" method="post">
          <input type="submit" name="logout" value=" Log out ">
        </form>
      </div>
    </div>';
  } ?>
</div>
</body>
</html>

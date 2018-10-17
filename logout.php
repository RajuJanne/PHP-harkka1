<?php
session_start();
//session_unset(); <-- vanhentunut, käytä seuraavaa riviä.
$_SESSION = array();
session_destroy();
header("Location: index.php");
?>

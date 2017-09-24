<?php
session_start();
unset($_SESSION["ses1"]);
unset($_SESSION["ses2"]);

echo '<meta http-equiv="refresh" content="0.5; URL=home.php" />';

?>
<?php
 session_start();
 ob_start();
 session_destroy();
 echo '<script> window.location="../home.php";</script>';
?>

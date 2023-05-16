<?php
session_start();
echo '<script> alert("You have successfully logged out!");</script>';
session_destroy();
echo '<script>window.location.href = "login.php";</script>';

exit;
?>

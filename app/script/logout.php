<?php
session_start();
session_unset(); 
session_destroy(); 


header('Location: ../views/user/login.php');
exit();
?>
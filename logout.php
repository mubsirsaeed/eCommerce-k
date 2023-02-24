<?php

session_start();
session_unset();
// unset($_SESSION['cart']);
session_destroy();

 header("Location:index.php");
?>
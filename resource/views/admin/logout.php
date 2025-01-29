<?php
session_start();
session_unset();
session_destroy();

// include __DIR__.'/../../../Index.php';

header('location:'.__DIR__.'/../../../index.php');
exit();

?>
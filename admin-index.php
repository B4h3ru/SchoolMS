<?php
require_once __DIR__."/includes/include.inc.php";


echo "checking........... <br>";
// echo __DIR__;
$view = new AdminView();
echo $view->display().'<br>';

$view = new AdminModel();
$view->display();

?>





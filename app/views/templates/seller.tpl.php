<?php
include('./app/controllers/ShoeController.php');
$shoes = ShoeController::list();
echo '<section>';
echo '<div class="container my-5">';
$index = 1;
foreach ($shoes as $value) {
include('shoecard.tpl.php');
$index++;
}

echo '</div>';
echo '</section>';

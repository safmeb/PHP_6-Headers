<?php

session_start();
if (isset($_SESSION['count'])=== true){
echo 'Количество открытий страницы: ' . ($_SESSION['count']).PHP_EOL;
}
else
   header('Location: sessionstart.php');

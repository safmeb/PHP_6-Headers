<?php

session_start();

echo 'Количество открытий страницы: ' . ($_SESSION['count']).PHP_EOL;

<?php
declare(strict_types=1);
header('Content-Type: text/plain');
header('Content-Disposition: attachment; filename="test.txt"', true,202);
echo $_GET['text'];

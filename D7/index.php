<?php

$now = strtotime($_GET['date2']); // or your date as well
$your_date = strtotime($_GET['date1']);
$datediff = $now - $your_date;

echo round($datediff / (60 * 60 * 24));
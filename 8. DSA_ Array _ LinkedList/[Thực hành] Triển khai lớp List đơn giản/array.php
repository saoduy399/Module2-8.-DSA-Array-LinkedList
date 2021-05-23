<?php
include "a.php";

$listInteger = new a();
$listInteger->add(1);
$listInteger->add(2);
$listInteger->add(3);

echo $listInteger->get(0);
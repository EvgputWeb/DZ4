<?php

require_once 'car.php';


$Logan = new Car(90/*enginePower*/, 'Mechanic'/*transmissionType*/);

$Logan->move(200, 20);
$Logan->move(50, 5, 'backward');

<?php

require "WarVessel_Abstract.php";
include "WarVessel_Factory.php";


//instatiation of object for vessel offensive
$factory_Of = new WarVessel_Factory( VesselOffensive_abstract() ); 

//instatiation of object for vessel support
$factory_Sup = new WarVessel_Factory( VesselSupport_abstract() ); 


$Cargo = $factory_Sup->Create_vesselSupport();

$cargo->test("Cargo");



?>
<?php

class Refuelling_Factory implements WarVessel_Factory
{
    //Redefinition of method Create_VesselOffensive()

    function Create_vesselSupport() : VesselSupport_abstract
    {
        return new Refuelling();
    }

}


?>
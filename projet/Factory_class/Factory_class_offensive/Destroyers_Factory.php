<?php

class Destroyers_Factory implements WarVessel_Factory
{
    //Redefinition of method Create_VesselOffensive()

    function Create_VesselOffensive() : VesselOffensive_abstract
    {
        return new Destroyers();
    }

}


?>
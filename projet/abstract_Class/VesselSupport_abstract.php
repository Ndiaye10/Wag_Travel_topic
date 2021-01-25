<fieldset>

    <legend>Battle Navy</legend>

    <?php

    include "WarVessel_Abstract.php";

    class   VesselSupport_abstract extends WarVessel_Abstract
    {
        public static $lifeGauge = 1000; //Life gauge for feed all of vessel in health

        //Definition of a constructor of the parent class that will allow us
        //to retrieve information from this class
        function __construct( $health, string $id , $current_vessel )
        {
            parent::__construct( $health, $id, $current_vessel);
        }

        //increase the health and decrease the life gauge available
        function increase_health( $life )
        {
            $this->health += $life;

            VesselSupport_abstract::$lifeGauge -= $life;
        }

        function test( $a ) : string {
            return " My type vessel is support and i am : ".$a;
        }

       
    }

    ?>


</fieldset>
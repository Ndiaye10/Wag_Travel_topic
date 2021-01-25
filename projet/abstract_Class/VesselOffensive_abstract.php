<fieldset>

    <legend>Battle Navy</legend>

    <?php

    include "WarVessel_Abstract.php";

    class   VesselOffensive_abstract extends WarVessel_Abstract
    {
        public $cannons;

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

        function test() : string {
            return " ......";
        }

       
    }
    
    ?>


</fieldset>
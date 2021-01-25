<fieldset>

    <legend>Battle Navy</legend>

    <?php

    abstract class WarVessel_Abstract
    {

        public $id;
        public $health;
        public static $current_vessel; //will give us independant total 
        //number of vessel who decrease over time and will give us the current vessel too 

        public $position_x;
        public $position_y;

        function __construct( $health, string $id, $current_vessel  )
        {
            $this->health = $health;
            $this->id = $id;
            WarVessel_Abstract::$current_vessel = $current_vessel;
        }

        abstract function test() : string;

    }


    ?>


</fieldset>
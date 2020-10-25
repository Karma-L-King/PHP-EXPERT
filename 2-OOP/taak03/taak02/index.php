<?php
    class auto {
        public $kleur ;      
        public $type;
        public $merk;
        public $uitvoering;
        public  $brandstof  ;  
    }     
        $nieuweAuto = new auto;
        $nieuweAuto->merk = "tesla";
        $nieuweAuto->type = "model 3";
        $nieuweAuto->kleur = "rood";
        $nieuweAuto->brandstof ="elektrisch";
        $nieuweAuto->uitvoering = "cabrio";
       
        echo $nieuweAuto->merk . "</br>" ;  
       
        echo $nieuweAuto->type . "</br>";
        echo $nieuweAuto->kleur . "</br>";
        echo $nieuweAuto->brandstof . "</br>";
        echo $nieuweAuto->uitvoering . "</br>";
    
    

?>
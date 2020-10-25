<?php
class scooter {
    public $merk;
    public $kleur;
    public $InhoudTank;

    public function CheckInhoudTank(){
        if ($this->InhoudTank == 100){
        echo "emmer is vol";}
        else { echo "emmer is niet vol";}
    }
}
$piago = new scooter;
$piago->merk = "piago";
$piago->kleur = "rood";
$piago->InhoudTank = "6";



$peugeot = new scooter;
$peugeot->merk = "peugeot";
$peugeot->kleur = "zwart";
$peugeot->InhoudTank = "7";


echo $piago->CheckInhoudTank();
echo $peugeot->CheckInhoudTank();
?>
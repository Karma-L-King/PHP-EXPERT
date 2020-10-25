<?php 

class lamp {
    public $kleur;
    public $helderheid;
    public $isAan;
    public function setStatus($status) {
        $this->isAan = "false";
    }
}

$woonkamerLamp = new lamp;
$woonkamerLamp->kleur = "geel";
$woonkamerLamp->helderheid = "zacht";
$woonkamerLamp->isAan = "true";

$keukenLamp = new lamp;
$keukenLamp->kleur ="wit";
$keukenLamp->helderheid ="vel";
$keukenLamp->isAan ="false";


?>
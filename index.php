<?php
class Avtomobillar{
    public $name;
    public $color;
    public $year;
    public $model;
    public $vazni;

    function __construct ($name,$color,$year,$model,$vazni){
        $this->name = $name;
        $this->color = $color;
        $this->year = $year;
        $this->model = $model;
        $this->vazni = $vazni;

        }
    function shookh(){
        echo "yangi avtomabil nomi". " ". $this-> name . " ". "rangi"." ". $this-> color.
        " "."ishlab chiqarilgan yili"." ". $this-> year. "va modeli"." ". $this-> model. "Avtomabil vazni"." ". $this-> vazni . "<br>";
    }
}
$bmw = new Avtomobillar('BMW','qizil','2025','M5','1444KG');
$bmw-> shookh();
?>
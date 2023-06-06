<?php
include "src/CalcularNota.php";
use PHPUnit\Framework\TestCase;

class CalcularNotaTest extends TestCase{

    public function ClassConstructorProvider(){

        return[
            [60, "Enhorabuena, estás en Primera División "],
            [45, "Estás en Segunada División"],
            [33, "Estás en Tercera División"],
            [20, "A Junio o Septiembre"]
        ];
    }

/**
 * @dataProvider ClassConstructorProvider
 */

 public function testClassConstructor($valor,$div){

    $nota = new CalcularNota($valor);

    $this->assertEqualsIgnoringCase($div, $nota->notas());
 }
}


?>
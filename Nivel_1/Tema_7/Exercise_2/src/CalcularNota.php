<?php
$nota1 = new CalcularNota (60);
$nota2 = new CalcularNota (50);
$nota3 = new CalcularNota (40);
$nota4 = new CalcularNota (30);

echo $nota1->notas() . "<br>";
echo $nota2->notas() . "<br>";
echo $nota3->notas() . "<br>";
echo $nota4->notas() . "<br>";

class CalcularNota{
    public function __construct(private int $nota){

        $this->nota = $nota;
    
    }
function notas() : string{
    $max = 100;
    $notaFinal = ($nota/$max)*100;

if ($nota >= 60) {

    return "Enhorabuena estas en Primera División ";

}else if($nota>=45){

    return "Estás en Segunda División";

}else if($nota >=33){

    return "Estás en Tercera División";
}else{

    return "A Junio o Septiempre";
        }
  
    }
}

?>
<?php 

$sigma = array('a','b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
$constantes = array(0,1,2,3,4,5,6,7,8,9);

$delta = array('q0'=>array('a'=>'q1', 'b'=>'q1', 'c'=>'q1', 'd'=>'q1', 'e'=>'q1','f'=> 'q1', 'g'=>'q1', 'h'=>'q1','i'=>'q2', 'j'=>'q1', 'k'=>'q1', 'l'=>'q1', 'm'=>'q1', 'n'=>'q1', 'o'=>'q1', 'p'=>'q1', 'q'=>'q1', 'r'=>'q1', 's'=>'q1', 't'=>'q1', 'u'=>'q1', 'v'=>'q1', 'w'=>'q1', 'x'=>'q1', 'y'=>'q1', 'z'=>'q1',
                0 => 'q4', 1 => 'q4', 2 => 'q4', 3 => 'q4', 4 => 'q4', 5 => 'q4', 6 => 'q4', 7 => 'q4', 8 => 'q4', 9 => 'q4'),
               'q2'=>array('a'=>'q1', 'b'=>'q1','i'=> 'q1', 'c'=>'q1', 'd'=>'q1', 'e'=>'q1', 'g'=>'q1', 'h'=>'q1','f'=>'q3', 'j'=>'q1', 'k'=>'q1', 'l'=>'q1', 'm'=>'q1', 'n'=>'q1', 'o'=>'q1', 'p'=>'q1', 'q'=>'q1', 'r'=>'q1', 's'=>'q1', 't'=>'q1', 'u'=>'q1', 'v'=>'q1', 'w'=>'q1', 'x'=>'q1', 'y'=>'q1', 'z'=>'q1'),
               'q3'=>array('a'=>'q1', 'b'=>'q1', 'c'=>'q1', 'd'=>'q1', 'e'=>'q1','f'=> 'q1', 'g'=>'q1', 'h'=>'q1','i'=>'q1', 'j'=>'q1', 'k'=>'q1', 'l'=>'q1', 'm'=>'q1', 'n'=>'q1', 'o'=>'q1', 'p'=>'q1', 'q'=>'q1', 'r'=>'q1', 's'=>'q1', 't'=>'q1', 'u'=>'q1', 'v'=>'q1', 'w'=>'q1', 'x'=>'q1', 'y'=>'q1', 'z'=>'q1'),
               'q1'=>array('a'=>'q1', 'b'=>'q1', 'c'=>'q1', 'd'=>'q1', 'e'=>'q1', 'f'=> 'q1', 'g'=>'q1', 'h'=>'q1','i'=>'q1', 'j'=>'q1', 'k'=>'q1', 'l'=>'q1', 'm'=>'q1', 'n'=>'q1', 'o'=>'q1', 'p'=>'q1', 'q'=>'q1', 'r'=>'q1', 's'=>'q1', 't'=>'q1', 'u'=>'q1', 'v'=>'q1', 'w'=>'q1', 'x'=>'q1', 'y'=>'q1', 'z'=>'q1', 0 => 'q1', 1 => 'q1', 2 => 'q1', 3 => 'q1', 4 => 'q1', 5 => 'q1', 6 => 'q1', 7 => 'q1', 8 => 'q1', 9 => 'q1'),
               'q4'=>array(0 => 'q4', 1 => 'q4', 2 => 'q4', 3 => 'q4', 4 => 'q4', 5 => 'q4', 6 => 'q4', 7 => 'q4', 8 => 'q4', 9 => 'q4', 'a'=>'q5', 'b'=>'q5', 'c'=>'q5', 'd'=>'q5', 'e'=>'q5', 'f'=> 'q5', 'g'=>'q5', 'h'=>'q5','i'=>'q5', 'j'=>'q5', 'k'=>'q5', 'l'=>'q5', 'm'=>'q5', 'n'=>'q5', 'o'=>'q5', 'p'=>'q5', 'q'=>'q5', 'r'=>'q5', 's'=>'q5', 't'=>'q5', 'u'=>'q5', 'v'=>'q5', 'w'=>'q5', 'x'=>'q5', 'y'=>'q5', 'z'=>'q5'),
               'q5'=>array(0 => 'q5', 1 => 'q5', 2 => 'q5', 3 => 'q5', 5 => 'q5', 5 => 'q5', 6 => 'q5', 7 => 'q5', 8 => 'q5', 9 => 'q5', 'a'=>'q5', 'b'=>'q5', 'c'=>'q5', 'd'=>'q5', 'e'=>'q5', 'f'=> 'q5', 'g'=>'q5', 'h'=>'q5','i'=>'q5', 'j'=>'q5', 'k'=>'q5', 'l'=>'q5', 'm'=>'q5', 'n'=>'q5', 'o'=>'q5', 'p'=>'q5', 'q'=>'q5', 'r'=>'q5', 's'=>'q5', 't'=>'q5', 'u'=>'q5', 'v'=>'q5', 'w'=>'q5', 'x'=>'q5', 'y'=>'q5', 'z'=>'q5', 0 => 'q5', 1 => 'q5', 2 => 'q5', 3 => 'q5', 4 => 'q5', 5 => 'q5', 6 => 'q5', 7 => 'q5', 8 => 'q5', 9 => 'q5'));
$Q = array('q0', 'q1', 'q2', 'q3', 'q4', 'q5');

$q0 = 'q0';
$finais = array('q1', 'q3', 'q4');

$palavra = 
(isset($_POST['palavra'])?$_POST['palavra']:"");

$palavra = strtolower($palavra);

$estado = $q0;

for($i = 0; $i < strlen($palavra); $i++){
    //if(array_key_exists[$delta[$estado]] )
    $estado = $delta[$estado][$palavra[$i]];
}

if(in_array($estado,$finais)){
    echo "Cadeia aceita "."<br>estado final foi"." ".$estado."<br>A palavra foi: ".$palavra;
    if($estado == 'q1')
        echo "<br>A cadeia na qual a palavra pertence é a 'iDS' (Palavra iniciada com letras que pode ou não houver números)";
        else if($estado == 'q3')
            echo "<br>A cadeia na qual a palavra pertence é a 'IF' (Palavra que contém apenas um caractere I e F )" ;
            else if($estado == 'q4')
                echo "<br>A cadeia na qual a palavra pertence é a 'Cosntante' (Apenas números na 'palavra')";
    echo '<br><a href="MainAutomatoLfa01.html">Digite outra palavra</a>';}
else{
    echo "Cadeia negada"."<br>O estado atual não é estado final "."<br>Estado atual: ".$estado."<br>A palavra foi: ".$palavra;
    echo '<br><a href="MainAutomatoLfa01.html">Digite outra palavra</a>';}

?>

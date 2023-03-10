<?php 

$sigma = array('a','b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');

$delta = array('q0'=>array('a'=>'q1', 'b'=>'q1', 'c'=>'q1', 'd'=>'q1', 'e'=>'q1','f'=> 'q2', 'g'=>'q1', 'h'=>'q1','i'=>'q1', 'j'=>'q1', 'k'=>'q1', 'l'=>'q1', 'm'=>'q1', 'n'=>'q1', 'o'=>'q1', 'p'=>'q1', 'q'=>'q1', 'r'=>'q1', 's'=>'q1', 't'=>'q1', 'u'=>'q1', 'v'=>'q1', 'w'=>'q1', 'x'=>'q1', 'y'=>'q1', 'z'=>'q1'),
               'q2'=>array('a'=>'q1', 'b'=>'q1','i'=> 'q3', 'c'=>'q1', 'd'=>'q1', 'e'=>'q1', 'g'=>'q1', 'h'=>'q1','f'=>'q1', 'j'=>'q1', 'k'=>'q1', 'l'=>'q1', 'm'=>'q1', 'n'=>'q1', 'o'=>'q1', 'p'=>'q1', 'q'=>'q1', 'r'=>'q1', 's'=>'q1', 't'=>'q1', 'u'=>'q1', 'v'=>'q1', 'w'=>'q1', 'x'=>'q1', 'y'=>'q1', 'z'=>'q1'),
               'q3'=>array('a'=>'q1', 'b'=>'q1', 'c'=>'q1', 'd'=>'q1', 'e'=>'q1','f'=> 'q1', 'g'=>'q1', 'h'=>'q1','i'=>'q1', 'j'=>'q1', 'k'=>'q1', 'l'=>'q1', 'm'=>'q1', 'n'=>'q1', 'o'=>'q1', 'p'=>'q1', 'q'=>'q1', 'r'=>'q1', 's'=>'q1', 't'=>'q1', 'u'=>'q1', 'v'=>'q1', 'w'=>'q1', 'x'=>'q1', 'y'=>'q1', 'z'=>'q1'),
               'q1'=>array('a'=>'q1', 'b'=>'q1', 'c'=>'q1', 'd'=>'q1', 'e'=>'q1', 'f'=> 'q1', 'g'=>'q1', 'h'=>'q1','i'=>'q1', 'j'=>'q1', 'k'=>'q1', 'l'=>'q1', 'm'=>'q1', 'n'=>'q1', 'o'=>'q1', 'p'=>'q1', 'q'=>'q1', 'r'=>'q1', 's'=>'q1', 't'=>'q1', 'u'=>'q1', 'v'=>'q1', 'w'=>'q1', 'x'=>'q1', 'y'=>'q1', 'z'=>'q1'));
$Q = array('q0', 'q1', 'q2', 'q3');

$q0 = 'q0';
$finais = array('q1', 'q3');

$palavra = 'f';
$estado = $q0;

for($i = 0; $i < strlen($palavra); $i++){
    //if(array_key_exists[$delta[$estado]] )
    $estado = $delta[$estado][$palavra[$i]];
}

if(in_array($estado,$finais))
    echo "Cadeia aceita"." e o estado final foi"." ".$estado;
else
    echo "Cadeia negada"." e o estado final foi"." ".$estado;


?>
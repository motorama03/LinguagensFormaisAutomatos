<?php 

$sigma = array('a','b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
$constantes = array(0,1,2,3,4,5,6,7,8,9);

$delta = array('q0'=>array('a'=>'q1', 'b'=>'q1', 'c'=>'q1', 'd'=>'q1', 'e'=>'q1','f'=> 'q2', 'g'=>'q1', 'h'=>'q1','i'=>'q1', 'j'=>'q1', 'k'=>'q1', 'l'=>'q1', 'm'=>'q1', 'n'=>'q1', 'o'=>'q1', 'p'=>'q1', 'q'=>'q1', 'r'=>'q1', 's'=>'q1', 't'=>'q1', 'u'=>'q1', 'v'=>'q1', 'w'=>'q1', 'x'=>'q1', 'y'=>'q1', 'z'=>'q1',
                0 => 'q4', 1 => 'q4', 2 => 'q4', 3 => 'q4', 4 => 'q4', 5 => 'q4', 6 => 'q4', 7 => 'q4', 8 => 'q4', 9 => 'q4'),
               'q2'=>array('a'=>'q1', 'b'=>'q1','i'=> 'q3', 'c'=>'q1', 'd'=>'q1', 'e'=>'q1', 'g'=>'q1', 'h'=>'q1','f'=>'q1', 'j'=>'q1', 'k'=>'q1', 'l'=>'q1', 'm'=>'q1', 'n'=>'q1', 'o'=>'q1', 'p'=>'q1', 'q'=>'q1', 'r'=>'q1', 's'=>'q1', 't'=>'q1', 'u'=>'q1', 'v'=>'q1', 'w'=>'q1', 'x'=>'q1', 'y'=>'q1', 'z'=>'q1'),
               'q3'=>array('a'=>'q1', 'b'=>'q1', 'c'=>'q1', 'd'=>'q1', 'e'=>'q1','f'=> 'q1', 'g'=>'q1', 'h'=>'q1','i'=>'q1', 'j'=>'q1', 'k'=>'q1', 'l'=>'q1', 'm'=>'q1', 'n'=>'q1', 'o'=>'q1', 'p'=>'q1', 'q'=>'q1', 'r'=>'q1', 's'=>'q1', 't'=>'q1', 'u'=>'q1', 'v'=>'q1', 'w'=>'q1', 'x'=>'q1', 'y'=>'q1', 'z'=>'q1'),
               'q1'=>array('a'=>'q1', 'b'=>'q1', 'c'=>'q1', 'd'=>'q1', 'e'=>'q1', 'f'=> 'q1', 'g'=>'q1', 'h'=>'q1','i'=>'q1', 'j'=>'q1', 'k'=>'q1', 'l'=>'q1', 'm'=>'q1', 'n'=>'q1', 'o'=>'q1', 'p'=>'q1', 'q'=>'q1', 'r'=>'q1', 's'=>'q1', 't'=>'q1', 'u'=>'q1', 'v'=>'q1', 'w'=>'q1', 'x'=>'q1', 'y'=>'q1', 'z'=>'q1', 0 => 'q1', 1 => 'q1', 2 => 'q1', 3 => 'q1', 4 => 'q1', 5 => 'q1', 6 => 'q1', 7 => 'q1', 8 => 'q1', 9 => 'q1'),
               'q4'=>array(0 => 'q4', 1 => 'q4', 2 => 'q4', 3 => 'q4', 4 => 'q4', 5 => 'q4', 6 => 'q4', 7 => 'q4', 8 => 'q4', 9 => 'q4'));

$Q = array('q0', 'q1', 'q2', 'q3', 'q4');

$q0 = 'q0';
$finais = array('q1', 'q3', 'q4');

$palavra = 
isset($_POST['palavra'])?$_POST['palavra']:"";

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
<DOCKTYPE html>
    <head></head>
    <body>
        <form method="POST">
            <label for="palavra">Palavra:</label><br>
            <input type="text" name="palavra" id="palavra"><br>
            <button type="submit">Verificar</button>
        </form>
    </body>
</DOCKTYPE>
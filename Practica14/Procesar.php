<?php
$Primero=$_POST['Primero'];
$Segundo=$_POST['Segundo'];
$Suma=$Primero + $Segundo;
$Resta=$Primero - $Segundo;
$Multiplica=$Primero * $Segundo;
$Divide=$Primero / $Segundo;
$accion = $_POST['Accion'];

if($accion == 'Sumar'){ 
    echo 'El resultado de la Suma es: '.$Suma.'<br>';
}
elseif($accion == 'Restar'){
    echo 'El resultado de la Resta es: '.$Resta.'<br>';
}
elseif($accion == 'Multiplicar'){
    echo 'El resultado de la Multiplicacion es: '.$Multiplica.'<br>';
}
else{    
    echo 'El resultado de la Divicion es: '.$Divide.'<br>';
}
?>
<?php
Define("PI",3.14);
$raio=rand(1,10);
function a($raio){

$area= PI * $raio * $raio;

return $area;
}
echo "A area é " .a($raio);
?>


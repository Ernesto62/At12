<?php



function percentagem($rapazes,$raparigas){
  $soma=$rapazes+$raparigas;
  $o=($rapazes/$soma)*100;
  echo "A percentagem dos rapazes é " .$o. "%";
  echo "<br>";
  $a=($raparigas/$soma)*100;
  echo "A percentagem dos rapazes é " .$a. "%";

   



}
$raparigas = rand(1,50);
$rapazes = rand(1,50);
percentagem($rapazes,$raparigas);

?>
<?php
function par($num){
	if ($num % 2==0){
		return true;
	}
	else {
		return false ;
	}
}
$n=rand(1,100);
if (par($n)){
	echo $n . ' é par';
}
else{
	echo $n. ' é impar';
}
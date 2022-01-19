<?php



$testArray = array( "테스트1","테스트2","테스트3","테스트4","테스트5");



print_r($testArray);



$removeArray = array_splice($testArray,0,2,'replaced_one');



echo "<br><br> " ;

print_r($testArray);

echo "<br><br> " ;

print_r($removeArray);


?>



출처: https://devjhs.tistory.com/474 [키보드와 하루]
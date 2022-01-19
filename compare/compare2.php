<html>
<body>
<?php
echo "1!=2 : ";
var_dump(1!=2);           #true
echo '<br />';
echo "1==\"1\" : ";
$first = 1;
$second = "1";
var_dump($first==$second);           #false
echo "<br />";
echo "1===\"1\" : ";  # iff same values and same types.
var_dump($first === $second);
echo '<br />';
echo '"one"!="two" : ';
var_dump("one"!="two");   #true
echo '<br />';
echo '"one"!="one" : ';
var_dump("one"!="one");   #false
echo '<br />';
?>
</body>
</html>
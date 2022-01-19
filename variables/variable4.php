<html>
<body>
<?php
$a = 100;
echo gettype($a);
settype($a, 'double');
echo '<br />';
echo gettype($a);
echo "<br />".$a;
?>
</body>
</html>
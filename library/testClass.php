<?php
class ABC {
    public $a=1234;
    public function b($c) {
        echo $c.$c.$c;
    }
}
$k = new ABC();
echo ($k->a).'</br>';
echo $k->b("냠냠냠");
?>
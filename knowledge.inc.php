<?php
 echo 'Knowledge:   ';
 $a = 'Мои знания на';
 $b = 100;
 $c = '%';
?>

<?php
$price = 17;

if (($price > 8) && ($price <= 20)) {
    echo "Число удовлетворяет условиям. <br>";
}

?>

<?php 
 $k = 11;
 $s = 7;

 if (($k < 11) || ($s * $k >= 17)) {
    $k -= $s;
    ++$k;
    echo 'k = ' . $k . "<br>";
}
 if (($s === 7) && ($k != 0)) {
    $s *= $k;
    if ($s > $k) {
        echo 's = ' . $s . "<br>";
    }
 }
?>

<?php
$a = array(25, 47, 42, 56, 32);
$oddArray = array();
$evenArray = array();
echo "Orginal array: \n";
$size = count($a);
for ($i = 0; $i < $size; $i++) {
    echo "$a[$i] ";
}
$j = 0;
$k = 0;
for ($i = 0; $i < $size; $i++) {
    if ($a[$i] % 2 == 0) {
        $evenArray[$j] = $a[$i];
        $j++;
    } else {
        $oddArray[$k] = $a[$i];
        $k++;
    }
}
echo "\nArray of even numbers : \n";
for ($i = 0; $i <= $j; $i++) {
    echo "$evenArray[$i] ";
}
echo "\nArray of odd numbers : \n";
for ($i = 0; $i <= $k; $i++) {
    echo "$oddArray[$i] ";
}
?>

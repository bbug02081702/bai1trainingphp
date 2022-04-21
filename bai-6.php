<?php
function kiemTraNguyenTo($n) {
    if ($n < 2) {
        return false;
    }
    $squareRoot = sqrt ( $n );
    for($i = 2; $i <= $squareRoot; $i ++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
$arr = array(array(3,3,3), array(4,4,4), array(5,5,5));
foreach ($arr as &$value) {
    foreach ($value as &$valueNested) {
    if( kiemTraNguyenTo($valueNested)){
        $result = $result + $valueNested;
    }
  }
}
echo $result 
?>
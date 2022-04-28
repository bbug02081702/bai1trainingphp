<?php
function nguyenam_phuam($chuoi)
{
    $dodaichuoi = strlen($chuoi) - 1;
    $kytunguyenam = array(
        "a",
        "e",
        "i",
        "o",
        "u"
    );
    $nguyenam = 0;
    $phuam = 0;
    for ($x = 0;$x <= $dodaichuoi; $x++)
    {
        if (in_array($chuoi[$x], $kytunguyenam))
        {
            $nguyenam++;
        }
        else
        {
            $phuam++;
        }
    }
    echo "số lượng các chữ cái nguyên âm: " . $nguyenam;
    echo "<br>số lượng các chữ cái phụ âm:" . $phuam;
}
nguyenam_phuam("training php");
?>

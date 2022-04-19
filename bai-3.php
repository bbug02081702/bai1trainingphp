<?php
$x = 1;
$length = 14;
$space = $length;
while ($x <= $length)
{
    $mid = ceil($x / 2);
    if ($mid <= 1)
    {
        echo (str_repeat('&nbsp;', $space * 1.5) . "$mid");
    }
    else
    {
        echo (str_repeat('&nbsp;', $space * 1.5));
        for ($i = 1; $i < $mid; $i++)
        {
            echo "$i ";
        }
        for ($i = $mid; $i >= 1; $i--)
        {
            echo "$i ";
        }
    }
    echo "</br>";
    $space = $space - 2;
    $x = $x + 2;
}
?>

<?php
$soDien = 37;
$soTienDien = 1000;
if ($soDien <= 50)
{
    echo "Số tiền điện cần thanh toán khi sử dụng $soDien số là: " . $tienDienThanhToan = $soDien * $soTienDien . "đ";
}
else if ($soDien > 50 && $soDien <= 100)
{
    echo "Số tiền điện cần thanh toán khi sử dụng $soDien số là: " . $tienDienThanhToan = $soDien * ($soTienDien + 200) . "đ";
}
else if ($soDien > 100 && $soDien <= 150)
{
    echo "Số tiền điện cần thanh toán khi sử dụng $soDien số là: " . $tienDienThanhToan = $soDien * ($soTienDien + 500) . "đ";
}
else if ($soDien > 150 && $soDien <= 200)
{
    echo "Số tiền điện cần thanh toán khi sử dụng $soDien số là: " . $tienDienThanhToan = $soDien * ($soTienDien + 750) . "đ";
}
else
{
    echo "Số tiền điện cần thanh toán khi sử dụng $soDien số là: " . $tienDienThanhToan = $soDien * ($soTienDien + 800) . "đ";
};
?>

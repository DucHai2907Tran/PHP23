<?php
$n = 2;
$giaithua = 1;
$tong = 0;
for ($i = 1; $i <= $n; $i++){
$giaithua *= $i;
$tong += 1/$giaithua;
}
echo "Tổng là: " . $tong;
?>
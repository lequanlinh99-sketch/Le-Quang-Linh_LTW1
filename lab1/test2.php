<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

echo "<h3>Câu 1</h3>";

$a = 20;
$b = 6;

echo "Tổng: " . ($a + $b) . "<br>";
echo "Hiệu: " . ($a - $b) . "<br>";
echo "Tích: " . ($a * $b) . "<br>";
echo "Thương: " . ($a / $b) . "<br>";
echo "Chia lấy dư: " . ($a % $b) . "<br>";


echo "<h3>Câu 2</h3>";

$x = 10;
$y = "10";

echo "x == y: ";
var_dump($x == $y);

echo "x === y: ";
var_dump($x === $y);

echo "x != y: ";
var_dump($x != $y);

echo "x <> y: ";
var_dump($x <> $y);

echo "x !== y: ";
var_dump($x !== $y);


echo "<h3>Câu 3</h3>";

$sx = 5;

echo "Gia tri ban dau: $sx <br>";

$ketqua1 = ++$sx;

echo "Tang truoc: $ketqua1 <br>";
echo "Gia tri bien: $sx <br>";

$sx = 5;

echo "Gia tri ban dau: $sx <br>";

$ketqua2 = $sx++;

echo "Tang sau: $ketqua2 <br>";
echo "Gia tri bien: $sx <br>";


echo "<h3>Câu 4</h3>";

$chuoi1 = "Xin chao";
$chuoi2 = " cac ban";

$ketqua = $chuoi1 . $chuoi2;

echo "Su dung dau cham: $ketqua <br>";

$chuoi1 .= $chuoi2;

echo "Su dung dau cham bang: $chuoi1 <br>";


echo "<h3>Câu 5</h3>";

$chuoi_khong_dau = "Hello World";
$chuoi_co_dau = "Xin chao Viet Nam";

echo "Chuoi khong dau: $chuoi_khong_dau <br>";
echo "So ky tu: " . strlen($chuoi_khong_dau) . "<br>";

echo "Chuoi co dau: $chuoi_co_dau <br>";
echo "So ky tu: " . mb_strlen($chuoi_co_dau, "UTF-8") . "<br>";


echo "<h3>Câu 6</h3>";

$chuoi = "Xin Chao Viet Nam";

echo "Chuoi ban dau: $chuoi <br>";
echo "Chu hoa: " . strtoupper($chuoi) . "<br>";
echo "Chu thuong: " . strtolower($chuoi) . "<br>";
echo "Chu hoa: " . mb_strtoupper($chuoi, "UTF-8") . "<br>";
echo "Chu thuong: " . mb_strtolower($chuoi, "UTF-8") . "<br>";


echo "<h3>Câu 7</h3>";

$chuoi1 = "123 abc";
$chuoi2 = "abc 123";

$so1 = (int)$chuoi1;
$so2 = (int)$chuoi2;

var_dump($so1);
var_dump($so2);


echo "<h3>Câu 8</h3>";

$so_nguyen = 100;
$so_thuc = 10.5;
$chuoi = "Hello PHP";
$kiemtra = true;

var_dump($so_nguyen);
var_dump($so_thuc);
var_dump($chuoi);
var_dump($kiemtra);

?>

</body>
</html>
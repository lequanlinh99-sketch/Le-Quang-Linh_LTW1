<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
echo "Họ tên: Lê Quang Linh <br>";
echo "Ngày sinh: 07/06/2007 <br>";
echo "Mã số sinh viên: 2125110078 <br>";
// câu 2
$hoten = "Lê Quang Linh";
$masv = "123456789";
$sodienthoai = "0912345678";
$ngaysinh = "01/01/2005";

echo "Họ tên: $hoten <br>";
echo "Mã số sinh viên: $masv <br>";
echo "Số điện thoại: $sodienthoai <br>";
echo "Ngày sinh: $ngaysinh <br>";

// Câu 3:
define("HOST", "localhost");
define("DATABASE", "quanly_sinhvien");
define("USERNAME", "root");
define("PASSWORD", "");

echo "HOST: " . HOST . "<br>";
echo "DATABASE: " . DATABASE . "<br>";
echo "USERNAME: " . USERNAME . "<br>";
echo "PASSWORD: " . PASSWORD . "<br>";

// Câu 4:
$ten = "Lê Quang Linh";

echo "Su dung nhay kep: $ten <br>";
echo 'Su dung nhay don: $ten <br>';

// Câu 5:


/*
heheheheheeheh
*/

echo "<h3>Câu 5: Comment</h3>";
echo "Da su dung nhieu dong.";
?>


</body>
</html>
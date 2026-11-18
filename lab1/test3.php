<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// 1. trim()
$str = "   Xin chao PHP   ";
echo "Chuoi ban dau: [" . $str . "]<br>";
echo "Sau trim(): [" . trim($str) . "]<br><br>";

// 2. ltrim() va rtrim()
$str = "   Hoc PHP co ban   ";
echo "Chuoi ban dau: [" . $str . "]<br>";
echo "Sau ltrim(): [" . ltrim($str) . "]<br>";
echo "Sau rtrim(): [" . rtrim($str) . "]<br><br>";

// 3. substr()
$str = "Lap trinh PHP co ban va nang cao rat thu vi";
echo "Chuoi ban dau: " . $str . "<br>";
echo "10 ky tu dau tien: " . substr($str, 0, 10) . "<br>";
echo "Tu ky tu thu 5 den het chuoi: " . substr($str, 4) . "<br><br>";

// 4. str_replace()
$str = "Hoc PHP co ban va PHP nang cao";
echo "Chuoi ban dau: " . $str . "<br>";
echo "Chuoi sau khi thay the: " . str_replace("PHP", "HTML", $str);
?>
</body>
</html>
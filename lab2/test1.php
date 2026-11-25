<?php 
$menus=["Trang chủ","Tin tức","Liên hệ","Giới thiệu"];
$subjects = ["HTML", "CSS", "JavaScript", "PHP", "MySQL"];
$students = [
    [
    "id" => "SV001",
    "name" => "Nguyễn Văn An",
    "gender" => "Nam",
    "class" => "CNTT1"
    ],
    [
    "id" => "SV002",
    "name" => "Trần Thị Bình",
    "gender" => "Nữ",
    "class" => "CNTT2"
    ],
    [
    "id" => "SV001",
    "name" => "Nguyễn Văn An",
    "gender" => "Nam",
    "class" => "CNTT1"
    ],
    [
    "id" => "SV002",
    "name" => "Trần Thị Bình",
    "gender" => "Nữ",
    "class" => "CNTT2"
    ]
];

$faculties = [
"Công nghệ thông tin",
"Quản trị kinh doanh",
"Kế toán",
"Ngôn ngữ Anh"
];
$classes = [
"A1" => "CNTT1",
"A2" => "CNTT2",
"A3" => "CNTT3",
"A4" => "CNTT4"
];
$genders = ["Nam", "Nữ", "Khác"];
$hobbies = [
"LT" => "Lập trình",
"DS" => "Đọc sách",
"AN" => "Âm nhạc",
"DL" => "Du lịch",
"TT" => "Thể thao"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        nav{
           background-color: rgb(4, 40, 94);

        }
        nav ul{
            list-style: none;
            display: flex;
        }
        nav a{
            color: white;
            text-decoration: none;
            font-weight: bold;
            display: block;
            padding: 15px;
            text-align: center;
        }
        nav ul li:hover{
            background:#084298;
        }
        nav li{
            flex: 1;
        }
        body{
            padding: 20px;

        }
    .s1{
        max-width: 500px;
        margin: 20px auto;
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow:0 0 10px rgba(0, 0, 0, 0.15) ;

    }
    .s1 h3{
        text-align: center;
        color: #0d6efd;
        margin-bottom: 20px;
    }
    .s1 ul{
        list-style: none;
    }
    .s1 li{
        padding: 12px;
        margin-bottom: 10px;
        background: #e7f1ff;
        border-left: 5px solid #0d6efd;
        border-radius: 5px;
        transition: .3s;
    }
    .s1 li:hover{
        background: #cfe2ff;
        transform: translate(5px);
    }

    .s2 table {
    width: 100%;
    border-collapse: collapse;
    }
    .s2 th,
    .s2 td{
        border: 1px solid #ddd;
        padding: 10px;
        text-align: center;
    }
    .s2 th {
    background-color: #0d6efd;
    color: white;
    }
    .s2 tbody tr:nth-child(odd) {
    background-color: #f5f6f7;
    }
    .s2 tbody tr:hover {
    background-color: #d9e7fa;
    }
    
/* ===== EDUCATION DASHBOARD ===== */

.s3 {
    max-width: 600px;
    margin: 45px auto;
    padding: 0;
    overflow: hidden;
    border-radius: 20px;
    background: #ffffff;
    box-shadow: 0 15px 45px rgba(35, 55, 110, 0.16);
    border: 1px solid #e8edfa;
    animation: dashboardShow 0.8s ease;
}

/* Tiêu đề */
.s3 h3 {
    position: relative;
    margin: 0;
    padding: 30px 20px;
    text-align: center;
    color: white;
    font-size: 24px;
    letter-spacing: 1px;
    line-height: 1.5;
    background: linear-gradient(120deg, #172554, #3730a3, #6366f1);
}

/* Đường trang trí */
.s3 h3::after {
    content: "";
    display: block;
    width: 65px;
    height: 4px;
    margin: 12px auto 0;
    background: #38bdf8;
    border-radius: 10px;
}

/* Form */
.s3 form {
    padding: 32px;
}

/* Các trường */
.s3 form > div:not(.buttons) {
    margin-bottom: 23px;
}

.s3 form > div > label:first-child {
    display: block;
    margin-bottom: 10px;
    color: #1e293b;
    font-size: 14px;
    font-weight: 700;
}

/* Ô nhập */
.s3 input[type="text"],
.s3 select {
    width: 100%;
    padding: 14px 16px;
    border: 1.5px solid #e2e8f0;
    border-radius: 10px;
    background: #f8faff;
    color: #334155;
    font-size: 14px;
    outline: none;
    transition: 0.3s;
}

.s3 input[type="text"]:focus,
.s3 select:focus {
    border-color: #6366f1;
    background: white;
    box-shadow: 0 0 0 4px rgba(99,102,241,0.12);
}

/* Lựa chọn */
.s3 input[type="radio"],
.s3 input[type="checkbox"] {
    accent-color: #4f46e5;
    width: 16px;
    height: 16px;
}

.s3 form > div > label:not(:first-child) {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    padding: 10px 13px;
    margin: 4px 5px 5px 0;
    border: 1px solid #e5e7eb;
    border-radius: 9px;
    background: #f8faff;
    color: #475569;
    font-size: 13px;
    cursor: pointer;
    transition: 0.25s;
}

.s3 form > div > label:not(:first-child):hover {
    border-color: #818cf8;
    background: #eef2ff;
    color: #4338ca;
    transform: translateY(-3px);
    box-shadow: 0 5px 12px rgba(99,102,241,0.12);
}

.s3 form > div > label:has(input:checked) {
    border-color: #6366f1;
    background: #eef2ff;
    color: #4338ca;
}

/* Nút */
.s3 .buttons {
    display: flex;
    gap: 14px;
    margin-top: 30px;
    margin-bottom: 0;
}

.s3 button {
    flex: 1;
    padding: 14px;
    border: none;
    border-radius: 10px;
    background: linear-gradient(120deg, #2563eb, #6366f1);
    color: white;
    font-size: 15px;
    font-weight: bold;
    cursor: pointer;
    box-shadow: 0 6px 15px rgba(79,70,229,0.2);
    transition: 0.3s;
}

.s3 button:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 22px rgba(79,70,229,0.3);
    background: linear-gradient(120deg, #1d4ed8, #4f46e5);
}

.s3 button.btn-reset {
    background: #f1f5f9;
    color: #475569;
    border: 1px solid #dbe3ef;
    box-shadow: none;
}

.s3 button.btn-reset:hover {
    background: #e2e8f0;
    color: #1e293b;
}

/* Animation */
@keyframes dashboardShow {
    from {
        opacity: 0;
        transform: translateY(25px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Responsive */
@media (max-width: 620px) {
    .s3 {
        margin: 25px 10px;
    }

    .s3 form {
        padding: 20px;
    }

    .s3 h3 {
        font-size: 20px;
    }
}


    </style>
</head>
<body>
    <nav>
        <ul>
            
            <?php  foreach ($menus as $menus) {?>
            <li>
                <a href="#"><?= $menus ?></a>
            </li>
                <?php } ?>
        </ul>
    </nav>
    <section class="s1">
        <h3>Danh sách ngôn ngữ có trong môn học</h3>
        <ul>
            <?php foreach($subjects as $subjects) {
                echo "<li>$subjects</li>";
            }
            ?>
        </ul>
    </section>
    <section class="s2">
        <h3>Danh sách sinh viên</h3>
        <table>
            <tr>
                <th>STT</th>
                <th>Mã sinh viên</th>
                <th>Họ và tên</th>
                <th>Giới tính</th>
                <th>Lớp</th>
            </tr>
            <?php foreach($students as $index=>$students){?>
            <tr>
                <td><?$index+1 ?></td>
                <td><?=$students["id"]?></td>
                <td><?=$students["name"]?></td>
                <td><?=$students["gender"]?></td>
                <td><?=$students["class"]?></td>
            </tr>
            <?php } ?>
        </table>
    </section>
    <section class="s3">
<h3>ĐĂNG KÝ THÔNG TIN SINH
VIÊN</h3>
<form action="#" method="post">
<div>
<label>Họ và tên</label>
<input type="text" name="name" placeholder="Nhập họ và tên">
</div>
<div>
<label>Khoa</label>
<select name="faculty">
<?php foreach ($faculties as $faculty) { ?>
<option><?= $faculty ?></option>
<?php } ?>
</select>
</div>
<div>
<label>Lớp</label>
<select name="class">
<?php foreach ($classes as $key => $class) { ?>
<option value="<?= $key ?>">
<?= $class ?>
</option>
<?php } ?>
</select>
</div>
<div>
<label>Giới tính</label>
<?php foreach ($genders as $gender) { ?>
<label>
<input type="radio" name="gender"
value="<?= $gender ?>">
<?= $gender ?>
</label>
<?php } ?>
</div>
<div>
<label>Sở thích</label>
<?php foreach ($hobbies as $key => $hobby) { ?>
<label>
<input type="checkbox" name="hobbies[]"
value="<?= $key ?>">
<?= $hobby ?>
</label>
<?php } ?>
</div>
<div>
<button type="submit" name="submit">Đăng ký</button>
<form action="#" method="post" class="student-form">
<button type="reset" class="btn-reset">Làm mới</button>
</div>
</form>
</section>
</body>
</html>
<?php
include "kiemtra.php";
include "ketnoi.php";

// Đếm số truyện
$sql1 = "SELECT COUNT(*) AS tong FROM truyen";
$kq1 = mysqli_query($conn, $sql1);
$truyen = mysqli_fetch_assoc($kq1);

// Đếm số thể loại
$sql2 = "SELECT COUNT(*) AS tong FROM theloai";
$kq2 = mysqli_query($conn, $sql2);
$theloai = mysqli_fetch_assoc($kq2);

// Đếm số đơn hàng
$sql3 = "SELECT COUNT(*) AS tong FROM donhang";
$kq3 = mysqli_query($conn, $sql3);
$donhang = mysqli_fetch_assoc($kq3);

// Đếm số tài khoản
$sql4 = "SELECT COUNT(*) AS tong FROM taikhoan";
$kq4 = mysqli_query($conn, $sql4);
$taikhoan = mysqli_fetch_assoc($kq4);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Trang thống kê</title>
</head>
<body>

<h1>TRANG QUẢN TRỊ WEBSITE TRUYỆN TRANH</h1>

<p>Xin chào quản trị viên: <?php echo $_SESSION["admin"]; ?></p>

<hr>

<h2>MENU QUẢN LÝ</h2>

<a href="thongke.php">Thống kê</a> |
<a href="qlitruyentranh.php">Quản lý truyện tranh</a> |
<a href="qlitheloai.php">Quản lý thể loại</a> |
<a href="qlidonhang.php">Quản lý đơn hàng</a> |
<a href="qltrangthai.php">Quản lý trạng thái</a> |
<a href="qlitaikhoan.php">Quản lý tài khoản</a>

<hr>

<h2>THỐNG KÊ HỆ THỐNG</h2>

<table border="1" cellpadding="15">
    <tr>
        <th>Nội dung</th>
        <th>Số lượng</th>
    </tr>

    <tr>
        <td>Tổng số truyện tranh</td>
        <td><?php echo $truyen["tong"]; ?></td>
    </tr>

    <tr>
        <td>Tổng số thể loại</td>
        <td><?php echo $theloai["tong"]; ?></td>
    </tr>

    <tr>
        <td>Tổng số đơn hàng</td>
        <td><?php echo $donhang["tong"]; ?></td>
    </tr>

    <tr>
        <td>Tổng số tài khoản</td>
        <td><?php echo $taikhoan["tong"]; ?></td>
    </tr>
</table>

</body>
</html>

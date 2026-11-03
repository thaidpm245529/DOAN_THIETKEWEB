<?php
include("kiemtra.php");
include("ketnoi.php");

$sql = "SELECT * FROM taikhoan ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Quản lý tài khoản</title>
</head>
<body>

<h2>QUẢN LÝ TÀI KHOẢN</h2>

<a href="thongke.php">Thống kê</a> |
<a href="qlitruyen.php">Quản lý truyện</a> |
<a href="qlitheloai.php">Quản lý thể loại</a> |
<a href="qlidonhang.php">Quản lý đơn hàng</a> |
<a href="qltrangthai.php">Trạng thái đơn hàng</a> |
<a href="qlitaikhoan.php">Quản lý tài khoản</a> |
<a href="dangxuatqt.php">Đăng xuất</a>

<hr>

<table border="1" cellpadding="10" cellspacing="0">

<tr>
    <th>ID</th>
    <th>Tên đăng nhập</th>
    <th>Họ tên</th>
    <th>Email</th>
    <th>Vai trò</th>
</tr>

<?php
while ($row = mysqli_fetch_assoc($result)) {
?>

<tr>

    <td><?php echo $row["id"]; ?></td>

    <td><?php echo $row["ten_dang_nhap"]; ?></td>

    <td><?php echo $row["ho_ten"]; ?></td>

    <td><?php echo $row["email"]; ?></td>

    <td><?php echo $row["vai_tro"]; ?></td>

</tr>

<?php
}
?>

</table>

</body>
</html>

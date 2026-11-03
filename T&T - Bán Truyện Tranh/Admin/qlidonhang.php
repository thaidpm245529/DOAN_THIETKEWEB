<?php
include("kiemtra.php");
include("ketnoi.php");

$sql = "SELECT * FROM donhang ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Quản lý đơn hàng</title>
</head>
<body>

<h2>QUẢN LÝ ĐƠN HÀNG</h2>

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
    <th>Mã đơn hàng</th>
    <th>Tên người nhận</th>
    <th>Số điện thoại</th>
    <th>Địa chỉ</th>
    <th>Tổng tiền</th>
    <th>Trạng thái</th>
    <th>Ngày đặt</th>
</tr>

<?php
while ($row = mysqli_fetch_assoc($result)) {
?>

<tr>
    <td><?php echo $row["id"]; ?></td>

    <td><?php echo $row["ten_nguoi_nhan"]; ?></td>

    <td><?php echo $row["so_dien_thoai"]; ?></td>

    <td><?php echo $row["dia_chi"]; ?></td>

    <td><?php echo number_format($row["tong_tien"]); ?> VNĐ</td>

    <td><?php echo $row["trang_thai"]; ?></td>

    <td><?php echo $row["ngay_dat"]; ?></td>
</tr>

<?php
}
?>

</table>

</body>
</html>

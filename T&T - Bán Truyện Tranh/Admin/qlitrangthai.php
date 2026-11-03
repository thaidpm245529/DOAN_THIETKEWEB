<?php
include("kiemtra.php");
include("ketnoi.php");

if (isset($_POST["capnhat"])) {

    $id = $_POST["id"];
    $trangthai = $_POST["trang_thai"];

    $sql = "UPDATE donhang
            SET trang_thai='$trangthai'
            WHERE id='$id'";

    mysqli_query($conn, $sql);
}

$sql = "SELECT * FROM donhang ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Quản lý trạng thái</title>
</head>
<body>

<h2>QUẢN LÝ TRẠNG THÁI ĐƠN HÀNG</h2>

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
    <th>Mã đơn</th>
    <th>Người nhận</th>
    <th>Tổng tiền</th>
    <th>Trạng thái</th>
    <th>Cập nhật</th>
</tr>

<?php
while ($row = mysqli_fetch_assoc($result)) {
?>

<tr>
    <td><?php echo $row["id"]; ?></td>

    <td><?php echo $row["ten_nguoi_nhan"]; ?></td>

    <td><?php echo number_format($row["tong_tien"]); ?> VNĐ</td>

    <td><?php echo $row["trang_thai"]; ?></td>

    <td>

        <form method="post">

            <input type="hidden" name="id"
            value="<?php echo $row["id"]; ?>">

            <select name="trang_thai">

                <option value="Chờ xác nhận">Chờ xác nhận</option>

                <option value="Đang xử lý">Đang xử lý</option>

                <option value="Đang giao">Đang giao</option>

                <option value="Đã giao">Đã giao</option>

                <option value="Đã hủy">Đã hủy</option>

            </select>

            <button type="submit" name="capnhat">
                Cập nhật
            </button>

        </form>

    </td>
</tr>

<?php
}
?>

</table>

</body>
</html>

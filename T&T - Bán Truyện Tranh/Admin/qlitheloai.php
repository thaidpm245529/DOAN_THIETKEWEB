<?php
include("kiemtra.php");
include("ketnoi.php");

// Thêm thể loại
if (isset($_POST["them"])) {

    $ten = $_POST["ten_the_loai"];

    $sql = "INSERT INTO theloai(ten_the_loai)
            VALUES('$ten')";

    mysqli_query($conn, $sql);

    header("Location: qlitheloai.php");
    exit();
}

// Xóa thể loại
if (isset($_GET["xoa"])) {

    $id = $_GET["xoa"];

    $sql = "DELETE FROM theloai WHERE id='$id'";

    mysqli_query($conn, $sql);

    header("Location: qlitheloai.php");
    exit();
}

// Hiển thị thể loại
$sql = "SELECT * FROM theloai ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Quản lý thể loại</title>
</head>
<body>

<h2>QUẢN LÝ THỂ LOẠI</h2>

<a href="thongke.php">Thống kê</a> |
<a href="qlitruyen.php">Quản lý truyện</a> |
<a href="qlitheloai.php">Quản lý thể loại</a> |
<a href="qlidonhang.php">Quản lý đơn hàng</a> |
<a href="qltrangthai.php">Trạng thái đơn hàng</a> |
<a href="qlitaikhoan.php">Quản lý tài khoản</a> |
<a href="dangxuatqt.php">Đăng xuất</a>

<hr>

<h3>THÊM THỂ LOẠI</h3>

<form method="post">

    Tên thể loại:

    <input type="text" name="ten_the_loai" required>

    <button type="submit" name="them">
        Thêm thể loại
    </button>

</form>

<hr>

<h3>DANH SÁCH THỂ LOẠI</h3>

<table border="1" cellpadding="10" cellspacing="0">

<tr>
    <th>ID</th>
    <th>Tên thể loại</th>
    <th>Thao tác</th>
</tr>

<?php
while ($row = mysqli_fetch_assoc($result)) {
?>

<tr>

    <td><?php echo $row["id"]; ?></td>

    <td><?php echo $row["ten_the_loai"]; ?></td>

    <td>
        <a href="qlitheloai.php?xoa=<?php echo $row["id"]; ?>"
        onclick="return confirm('Bạn có muốn xóa không?')">
            Xóa
        </a>
    </td>

</tr>

<?php
}
?>

</table>

</body>
</html>

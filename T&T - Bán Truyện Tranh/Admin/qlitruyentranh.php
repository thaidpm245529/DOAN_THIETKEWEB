<?php
include "kiemtra.php";
include "ketnoi.php";

// Thêm truyện
if (isset($_POST["them"])) {
    $tieude = $_POST["tieude"];
    $tacgia = $_POST["tacgia"];
    $theloai = $_POST["theloai"];
    $gia = $_POST["gia"];

    $sql = "INSERT INTO truyen (tieu_de, tac_gia, the_loai_id, gia)
            VALUES ('$tieude', '$tacgia', '$theloai', '$gia')";

    mysqli_query($conn, $sql);

    header("Location: qlitruyentranh.php");
    exit();
}

// Xóa truyện
if (isset($_GET["xoa"])) {
    $id = $_GET["xoa"];

    $sql = "DELETE FROM truyen WHERE id = '$id'";
    mysqli_query($conn, $sql);

    header("Location: qlitruyentranh.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Quản lý truyện tranh</title>
</head>
<body>

<h1>QUẢN LÝ TRUYỆN TRANH</h1>

<a href="thongke.php">Thống kê</a> |
<a href="qlitruyentranh.php">Quản lý truyện</a> |
<a href="qlitheloai.php">Quản lý thể loại</a> |
<a href="qlidonhang.php">Quản lý đơn hàng</a> |
<a href="qlitaikhoan.php">Quản lý tài khoản</a> |
<a href="qltrangthai.php">Quản lý trạng thái</a>

<hr>

<h2>Thêm truyện tranh</h2>

<form method="POST">
    Tiêu đề:
    <input type="text" name="tieude" required><br><br>

    Tác giả:
    <input type="text" name="tacgia" required><br><br>

    Thể loại:
    <input type="number" name="theloai" required><br><br>

    Giá:
    <input type="number" name="gia" required><br><br>

    <button type="submit" name="them">Thêm truyện</button>
</form>

<hr>

<h2>Danh sách truyện tranh</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Tiêu đề</th>
        <th>Tác giả</th>
        <th>Thể loại</th>
        <th>Giá</th>
        <th>Thao tác</th>
    </tr>

    <?php
    $sql = "SELECT * FROM truyen";
    $ketqua = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($ketqua)) {
    ?>

    <tr>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["tieu_de"]; ?></td>
        <td><?php echo $row["tac_gia"]; ?></td>
        <td><?php echo $row["the_loai_id"]; ?></td>
        <td><?php echo $row["gia"]; ?></td>
        <td>
            <a href="qlitruyentranh.php?xoa=<?php echo $row['id']; ?>"
               onclick="return confirm('Bạn có muốn xóa truyện này không?')">
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

<?php
session_start();
include "ketnoi.php";

if (!isset($_SESSION["giohang"])) {
    $_SESSION["giohang"] = array();
}

// Thêm truyện
if (isset($_GET["them"])) {
    $id = $_GET["them"];

    if (isset($_SESSION["giohang"][$id])) {
        $_SESSION["giohang"][$id]++;
    } else {
        $_SESSION["giohang"][$id] = 1;
    }
}

// Xóa truyện
if (isset($_GET["xoa"])) {
    $id = $_GET["xoa"];
    unset($_SESSION["giohang"][$id]);
}
?>

<h1>GIỎ HÀNG</h1>

<a href="danhsachtruyen.php">Tiếp tục mua hàng</a>

<table border="1" cellpadding="10">
    <tr>
        <th>Tên truyện</th>
        <th>Giá</th>
        <th>Số lượng</th>
        <th>Thành tiền</th>
        <th>Thao tác</th>
    </tr>

    <?php
    $tongtien = 0;

    foreach ($_SESSION["giohang"] as $id => $soluong) {
        $sql = "SELECT * FROM truyen WHERE id = '$id'";
        $kq = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($kq);

        if ($row) {
            $thanhtien = $row["gia"] * $soluong;
            $tongtien += $thanhtien;
    ?>

    <tr>
        <td><?php echo $row["tieu_de"]; ?></td>
        <td><?php echo number_format($row["gia"]); ?> VNĐ</td>
        <td><?php echo $soluong; ?></td>
        <td><?php echo number_format($thanhtien); ?> VNĐ</td>
        <td>
            <a href="giohang.php?xoa=<?php echo $id; ?>">Xóa</a>
        </td>
    </tr>

    <?php
        }
    }
    ?>
</table>

<h3>Tổng tiền: <?php echo number_format($tongtien); ?> VNĐ</h3>

<a href="dondathang.php">Tiến hành đặt hàng</a>

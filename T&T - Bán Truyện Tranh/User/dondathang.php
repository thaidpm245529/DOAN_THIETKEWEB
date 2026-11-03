<?php
session_start();
include "ketnoi.php";

if (!isset($_SESSION["user"])) {
    echo "Vui lòng đăng nhập trước!";
    exit();
}

if (isset($_POST["dathang"])) {
    $ten = $_POST["ten"];
    $sdt = $_POST["sdt"];
    $diachi = $_POST["diachi"];

    $tongtien = 0;

    foreach ($_SESSION["giohang"] as $id => $soluong) {
        $sql = "SELECT * FROM truyen WHERE id = '$id'";
        $kq = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($kq);

        if ($row) {
            $tongtien += $row["gia"] * $soluong;
        }
    }

    $sql = "INSERT INTO donhang
    (ten_nguoi_nhan, so_dien_thoai, dia_chi, tong_tien, trang_thai, ngay_dat)
    VALUES ('$ten', '$sdt', '$diachi', '$tongtien', 'Chờ xác nhận', NOW())";

    if (mysqli_query($conn, $sql)) {
        unset($_SESSION["giohang"]);
        echo "Đặt hàng thành công!";
    } else {
        echo "Đặt hàng thất bại!";
    }
}
?>

<h1>ĐẶT HÀNG</h1>

<form method="POST">
    Tên người nhận:
    <input type="text" name="ten" required><br><br>

    Số điện thoại:
    <input type="text" name="sdt" required><br><br>

    Địa chỉ:
    <input type="text" name="diachi" required><br><br>

    <button type="submit" name="dathang">Xác nhận đặt hàng</button>
</form>

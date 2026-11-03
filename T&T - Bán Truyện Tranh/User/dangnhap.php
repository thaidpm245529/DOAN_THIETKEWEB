<?php
session_start();
include "ketnoi.php";

if (isset($_POST["dangnhap"])) {
    $ten = $_POST["ten"];
    $matkhau = $_POST["matkhau"];

    $sql = "SELECT * FROM taikhoan
            WHERE ten_dang_nhap = '$ten'";

    $ketqua = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($ketqua);

    if ($row && password_verify($matkhau, $row["mat_khau"])) {
        $_SESSION["user"] = $row["id"];
        $_SESSION["hoten"] = $row["ho_ten"];

        header("Location: danhsachtruyen.php");
        exit();
    } else {
        echo "Sai tên đăng nhập hoặc mật khẩu!";
    }
}
?>

<h1>ĐĂNG NHẬP</h1>

<form method="POST">
    Tên đăng nhập:
    <input type="text" name="ten" required><br><br>

    Mật khẩu:
    <input type="password" name="matkhau" required><br><br>

    <button type="submit" name="dangnhap">Đăng nhập</button>
</form>

<a href="dangky.php">Chưa có tài khoản? Đăng ký</a>

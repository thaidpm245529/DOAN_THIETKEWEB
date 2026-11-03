<?php
include "ketnoi.php";

if (isset($_POST["dangky"])) {
    $ten = $_POST["ten"];
    $matkhau = password_hash($_POST["matkhau"], PASSWORD_DEFAULT);
    $hoten = $_POST["hoten"];
    $email = $_POST["email"];

    $sql = "INSERT INTO taikhoan
    (ten_dang_nhap, mat_khau, ho_ten, email, vai_tro)
    VALUES ('$ten', '$matkhau', '$hoten', '$email', 'user')";

    if (mysqli_query($conn, $sql)) {
        echo "Đăng ký thành công!";
    } else {
        echo "Đăng ký thất bại!";
    }
}
?>

<h1>ĐĂNG KÝ TÀI KHOẢN</h1>

<form method="POST">
    Tên đăng nhập:
    <input type="text" name="ten" required><br><br>

    Mật khẩu:
    <input type="password" name="matkhau" required><br><br>

    Họ tên:
    <input type="text" name="hoten" required><br><br>

    Email:
    <input type="email" name="email" required><br><br>

    <button type="submit" name="dangky">Đăng ký</button>
</form>

<a href="dangnhap.php">Đã có tài khoản? Đăng nhập</a>

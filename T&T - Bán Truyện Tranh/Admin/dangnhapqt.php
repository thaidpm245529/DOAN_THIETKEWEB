<?php
session_start();
include("ketnoi.php");

if (isset($_POST["dangnhap"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM taikhoan
            WHERE ten_dang_nhap='$username'
            AND vai_tro='admin'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row["mat_khau"])) {
            $_SESSION["admin"] = $row["ho_ten"];

            header("Location: thongke.php");
            exit();
        }
        else {
            $thongbao = "Sai mật khẩu!";
        }
    }
    else {
        $thongbao = "Không tìm thấy tài khoản!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập ADMIN</title>
</head>

<body>

<h2>ĐĂNG NHẬP QUẢN TRỊ</h2>

<form method="post">

    Tên đăng nhập:
    <input type="text" name="username" required>
    <br><br>

    Mật khẩu:
    <input type="password" name="password" required>
    <br><br>

    <button type="submit" name="dangnhap">
        Đăng nhập
    </button>

</form>

<?php
if (isset($thongbao)) {
    echo $thongbao;
}
?>

</body>
</html>

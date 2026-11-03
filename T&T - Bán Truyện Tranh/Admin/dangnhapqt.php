<?php
require_once "config.php";$error="";
if($_SERVER["REQUEST_METHOD"]==="POST"){$u=trim($_POST["username"]??"");$p=$_POST["password"]??"";
$s=$conn->prepare("SELECT * FROM taikhoan WHERE ten_dang_nhap=? AND vai_tro='admin' LIMIT 1");$s->execute([$u]);$a=$s->fetch();
if($a&&password_verify($p,$a["mat_khau"])){$_SESSION["admin_id"]=$a["id"];$_SESSION["admin_name"]=$a["ho_ten"];header("Location: thongke.php");exit;}else{$error="Sai tên đăng nhập hoặc mật khẩu.";}}
?><!DOCTYPE html><html lang="vi"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Đăng nhập Admin</title><link rel="stylesheet" href="admin.css"></head><body class="login-page"><form class="login-box" method="post"><h2>ADMIN TRUYỆN TRANH</h2><p>Đăng nhập hệ thống</p><?php if($error):?><div class="alert"><?=$error?></div><?php endif;?><label>Tên đăng nhập</label><input name="username" required><label>Mật khẩu</label><input type="password" name="password" required><button class="btn">Đăng nhập</button><small>Tài khoản mẫu: admin / Admin@123</small></form></body></html>

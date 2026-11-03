<?php
session_start();
include "ketnoi.php";

if (!isset($_SESSION["user"])) {
    echo "Vui lòng đăng nhập!";
    exit();
}

$sql = "SELECT * FROM donhang
        WHERE tai_khoan_id = '" . $_SESSION["user"] . "'
        ORDER BY ngay_dat DESC";

$ketqua = mysqli_query($conn, $sql);
?>

<h1>LỊCH SỬ MUA HÀNG</h1>

<table border="1" cellpadding="10">
    <tr>
        <th>Mã đơn hàng</th>
        <th>Người nhận</th>
        <th>Tổng tiền</th>
        <th>Trạng thái</th>
        <th>Ngày đặt</th>
    </tr>

    <?php
    while ($row = mysqli_fetch_assoc($ketqua)) {
    ?>
    <tr>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["ten_nguoi_nhan"]; ?></td>
        <td><?php echo number_format($row["tong_tien"]); ?> VNĐ</td>
        <td><?php echo $row["trang_thai"]; ?></td>
        <td><?php echo $row["ngay_dat"]; ?></td>
    </tr>
    <?php
    }
    ?>
</table>

<?php
include "ketnoi.php";

$sql = "SELECT * FROM truyen";
$ketqua = mysqli_query($conn, $sql);
?>

<h1>DANH SÁCH TRUYỆN TRANH</h1>

<a href="giohang.php">Giỏ hàng</a> |
<a href="phanloai.php">Phân loại</a> |
<a href="timkiem.php">Tìm kiếm</a> |
<a href="lichsumuahang.php">Lịch sử mua hàng</a>

<hr>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Tên truyện</th>
        <th>Tác giả</th>
        <th>Giá</th>
        <th>Chi tiết</th>
    </tr>

    <?php
    while ($row = mysqli_fetch_assoc($ketqua)) {
    ?>
    <tr>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["tieu_de"]; ?></td>
        <td><?php echo $row["tac_gia"]; ?></td>
        <td><?php echo number_format($row["gia"]); ?> VNĐ</td>
        <td>
            <a href="giohang.php?them=<?php echo $row['id']; ?>">
                Thêm vào giỏ
            </a>
        </td>
    </tr>
    <?php
    }
    ?>
</table>

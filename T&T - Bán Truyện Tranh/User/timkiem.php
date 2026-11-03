<?php
include "ketnoi.php";

if (isset($_POST["tim"])) {
    $tukhoa = $_POST["tukhoa"];

    $sql = "SELECT * FROM truyen
            WHERE tieu_de LIKE '%$tukhoa%'";

    $ketqua = mysqli_query($conn, $sql);
}
?>

<h1>TÌM KIẾM TRUYỆN TRANH</h1>

<form method="POST">
    <input type="text" name="tukhoa"
           placeholder="Nhập tên truyện cần tìm">

    <button type="submit" name="tim">Tìm kiếm</button>
</form>

<hr>

<?php
if (isset($_POST["tim"])) {
?>

<table border="1" cellpadding="10">
    <tr>
        <th>Tên truyện</th>
        <th>Tác giả</th>
        <th>Giá</th>
    </tr>

    <?php
    while ($row = mysqli_fetch_assoc($ketqua)) {
    ?>
    <tr>
        <td><?php echo $row["tieu_de"]; ?></td>
        <td><?php echo $row["tac_gia"]; ?></td>
        <td><?php echo number_format($row["gia"]); ?> VNĐ</td>
    </tr>
    <?php
    }
    ?>
</table>

<?php
}
?>

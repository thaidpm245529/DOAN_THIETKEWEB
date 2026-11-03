<?php
include "ketnoi.php";

$sql = "SELECT * FROM theloai";
$ketqua = mysqli_query($conn, $sql);
?>

<h1>PHÂN LOẠI TRUYỆN</h1>

<?php
while ($row = mysqli_fetch_assoc($ketqua)) {
?>
    <a href="phanloai.php?id=<?php echo $row['id']; ?>">
        <?php echo $row["ten_the_loai"]; ?>
    </a> |
<?php
}
?>

<hr>

<h2>Danh sách truyện</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>Tên truyện</th>
        <th>Tác giả</th>
        <th>Giá</th>
    </tr>

    <?php
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        $sql = "SELECT * FROM truyen WHERE the_loai_id = '$id'";
    } else {
        $sql = "SELECT * FROM truyen";
    }

    $ketqua = mysqli_query($conn, $sql);

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

<?php
    $sql_lietke_sp="SELECT * FROM tbl_sanpham ORDER BY id_sanpham DESC";
    $query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);
?>
<p>liệt kê danh mục sản phẩm</p>
<table Style= "width:100%" border= "1" style="border-collapse:collapse;">
<tr>
    <th>Id</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Gía sp</th>
    <th>Số lượng</th>
    <th>Mã sp</th>
    <th>Tóm tắt</th>
    <th>Trạng thái</th>
    <th>Quản lý</th>
</tr>
<?php
    $i = 0;
    while($row=mysqli_fetch_array($query_lietke_sp)){
        $i++;
?>
<tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['tensanpham'] ?></td>
    <td><img src="modules/quanlysp/uploads/<?php echo $row['hinhanh']?> " width="100px"></td>
    <td><?php echo $row['giasp']?> </td>
    <td><?php echo $row['soluong']?> </td>
    <td><?php echo $row['masp']?> </td>
    <td><?php echo $row['tomtat']?> </td>
    <td><?php if($row['tinhtrang']==1){
        echo 'kích hoạt';
    }else{
        echo 'ẨN';
    }
    ?> 
    </td>
    <td>
        <a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>" >Xóa</a> | <a href="?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a>
    </td>
</tr>
<?php
}
?>
</table>
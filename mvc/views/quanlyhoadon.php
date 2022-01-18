<?php if (isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung'])!=1 || isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung']) == null ) {
  echo '<script type="text/javascript">';
  echo ' alert("Không có quyền truy cập !")';  //not showing an alert box.
  echo '</script>';
 }else{
  ?>
    <?php include('mvc/includes/admin/hearder.php') ?>
            <div class="nd">
                <h1>Danh sách Hóa Đơn</h1>
                    <table class="table table-striped">
              <thead>
              <tr>
                <th>STT</th>
                <th>ID Hóa Đơn</td>
                <th>ID user</th>
                <th>Họ Tên</th>
                <th>Địa Chỉ</th>
                <th>Điện thoại</th>
                <th>Tổng Tiền</th>
                <th>ghi chú</th>
                <th>ngày đặt hàng</th>
                <th>Trạng Thái</td>
                <th>Thao tác</th>
              </tr>
              </thead>
              <tbody>
                <?php 
                  $i=1;
                  foreach ($ketqua as $value) {
                  ?>
                  <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $value['id_hd'];  ?></td>
                    <td><?php echo $value['id_user']; ?></td>
                    <td><?php echo $value['hoten']; ?></td> 
                    <td><?php echo $value['diachi']; ?></td>
                    <td><?php echo $value['dienthoai']; ?></td>
                    <td><?php echo number_format($value['Total']) ?>đ</td>
                    <td><?php echo $value['ghichu'] ?></td>
                    <td><?php echo $value['ngaydathang'] ?></td>
                    <td><?php switch($value['trangthai']){
                         case 0:{ echo '<span class="label-warning">Chờ duyệt</span>'; break;} 
                         case 1:{ echo '<span class="label-info">Đã duyệt</span>'; break;} 
                         case 2:{ echo '<span class="label-primary">Đang giao </span>'; break;} 
                         case 3:{ echo '<span class="label-success">Hoàn Thành</span>'; break; }
                        case 4:{ echo '<span class="label-danger">Hủy đơn</span>'; break; }
                        }
                        ?>       
                   </td>
                    <td>
                     <form class="quanly"> 
                      <li><a href="index.php?action=xemchitiethoadon&id=<?php echo $value['id_hd'];?> "><i class="glyphicon glyphicon-edit"></i></a></li>
                      
                      <li><a href="index.php?action=xoahoadon&id=<?php echo $value['id_hd'];?> " onclick="return confirm('Bạn có chắc chắn muốn xóa hóa đơn này?');"><i class="glyphicon glyphicon-trash"></i></a></li>
                      </form>
                    </td>
                  </tr> 
                
                  <?php 
                    }

                   ?>
              </tbody>    
            </table>  

            </div>
            <div class="clear">
            </div>
        
    </div>
</body>
 <?php include('mvc/includes/admin/footer.php') ?>
</html>
<?php }  ?>
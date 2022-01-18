<?php require "mvc/includes/customer/hearder.php"  ?>
 <?php
if (isset($_POST['nutdx'])) {
  session_unset();
}
?>
<div class="container-giohang">
  <div class="giohang">
  <form class="boxct" method="POST">
              <h3 style="text-align: center;">Đơn hàng</h3>
              <a style="margin-left: 10px" href="index.php"> <i class="fas fa-home"></i></a>
              <table class="table-giohang">
                <thead>
                <tr>
                  <th>STT</th>
                  <th>ID Hóa Đơn</th>
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
                  if ($hoadon1==NULL) {
                      echo "<h3>Không có đơn hàng nào !</h2>";
                      }else{?>

                    <?php 
                      $i=1;
                      foreach ($hoadon1 as $value) {
                      ?>
                      <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $value['id_hd'];  ?></td>
                        <td><?php echo $value['hoten']; ?></td> 
                        <td><?php echo $value['diachi']; ?></td>
                        <td><?php echo $value['dienthoai']; ?></td>
                        <td><?php echo number_format($value['Total']) ?>đ</td>
                        <td><?php echo $value['ghichu'] ?></td>
                        <td><?php echo $value['ngaydathang'] ?></td>
                        <td><?php switch($value['trangthai']){
                            case 0:{ echo '<span class="font-status">Chờ duyệt</span>'; break;} 
                            case 1:{ echo '<span class="font-status">Đã duyệt</span>'; break;} 
                            case 2:{ echo '<span class="font-status">Đang giao </span>'; break;} 
                            case 3:{ echo '<span class="font-status">Hoàn Thành</span>'; break; }
                            case 4:{ echo '<span class="font-status">Hủy đơn</span>'; break; }
                            }
                            ?>       
                      </td>
                        <td>
                            <a href="index.php?action=xemchitiet&id=<?php echo $value['id_hd'];?>">Xem chi tiết</a>
                        </td>
                      </tr> 
                    
                      <?php 

                        }

                      ?>
                    <?php   }?>
                </tbody>    
              </table>  
              <div class="clear"></div>
      </form>
    </div>
</div>
</section>
<?php include("mvc/includes/customer/footer.php") ?>

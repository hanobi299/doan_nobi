<?php if (isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung'])!=1 || isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung']) == null ) {
  echo '<script type="text/javascript">';
  echo ' alert("Không có quyền truy cập !")';  //not showing an alert box.
  echo '</script>';
 }else{
  ?>
    <?php include('mvc/includes/admin/hearder.php') ?>
    <?php if (isset($_SESSION['success'])) :?>
				    	<?= $myMessage= addslashes($_SESSION['success']);
                        echo "<script type='text/javascript'>alert('$myMessage');</script>"; ?>
				     <?php endif ; unset($_SESSION['success']) ?>
	
            <div class="nd">
         
                <h2 style="text-align: center;">Chi Tiết Hóa Đơn</h2>
                 <a href="index.php?action=hoadon">quay về</a>
                <h4 style="margin-left: 10px;">Trạng thái đơn hàng:</h4>
              <table class="table table-striped">
              <thead>
              <tr>
                <th>STT</th>
                <td>ID HD</td>
                <th>ID Sản Phẩm </th>
                <th>Tên Sản Phẩm</th>
                <th>Hình Ảnh</th>
                <th>Số Lượng</th>
                <th>Giá sản phẩm</th>
                <td>Phương thức thanh toán</td>
              </tr>
              </thead>
              <tbody>
                <?php 
                  $i=1;
                  foreach ( $data as $value) {
                  ?>
                  <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $value['id_hd'];  ?></td>
                    <td><?php echo $value['id_sp']; ?></td>
                    <td><?php echo $value['ten_sp']; ?></td> 
                    <td><?php echo '<img style=" width="70px" height="90px" src="uploads/'.$value['hinhanh_sp'].'">' ?></td>
                    <td><?php echo $value['soluong']; ?></td>
                    <td><?php echo number_format($value['gia_sp']) ?>đ</td>
                    <td><?php switch($value['Phuongthucthanhtoan']){

                         case 1:{ echo '<span class="label-warning">Thanh toán online</span>'; break;} 
                         case 0:{ echo '<span class="label-info">Thanh toán sau khi nhận hàng</span>'; break;} 
                        }
                        ?>       
                   </td>
                    <td> </td>
                
                  </tr> 
                
                  <?php 
                    }

                   ?>
              </tbody> 
                      <form style="width: 500px;" method="post" action="index.php?action=xemchitiethoadon&id=<?php echo $id_hoadon; ?>">
                     
                        <div style="margin-left: 10px;">
                          <input hidden=""  type="" value="<?php echo $id_hoadon; ?>" name="id"> 
                            <select name="trangthai" class="form-control" style="width:120px;">
                             <?php 
                                  $duyet = array('Chờ duyệt','Đã duyệt','Đang giao','Hoàn thành','Hủy Đơn');
                                  for ($i=0; $i < 5 ; $i++) { 
                                    if ($get_hoadon[0]['trangthai']==$i) {
                                      ?>
                                    <option value="<?php echo $i; ?>"selected><?php echo $duyet[$i]; ?></option>
                          
                                    <?php  
                                    }
                                    else {
                                      ?>
                                        <option value="<?php echo $i; ?>"><?php echo $duyet[$i]; ?></option>
                                     <?php

                                    }
                                  }
                               ?> 
                            </select>
                        </div>
                       
                        <div class="btn-them" style="float:left;">
                            <button type="submit" name="ok"  style="margin-top: 10px;margin-left: 10px;margin-bottom: 10px;" onclick="return confirm('Bạn có chắc chắn muốn cập nhật tình trạng hóa đơn này?');" class="btn-primary">Cập nhật</button>
                         
                            <a href="index.php?action=inhoadon&id_hd=<?php echo $value['id_hd'];?> ">In hóa đơn</a>
                        </div>
                        
                        <div class="clear"></div>
                    </form>

            </table>  
            </div>
            <div class="clear">
            </div>
        
    </div>
</body>
</html>
<?php }  ?>
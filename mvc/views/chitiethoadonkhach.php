<?php include('mvc/includes/customer/hearder.php') ?>

            <div class="container-giohang">
              <div class="giohang">
                <h2 style="text-align: center;">Chi Tiết Hóa Đơn</h2>
                  <a style="margin-left: 20px;font-size:24px" href="index.php?action=lichsudonhang&idnd=<?php echo($_SESSION['id']); ?>"><i class="fas fa-arrow-left"></i>
                    <a style="margin-left: 10px;font-size:24px" href="index.php"><i class="fas fa-home"></i></a>
                  </a>
              <table  class="table-giohang">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>ID HD</th>
                    <!-- <th>ID Sản Phẩm </th> -->
                    <th>Tên Sản Phẩm</th>
                    <th>Hình Ảnh</th>
                    <th>Số Lượng</th>
                    <th>Giá sản phẩm</th>
                    <th>Phương thức thanh toán</td>
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
                    <!-- <td><?php echo $value['id_sp']; ?></td> -->
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
            </table>  
            </div>
       </div>
      </section>



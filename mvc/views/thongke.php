
<?php if (isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung'])!=1 || isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung']) == null ) {
  echo '<script type="text/javascript">';
  echo ' alert("Không có quyền truy cập !")';  //not showing an alert box.
  echo '</script>';
 }else{
  ?>
    <?php include('mvc/includes/admin/hearder.php') ?>
          <div class="nd">
              <h1>Trang thống kê</h1>
            <div class="dash-broad">
              <ul>
                <li><a href="index.php?action=khachhang"><span><?php echo $sumuser[0]["count(id_user)"] ?> <br> Khách hàng </span></a></li>
                <li><a href="index.php?action=hoadon"><span><?php echo $sumhoadon[0]["count(id_hd)"] ?> <br> Hóa đơn </span></a></li>
                <li><a href="#"><span><?php echo $sumsoluong[0]["sum(soluong)"] ?> <br> Sản phẩm đã bán </span></a></li>
                <li><a href="#"><span><?php echo number_format( $sumdt[0]["sum(Total)"]) ?><sup>đ</sup> <br> Doanh thu </span></a></li>
               
                <li><a href="#"><span><?php echo number_format( $sumdonhuy[0]["count(id_hd)"]) ?><br> Đơn hủy </span></a></li>
              </ul>
            </div>
            <div class="topsp">
                <div class="product">
                        <div class="product_content">
                            <div class="product_content_title">
                                <h2>Top 5 sản phẩm bán chạy nhất</h2>
                            </div>
                            <div class="product_content_product">
                            <?php
                              foreach ($sphot as $key =>$value)
                              { 
                            ?>
                                      <?php if(($value['gia_goc'])!= 0&&($value['gia_goc'])>($value['gia_sp']))
                                     {
                                        ?>
                                          <?php 
                                                $goc =  (INT)$value['gia_goc'];
                                                $ban = (INT)$value['gia_sp'];
                                                $sale = round((($ban-$goc) / $goc) *100) ;
                                            ?>
                                        <div class="product_items">
                                                <div class="product_img">
                                                <?php echo '<img style=" width="70px" height="90px" src="uploads/'.$value['hinhanh_sp'].'">' ?>
                                                </div>
                                                <div class="product_item_text">
                                                    <li class="covid"><img src="uploads/icon1.png" alt=""><p>Trợ giá mùa dịch</p></li>
                                                    <li><h3><?php echo $value['ten_sp'];?></h3></li>
                                                    <li>Online giá rẻ</li>
                                                    <li><strong class="sale"><?php echo number_format($value['gia_goc']); ?><sup>đ</sup></strong><span> -<?php echo $sale ?>%</span> </li>
                                                    <li> <strong><?php echo number_format($value['gia_sp']); ?><sup>đ</sup></strong> </li>
                                                    <li> <?php echo $value['SL'] ?></li>
                                                    <li>Quà 400.000 <sup>đ</sup></li>
                                                </div>
                                            
                                        </div>
                                  <?php  }else{ ?>
                                        <div class="product_items">
                                            
                                            <div class="product_img">
                                            <?php echo '<img style=" width="70px" height="90px" src="uploads/'.$value['hinhanh_sp'].'">' ?>
                                                </div>
                                                <div class="product_item_text">
                                                    
                                                    <li class="name_product"><h3><?php echo $value['ten_sp'];?></h3></li>
                                                    <li> <strong><?php echo number_format($value['gia_sp']); ?><sup>đ</sup></strong> </li>
                                                    <li> <Strong> Đã bán <?php echo $value['SL'] ?> sản phẩm</Strong></li>
                                                </div>
                                           
                                        </div>
                                        <?php
                                        }
                                         ?>
                                  <?php
                                  }
                                  ?>
                            </div>
                        </div>
                    
            </div>
              

              </div>
            <div class="product_content">
                  <div class="customer_content_title">
                       <h2>Top 5 Khách Hàng Thân thiết</h2>
                  </div>
              <table class="table table-striped">
              <thead>
              <tr>
                <th>ID User</th>
                <th>Họ Tên</th>
                <th>ngày sinh</th>
                <th>giới tính</th>
                <th>email</th>
                <th>Điện thoại</th>
                <th>Địa chỉ</th>
                <th>Số đơn</th>
                <th>Tổng tiền<th>
              </tr>
              </thead>
              
              <tbody>
                <?php 
                  $i=1;
                  foreach ($khachtt as $value) {
                  ?>
                  <tr>
                    <td><?php echo $value['id_user'];  ?></td>
                    <td><?php echo $value['Hoten'];   ?></td>
                    <td><?php echo $value['ngaysinh']; ?></td>
                    <td><?php echo $value['gioitinh']; ?></td>
                    <td><?php echo $value['email']; ?></td>
                    <td><?php echo $value['dienthoai']; ?></td>
                    <td><?php echo $value['diachi']; ?></td>
                    <td><?php echo $value['Don']; ?></td>
                    <td><?php echo number_format($value['Total']) ; ?></td>
                  </tr> 
                
                  <?php 
                    }

                   ?>
              </tbody>    
            </table>  
                          </div>
        </div>
          <?php include('mvc/includes/admin/footer.php') ?>
          <?php 
        }     
 ?>
        
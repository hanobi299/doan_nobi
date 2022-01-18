<?php
if (isset($_POST['nutdx'])) {
    session_unset();

}
?>
	<?php 
        if(isset($_GET['message']) && $_GET['message'] == 'binhluan' )
        {
            echo '<script type="text/javascript">';
  echo ' alert("Cảm ơn bạn đã bình luận! Chờ admin duyệt nha.")';  //not showing an alert box.
  echo '</script>';;
        }
    ?>
<?php include('mvc/includes/customer/hearder.php') ?>
     <div class="container_chitiet"> 
     <?php if (isset($_SESSION['success'])) :?>
				    	<?= $myMessage= addslashes($_SESSION["success"]);
                        echo "<script type='text/javascript'>alert('$myMessage');</script>"; ?>
				     <?php endif ; unset($_SESSION['success']) ?>
        <div class="card"> 
          
            <div class="container-fliud"> 
              <a  href="index.php"><img src="uploads/back.png"></a>
                <?php
                    foreach ($data_id as $value) {   
                  ?>
                <div class="wrapper row"> 
  
                    <div class="preview col-md-6"> 
                      <div class="preview-pic tab-content"> 
                        <div class="tab-pane active" id="pic-1">
                            <?php
                                echo '<img src="uploads/'.$value['hinhanh_sp'].'">'
                            ?>
                        </div> 
                       </div>
                    </div> 
                        <div class="details col-md-6"> 
                         <h1 style="font-size:32px;line-height:1.333" class="product-title"><?php echo $value['ten_sp'];?></h1> 
                         <p>Mã sản phẩm: <?php echo $value['id_sp'];?></p>
                         <div class="rating"> 
                          <div class="stars">
                           <span class="fa fa-star checked"></span> 
                                <span class="fa fa-star checked"></span> 
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span> 
                          </div> 
                            <span class="review-no">99 đánh giá</span> 
                        </div> 
                        <?php if(($value['gia_goc'])!= 0&&($value['gia_goc'])>($value['gia_sp']))
                                     {
                                        ?>
                                          <?php 
                                                $goc =  (INT)$value['gia_goc'];
                                                $ban = (INT)$value['gia_sp'];
                                                $sale = round((($ban-$goc) / $goc) *100) ;
                                            ?>
                            <strong class="sale">Giá gốc: <del><?php echo number_format($value['gia_goc']); ?></del><sup>đ</sup></strong><span><?php echo$sale?>%</span><br>
                            <strong class="price">Giá bán: <?php echo number_format($value['gia_sp']);?>đ</strong> 
                            <?php }else{ ?>
                              <strong class="price">Giá bán: <?php echo number_format($value['gia_sp']);?>đ</strong> 

                              <?php } ?>


                             <p class="vote">(87 bình chọn)</p>
                             <h3 class="soluong">Số lượng sản phẩm: <?php if ($value['soluong']==0) {echo "hết";
                             }else{ echo $value['soluong']; }?> sản phẩm</h3>
                              <span class="mota">Mô tả:</h3><p> <?php echo $value['mota_sp']; ?> </p>
                                  <span class="thongso">Thông số:</h3><p><?php echo $value['thongso']; ?></p>
                                  <?php if ($value['soluong']==0) {
                                    echo "<h3> Sản phẩm này  hiện đang hết mời quý khách tham khảo các sản phẩm khác !! </h3>";
                                    echo '<script type="text/javascript">';
                                    echo ' alert("Sản phẩm này hiện đang hết mời quý khách tham khảo các sản phẩm khác!")';  
                                    echo '</script>';
                                  }else{ ?>
                              <form method="POST"> 
                               <div class="mua"> <a href="index.php?action=add&id=<?php echo $value['id_sp'] ?>">      
                                     <form ><button class="add-to-cart btn btn-default" type="button" >Thêm vào giỏ</button></form></a> 
                                     <a href="#">      
                                           <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button> </a> 
                               </div> 
                             </form>
                           <?php } ?>
                       </div> 
                    </div>   
                </div>
                <?php 
                     } 
                ?>
            </div>
          <?php if (isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung'])) {?>
            <div class="chitiet-binhluan">
            <div class="binhluan-tieude">Bình luận</div>
            <div class="binhluan-nd">
                <form action="index.php?action=chitiet&id=<?php echo $value["id_sp"]; ?>" method="POST">
                    <input hidden="" type="text" name="id_user" value="<?php echo $_SESSION['id'] ?>"  >
                    <input type="text" name="hoten" value="<?php echo $_SESSION['hoten'] ?>" required >
                    <textarea name="noidung" rows="3" required placeholder="Nội dung"required></textarea>
                    <div><button type="submit" name="submit">Gửi bình luận</button></div>
                </form>
                  <?php } ?>
                <div class="binhluan-danhsach">
                  <?php if ($databl !=NULL) {?>
                    <h2 style="margin-bottom: 20px;font-size: 24px;"><?php echo count($databl); ?> bình luận</h2>
                 <?php }  ?>
                  <?php
                        if($data_bl!="") {
                          foreach ($data_bl as $value) { ?>
                             <div class="binhluan-item">
                              <?php if ($value['trangthai']==1) {?>
                                 <div class="binhluan-content">
                                    <p class="bl-ten"><b><?php echo $value['hoten']; ?></b><span class="bl-ngay"><?php echo $value['ngaybl']; ?></span></p>
                                    <p class="bl-content"><?php echo $value['noidung']; ?></p>
                                </div>
                             <?php  } ?>
                               
                            </div>
                    <?php }
                  } ?>
                </div>
                <?php
                  if($data_bl != NULL)
                  {
                    ?>
                <div class="container1">
                  <div class="pagination" id="comment">
                    <?php 
                      if ($sotrang!=0){
                        for ($i=1; $i <=$sotrang ; $i++) { 
                          echo '<a href="./index.php?action=chitiet&id='.$value["id_sp"].'&page='.$i.'#comment">'.$i.'</a>';
                        }
                      }
                   
                     ?>
                </div>
              </div>

                    <?php
                  }
                 ?>
                    <div class="product">
                    <div class="container">
                        <div style="padding: 30px" class="product_content">
                                <h2 style="text-align:center;padding:10px;font-size:24px">Có thể bạn thích</h2>
                            <div class="product_content_product chitiet">
								<?php
									foreach ($dienthoai2 as $value)
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
                                        <div style="height:400px" class="product_items">
                                            <a href="index.php?action=chitiet&id=<?php echo $value['id_sp'] ?>">
                                                <div class="product_img">
                                                    <?php echo '<img src="uploads/'.$value['hinhanh_sp'].'">'?>
                                                </div>
                                                <div class="product_item_text">
                                                    <li class="covid"><img src="uploads/icon1.png" alt=""><p>Trợ giá mùa dịch</p></li>
                                                    <li><h3><?php echo $value['ten_sp'];?></h3></li>
                                                    <li><strong class="sale"><?php echo number_format($value['gia_goc']); ?><sup>đ</sup></strong><span> -<?php echo $sale ?>%</span> </li>
                                                    <li> <strong><?php echo number_format($value['gia_sp']); ?><sup>đ</sup></strong> </li>
                               
                                                </div>
                                            </a>
                                        </div>
                                  <?php  }else{ ?>
                                        <div style="height:400px" class="product_items">
                                            <a href="index.php?action=chitiet&id=<?php echo $value['id_sp'] ?>">
                                            <div class="product_img">
                                                    <?php echo '<img src="uploads/'.$value['hinhanh_sp'].'">'?>
                                                </div>
                                                <div class="product_item_text">
                                                    
                                                    <li class="name_product"><h3><?php echo $value['ten_sp'];?></h3></li>

                                                    <li> <strong><?php echo number_format($value['gia_sp']); ?><sup>đ</sup></strong> </li>
                                                </div>
                                            </a>
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
            </div>
        </div>
   </div>
          </section>
<?php include_once('mvc/includes/customer/footer.php') ?>
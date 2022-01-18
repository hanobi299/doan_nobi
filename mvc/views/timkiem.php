<?php
if (isset($_POST['nutdx'])) {
	session_unset();

}
?>
<?php include('mvc/includes/customer/hearder.php') ?>
<div class="content">
            <div class="slider">
                <div class="container">
                    <div class="slider_content">
                        <div class="slider_content_left">
                            <div class="slider_content_left_top_container">
                                <div class="slider_content_left_top">
                                    <a href=""><img src="uploads/s1.png" alt=""></a>
                                    <a href=""> <img src="uploads/s2.png" alt=""></a>
                                    <a href=""> <img src="uploads/s3.png" alt=""></a>
                                    <a href=""> <img src="uploads/s4.png" alt=""></a>
                                    <a href=""> <img src="uploads/S21-830-300-830x300.png" alt=""> </a>
                                </div>
                                    <div class="slider_content_left_top_btn">
                                        <i class="fa fa-caret-left" ></i>
                                        <i class="fas fa-caret-right"></i> 
                                    </div>
                                </div>
                                <div class="slider_content_left_bottom">
                                    <li class="active">tiêu đề 1</li>
                                    <li class="">tiêu đề 2</li>
                                    <li class="">tiêu đề 3</li>
                                    <li class="">tiêu đề 4</li>
                                    <li class="">tiêu đề 5</li>
                                </div>
                            </div>
                            <div class="slider_content_right">
                                <li> <a href=""><img src="uploads/1.jpg" alt=""></a> </li>
                                <li> <a href=""><img src="uploads/2.jpg" alt=""></a> </li>
                                <li> <a href=""><img src="uploads/3.jpg" alt=""></a> </li>
                                <li> <a href=""><img src="uploads/4.jpg" alt=""></a> </li>

                            </div>
                    </div>

                </div>   
            </div>
            <div class="banner_one"><img src="uploads/1200-60-1200x60.png" alt=""></div>
			<div class="product">
                    <div class="container">
                        <div class="product_content">
						<div class="product_content_title">
							<?php 
								if ($data_tk==0) {
									?>
									<h2 class="panel-title" style="text-align: center; align-content:center"><?php echo "Không tìm thấy kết quả với ".$key; ?></h1>
									<?php
								}
								else{
									?>
										<h2 style="text-align: center; font-size: 20px; align-content:center"><?php echo "Kết quả với từ ".$key; ?> ( <?php echo count($data_tk) ?> sản phẩm ) </h2>
							</div>
                            <div class="product_content_product">
								<?php
									foreach ($data_tk as $value)
									{ 
								 ?>
                        <?php if(($value['gia_goc'])!= 0||($value['gia_goc'])>($value['gia_sp']))
                                     {
                                        ?>
                                          <?php 
                                                $goc =  (INT)$value['gia_goc'];
                                                $ban = (INT)$value['gia_sp'];
                                                $sale = round((($ban-$goc) / $goc) *100) ;
                                         
                                            ?>
                                        <div class="product_items">
                                            <a href="index.php?action=chitiet&id=<?php echo $value['id_sp'] ?>">
                                                <div class="product_img">
                                                    <?php echo '<img src="uploads/'.$value['hinhanh_sp'].'">'?>
                                                </div>
                                                <div class="product_item_text">
                                                    <li class="covid"><img src="uploads/icon1.png" alt=""><p>Trợ giá mùa dịch</p></li>
                                                    <li class="name_product"><h3><?php echo $value['ten_sp'];?></h3></li>
                                                    <li>Online giá rẻ</li>
                                                    <li><strong class="sale"><?php echo number_format($value['gia_goc']); ?><sup>đ</sup></strong><span> -<?php echo $sale ?>%</span> </li>
                                                    <li> <strong><?php echo number_format($value['gia_sp']); ?><sup>đ</sup></strong> </li>
                                                    <li>Quà 400.000 <sup>đ</sup></li>
                                                    <li>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                </div>
                                            </a>
                                        </div>
                                  <?php  }else{ ?>
                                        <div class="product_items">
                                            <a href="index.php?action=chitiet&id=<?php echo $value['id_sp'] ?>">
                                            <div class="product_img">
                                                    <?php echo '<img src="uploads/'.$value['hinhanh_sp'].'">'?>
                                                </div>
                                                <div class="product_item_text">
                                                    
                                                    <li class="name_product"><h3><?php echo $value['ten_sp'];?></h3></li>
                                                    <li>Online giá rẻ</li>
                                                    <li> <strong><?php echo number_format($value['gia_sp']); ?><sup>đ</sup></strong> </li>
                                                    <li>Quà 400.000 <sup>đ</sup></li>
                                                    <li>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                </div>
                                            </a>
                                        </div>
                                        <?php
                                        }
                                        ?>
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

</section>
    <?php include('mvc/includes/customer/footer.php') ?>

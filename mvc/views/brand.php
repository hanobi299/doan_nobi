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

			<div class="product">
                    <div class="container">
                        <div class="product_content">
                            <div class="product_content_title">
                                <h2><?php echo $get_name[0]['name_brand'] ?></h2>
                                <ul>
                                <?php foreach ($nhanhieu as $value) { ?>
                                    <li><a href="index.php?action=brand&idnh=<?php echo $value['id_brand'] ?>"><?php echo $value['name_brand'] ?></a></li>
                                    <?php } ?>  
                                </ul>   
                            </div>
                            <div class="from-fill">
                                <form class="" action="index.php" method="GET">
                                    <div class="boxtk">
                                        <span style="margin-left: 5px;">Lọc giá theo nhãn hiệu:</span>
                                        <?php
                                            $pricefrom = isset($_GET['pricefrom']) ? $_GET['pricefrom'] : 0;
                                            $priceto = isset($_GET['priceto']) ? $_GET['priceto'] : 1000000;
                                        ?>
                                        <input id="tk" type="hidden" name="action" value="brand"/>
                                        <input id="tk" type="hidden" name="idnh" value="<?= $_GET['idnh'] ?>"/>
                                        <input id="tk" type="number" min= "0đ" max="1000000000đ" name="pricefrom" value="<?= $pricefrom; ?>"/>
                                        <input id="tk" type="number" min= "0đ" max="1000000000đ" name="priceto" value="<?= $priceto; ?>" />
                                        <button type="submit" name="filld" class="btn-primary">Tìm kiếm</button>
                                    </div>
                                </form> 
                            </div> 
                            <div class="product_content_product">

                            <?php if($brand==0){ 
                                     
                                     
                                     ?>
                                                <h3 class="Mess_warning">Không có sản phẩm thảo mãn yêu cầu của bạn. Hãy tham khảo các sản phẩm khác nhé!</h3>
                                                    <img class="image_warning" src="uploads/no-product.png" alt="">
                                   
                                    <?php
                                    }else{
                                            
                                    ?>
								<?php
									foreach ($brand as $value)
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
                                            <a href="index.php?action=chitiet&id=<?php echo $value['id_sp'] ?>">
                                                <div class="product_img">
                                                    <?php echo '<img src="uploads/'.$value['hinhanh_sp'].'">'?>
                                                </div>
                                                <div class="product_item_text">
                                                    <li class="covid"><img src="uploads/icon/icon1.png" alt=""><p>Trợ giá mùa dịch</p></li>
                                                    <li class="name_product"><h3><?php echo $value['ten_sp'];?></h3></li>
                                                    <li>Online giá rẻ</li>
                                                    <li><strong class="sale"><?php echo number_format($value['gia_goc']); ?><sup>đ</sup></strong>-<span><?php echo -$sale ?>%</span> </li>
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
</div>
<div class="banner_one"><img src="uploads/banner/banner-qc-1.jpg" alt=""></div>	
							
     </section>
<?php include('mvc/includes/customer/footer.php') ?>
	
	

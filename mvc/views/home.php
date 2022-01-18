<?php
if (isset($_POST['nutdx'])) {
	session_unset();
}
?>
<?php include('mvc/includes/customer/hearder.php') ?>
<div class="content">

        <?php include('mvc/includes/customer/slide-home.php') ?>
			  <div class="container">
				</div>
				    <?php if (isset($_SESSION['success'])) :?>
				    	<?= $myMessage= addslashes($_SESSION["success"]);
                        echo "<script type='text/javascript'>alert('$myMessage');</script>"; ?>
				     <?php endif ; unset($_SESSION['success']) ?>
					<div class="sp">
							<!---Mới nhất--->
			<div class="slider_product">
                <div class="slider_product_content">
                    <div class="slider_product_content_title">
                    <img src="uploads/desk-bannertc-1200x90.png" alt="">
                            <!-- <h2>Sản phẩm mới mỗi ngày</h2>     -->   
                    </div>
                        <div class="slider_product_container">
                            <div class="slider_product_content_items">
                                <div class="slider_product_items">
                                    <?php
                                        foreach ($sanphammoi as $value)
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
                                        <div class="slider_product_content_item">
                                            <a href="index.php?action=chitiet&id=<?php echo $value['id_sp'] ?>">

                                            <div class="slider-img">
                                                        <?php echo '<img src="uploads/'.$value['hinhanh_sp'].'">'?>
                                                    </div>
                                                    <div class="slider_product_item_text">
                                                        <li class="sale1"><img src="uploads/icon1.png" alt=""><p>Trợ giá mùa dịch</p></li>
                                                        <li><h3 class="name-product"><?php echo $value['ten_sp'];?></h3></li>
                                                        <li>Online giá rẻ</li>
                                                        <li><strong class="sale"><?php echo number_format($value['gia_goc']); ?><sup>đ</sup></strong><span><?php echo $sale ?>%</span> </li>
                                                        <li> <strong><?php echo number_format($value['gia_sp']); ?><sup>đ</sup></strong></li>
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
                                        }else{ 
                                        ?>
                                        <div class="slider_product_content_item">
                                            <a href="index.php?action=chitiet&id=<?php echo $value['id_sp'] ?>">
                                            <div class="slider-img">
                                                        <?php echo '<img src="uploads/'.$value['hinhanh_sp'].'">'?>
                                                    </div>
                                                    <div class="slider_product_item_text">
                                                        <li><h3 class="name-product"><?php echo $value['ten_sp'];?></h3></li>
                                                        <li>Online giá rẻ</li> 
                                                        <li> <strong><?php echo number_format($value['gia_sp']); ?><sup>đ</sup></strong></li>
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
                                </div>
                            </div>
                         </div>
                
                </div>
                <div class="product">
                    <div class="container">
                        <div class="product_content">
                            <div class="product_content_title">
                                <h2>TOP 5 SẢN PHẨM BÁN CHẠY</h2>
                            </div>
                            <div class="product_content_product">
								<?php
									foreach ($sphot1 as $value)
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
                                                    <li><h3><?php echo $value['ten_sp'];?></h3></li>
                                                    <li>Online giá rẻ</li>
                                                    <li><strong class="sale"><?php echo number_format($value['gia_goc']); ?><sup>đ</sup></strong><span> <?php echo $sale ?>%</span> </li>
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
                            </div>
                        </div>
                    </div>
            </div>
					<!---Điện thoại--->
				<div class="product">
                    <div class="container">
                        <div class="product_content">
                            <div class="product_content_title">
                                <h2>ĐIỆN THOẠI NỔI BẬT NHẤT</h2>
                                <ul>
                                    <li><a href="#">Samsung Galaxy A72</a></li>
                                    <li><a href="#">Samsung Galaxy A92</a></li>
                                    <li><a href="index.php?action=chitiet&id=47">iphone 11</a></li>
                                    <li><a href="index.php?action=Category&id_dm=1">Xem tất cả (<?php echo count($dienthoai)?>) </a></li>
                                </ul>
                            </div>
                            <div class="product_content_product">
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
                                        <div class="product_items">
                                            <a href="index.php?action=chitiet&id=<?php echo $value['id_sp'] ?>">
                                            
                                                <div class="product_img">
                                                    <?php echo '<img src="uploads/'.$value['hinhanh_sp'].'">'?>
                                                </div>
                                                <div class="product_item_text">
                                                    <li class="covid"><img src="uploads/icon1.png" alt=""><p>Trợ giá mùa dịch</p></li>
                                                    <li><h3><?php echo $value['ten_sp'];?></h3></li>
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
                            </div>
                        </div>
                    </div>
            </div>
					<!--Tablet-->
				<div class="product">
                    <div class="container">
                        <div class="product_content">
                            <div class="product_content_title ">
                                <h2>TABLET NỔI BẬT NHẤT</h2>
                                <ul>
                                    <li><a href="index.php?action=chitiet&id=60">Samsung Galaxy Tab S6</a></li>
                                    <li><a href="index.php?action=chitiet&id=58"> iPad 10.2 inch Wifi 32GB</a></li>
                                    <li><a href="index.php?action=chitiet&id=79">Samsung Galaxy Tab with S Pen</a></li>
                                    <li><a href="index.php?action=Category&id_dm=2">Xem tất cả (<?php echo count($tablet)?>) </a></li>
                                </ul>
                            </div>
                            <div class="product_content_product tablet">
								<?php
									foreach ($tablet2 as $value)
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
                                                    <li class="covid"><img src="uploads/icon1.png" alt=""><p>Trợ giá mùa dịch</p></li>
                                                    <li><h3><?php echo $value['ten_sp'];?></h3></li>
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
                            </div>
                        </div>
                    </div>
            </div>
					<!-- laptop -->

		<div class="product">
                    <div class="container">
                        <div class="product_content">
                            <div class="product_content_title ">
                                <h2>PHỤ KIỆN NỔI BẬT NHẤT</h2>
                                <ul>
                                    <li><a href="index.php?action=chitiet&id=69">Loa Bluetooth Fenda W8</a></li>
                                    <li><a href="index.php?action=chitiet&id=68">AVA LJ JP195</a></li>
                                    <li><a href="index.php?action=chitiet&id=70">Loa Bluetooth Fenda W7</a></li>
                                    <li><a href="index.php?action=Category&id_dm=4">Xem tất cả (<?php echo count($phukien)?>) </a></li>
                                </ul>
                            </div>
                            <div class="product_content_product pk">
								<?php
									foreach ($phukien2 as $value)
									{ 
								 ?>
                                   <?php if(($value['gia_goc'])!= 0&&($value['gia_goc'])>($value['gia_sp']))
                                     {
                                        ?>
                                          <?php 
                                                $goc =  (INT)$value['gia_goc'];
                                                $ban = (INT)$value['gia_sp'];
                                                $sale = round( (($ban-$goc) / $goc) *100) ;
                                         
                                            ?>
                                        <div class="product_items">
                                            <a href="index.php?action=chitiet&id=<?php echo $value['id_sp'] ?>">
                                                <div class="product_img">
                                                    <?php echo '<img src="uploads/'.$value['hinhanh_sp'].'">'?>
                                                </div>
                                                <div class="product_item_text">
                                                    <li class="covid"><img src="uploads/icon/icon1.png" alt=""><p>Trợ giá mùa dịch</p></li>
                                                    <li><h3><?php echo $value['ten_sp'];?></h3></li>
                                                    <li>Online giá rẻ</li>
                                                    <li><strong class="sale"><?php echo number_format($value['gia_goc']); ?><sup>đ</sup></strong>-<span> <?php echo $sale ?>%</span> </li>
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
                            </div>
                        </div>
                    </div>
            </div>
					<!--Phụ kiện-->
				<div class="product">
                    <div class="container">
                        <div class="product_content">
                            <div class="product_content_title ">
                                <h2>LAPTOP NỔI BẬT NHẤT</h2>
                                <ul>
                                    <li><a href="index.php?action=chitiet&id=81"> Apple MacBook Air 2020</a></li>
                                    <li><a href="index.php?action=chitiet&id=61"> Asus VivoBook X409FA</a></li>
                                    <li><a href="index.php?action=chitiet&id=54">Dell G3 3579</a></li>
                                    <li><a href="index.php?action=Category&id_dm=3">Xem tất cả (<?php echo count($laptop)?>) </a></li>
                                </ul>
                            </div>
                            <div class="product_content_product laptop">
								<?php
									foreach ($laptop2 as $value)
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
                                                    <li><h3><?php echo $value['ten_sp'];?></h3></li>
                                                    <li>Online giá rẻ</li>
                                                    <li><strong class="sale"><?php echo number_format($value['gia_goc']); ?><sup>đ</sup></strong>-<span> <?php echo $sale ?>%</span> </li>
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
                            </div>
                        </div>
                    </div>
            </div>
					<!--Tablet-->
					<div class="product">
                    <div class="container">
                        <div class="product_content">
                            <div class="product_content_title">
                                <h2>ĐỒNG HỒ NỔI BẬT</h2>
                                <ul>
                                    <li><a href="index.php?action=chitiet&id=75">Samsung Galaxy Watch Active 2</a></li>
                                    <li><a href="index.php?action=chitiet&id=73">Apple Watch S5</a></li>
                                    <li><a href="index.php?action=chitiet&id=77">Miband 4</a></li>
                                    <li><a href="index.php?action=Category&id_dm=5">Xem tất cả (<?php echo count($dongho)?>) </a></li>
                                </ul>
                            </div>
                            <div class="product_content_product watch">
								<?php
									foreach ($dongho2 as $value)
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
                                                    <li class="covid"><img src="uploads/icon1.png" alt=""><p>Trợ giá mùa dịch</p></li>
                                                    <li class="name_product"><h3><?php echo $value['ten_sp'];?></h3></li>
                                                    <li>Online giá rẻ</li>
                                                    <li><strong class="sale"><?php echo number_format($value['gia_goc']); ?><sup>đ</sup></strong><span><?php echo $sale ?>%</span> </li>
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
                            </div>
                        </div>
                    </div>
            </div>
            <div class="banner_one"><img src="uploads/banner-qc-1.jpg" alt=""></div>
	</section>

<?php include('mvc/includes/customer/footer.php') ?>

<?php
if (isset($_POST['nutdx'])) {
	session_unset();
}
?>
<?php include('mvc/includes/customer/hearder.php') ?>

<div class="content">
    <?php include('mvc/includes/customer/slide-home.php') ?>
			<div class="product">
                    <div class="container">
                        <div class="product_content">
                            <div class="product_content_title">
                                <?php
                                if($danhmuc){
                                    foreach ($danhmuc as $value){
                                        ?>
                                        <h2><?php if($kq){ echo count($kq); }else { echo '0'; } ?> Sản Phẩm <?php echo $value['ten_dm']?> </h2> 
                                    <?php }
                                } ?>                      
                                <ul>
                                <?php foreach ($nhanhieu as $value) { ?>
                                    <li><a href="index.php?action=brand&idnh=<?php echo $value['id_brand'] ?>"><?php echo $value['name_brand'] ?></a></li>
                                    <?php } ?>  
                                </ul>        
                            </div>
                            <div class="from-fill">
                                <form class="" action="index.php" method="GET">
                                    <div class="boxtk">
                                        <span style="margin-left: 5px;">Lọc giá theo danh mục:</span>
                                        <?php
                                            $pricefrom = isset($_GET['pricefrom']) ? $_GET['pricefrom'] : 0;
                                            $priceto = isset($_GET['priceto']) ? $_GET['priceto'] : 1000000;
                                        ?>
                                        <input id="tk" type="hidden" name="action" value="Category"/>
                                        <input id="tk" type="hidden" name="id_dm" value="<?= $_GET['id_dm'] ?>"/>
                                        <input id="tk" type="number" min= "0" max="1000000000" name="pricefrom" placeholder="0đ" value="<?= $pricefrom;?>"/>
                                        <input id="tk" type="number" min= "0" max="1000000000" name="priceto" placeholder="100.000.000đ" value="<?= $priceto; ?>" />
                                        <button type="submit" name="filld" class="btn-primary">Tìm kiếm</button>
                                    </div>
                                </form> 
                            </div> 
                            <div class="product_content_product">
								<?php
									if($kq==0){
                                        ?>
                                        <h3 class="Mess_warning">Không có sản phẩm thảo mãn yêu cầu của bạn. Hãy tham khảo các sản phẩm khác nhé!</h3>
                                            <img class="image_warning" src="uploads/no-product.png" alt="">
                           
                                        <?php
                                        }else{
                                                
                                        ?>
                                    <?php
                                        foreach ($kq as $value) { 
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
                                                               <li><strong class="sale"><?php echo number_format($value['gia_goc']); ?><sup>đ</sup></strong><span><?php echo $sale ?>%</span></li>
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
                                    }
								?>
                            </div>
                        </div>
                    </div>
            </div>
</div>
<div class="banner_one"><img src="uploads/banner-qc-1.jpg" alt=""></div>									
     </section>
<?php include('mvc/includes/customer/footer.php') ?>
	
	

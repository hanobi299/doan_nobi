<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thegioididong.com - Điện thoại, Laptop, Phụ kiện, Đồng hồ chính hãng</title>
    <link rel="stylesheet" href="public/css/fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.css">
    <link rel="shortcut icon" href="uploads//Thegioididong.png">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/js/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="public/js/slick/slick-theme.css">
    <link rel="stylesheet" href="public/css/chitiet.css">
    <link rel="stylesheet" href="public/css/thongtincanhan.css">
    
   

</head>

<body class ="theme-lunar-new-year">
    <div class="banner_media"><img src="uploads/1200x44-1200x44.gif" alt=""> </div>
    <header >
        <nav >
            <div class="header_top">
                <ul>
                    <li><a href="index.php"><img style="width: 150px;" src="uploads/logo01.png" alt=""></a></li>
                    <li id="adress_form"><a href="#">Thái Nguyên<i class="fas fa-sort-down"></i></a></li>
                    <li>
                        <form action="?tukhoa=<?php echo($key); ?>" method="GET">
                              <input type="text"placeholder="Bạn tìm gì..."autocomplete="on" maxlength="100" name="tukhoa"><i class="fas fa-search"></i>
                         </form>
                    </li>
                    <li><a href="index.php?action=listcart"><button><i class="fas fa-shopping-cart"></i><span>Giỏ hàng</span></button></a></li>
                    <li><a href=""><span class="btn_content"><span class="btn_top"></span></span><span>Mua thẻ nạp ngay!</span></a></li>
                    <li><a href=""><span> 24h <br> công nghệ</span></a></li>
                    <li><a href=""><span> Hỏi Đáp</span></a></li>
                    <li><a href=""><span> Game app</span></a></li>
                    <?php 
                        if (isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung'])!=0) {
                            ?>
                       <li><a href="index.php?action=lichsudonhang&idnd=<?php echo($_SESSION['id']); ?>"><span> Lịch sử <br> đơn hàng</span></a></li>
                        <li><a href="index.php?action=Thongtincanhan&idnd=<?php echo($_SESSION['id']); ?>"><div><span>Chào </span><?php echo $_SESSION['hoten']; ?></div>Thông tin tài khoản</a>
                        </li>
                        <form method="POST"><button class="bn_dangxuat" type="submit" name="nutdx"><span>Đăng xuất</span></button></form>
                        <?php
                        }else{
                        ?>
                        <li><a href="index.php?action=dangnhap"><span>Đăng Nhập</span></a>
                        </li>
                        <?php
                        }
                        ?>
                    <div class="adress_form"> 
                        <div class="adress_form_content">
                            <h2>Chọn địa chỉ giao hàng <span id="address_close">X Đóng</span> </h2>
                                <form action="">
                                    <p>Chọn đầy đủ địa chỉ nhận hàng để biết chính xác thời gian giao</p>
                                    <select name="" id="">
                                        <option value="">--Chọn địa chỉ--</option>
                                        <option value="">Thái Nguyên</option>
                                    </select>
                                    <select name="" id="">
                                        <option value="">--Chọn quận/huyện--</option>
                                        <option value="">Thái Nguyên</option>
                                    </select>
                                    <select name="" id="">
                                        <option value="">--Chọn phường/xã--</option>
                                        <option value="">Thái Nguyên</option>
                                    </select>
                                    <input type="text" placeholder="Số nhà, tên đường" name="" id="">
                                    <button>Xác nhận</button>
                                </form>
                        </div>
                    </div>
                </ul>
            </div>
        </nav>
    </header>
    <div class="header_main">
        <div class="container-top">
            <div class="menu_bar">
                <ul class="main_menu">
                    <li><a href="index.php?action=Category&id_dm=1"><i class="fas fa-mobile-alt"></i><span>Điện thoại</span></a></li>
                    <li><a href="index.php?action=Category&id_dm=3"><i class="fas fa-laptop"></i> <span>Laptop</span></a></li>
                    <li><a href="index.php?action=Category&id_dm=2"><i class="fa fa-tablet-alt" aria-hidden="true"></i><span>Tablet</span></a></li>
                    <li><a href="index.php?action=Category&id_dm=4"><i class="fas fa-headphones-alt"></i><span> Phụ kiện </span> </a>
                    </li>
                    <li><a href="index.php?action=Category&id_dm=5"><img src="https://img.icons8.com/fluency-systems-regular/24/000000/apple-watch-apps.png"/><span>Đồng hồ thông minh</span></a></li>
                    <li><a href="index.php?action=Category&id_dm=6"><img src="https://img.icons8.com/material-outlined/24/000000/watches-front-view--v1.png"/> <span>Đồng hồ thời trang</span></a></li>
                    <li><a href=""><img src="https://img.icons8.com/glyph-neue/24/000000/workstation.png"/><span> PC, Máy in</span></a>
                        <!-- <div class="submenu">
                            <ul class="mayin">
                                <li> <a href="">Máy in </a></li>
                                <li> <a href="">Mực in</a></li>
                                <li> <a href="">màn hình máy tính</a></li>
                                <li> <a href="">máy tính để bàn</a></li>
                            </ul>
                        </div> -->
                    </li>
                    <li><a href=""><span>Máy cũ giá rẻ</span></a></li>
                    <li><a href=""><span>Sim, Thẻ cào</span></a></li>
                    <li><a href=""><span>Trả góp, điện nước</span></a></li>
                </ul>
            </div>
        </div>
     </div>
	<section>	
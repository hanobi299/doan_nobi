
<?php
if (isset($_POST['nutdx'])) {
	session_unset();
	header("location:index.php?action=dangnhap");
}
?>
<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Quản lý</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="public/css/quanly.css">

</head>
<body>
    <div class="container_12">
        <div class="khung">   
          <div class="khung1">
            <a href="index.php?action=home-admin" ><img id="logotrai" src="uploads/12.png" alt="Logo"></a>
            
          <div class="phai">
                <div class="usertrai">
                    <img src="uploads/icon.png" alt="Profile Pic" />
                </div>
                <div class="userphai">
                    <ul>
                        <li><?php echo $_SESSION['hoten'];?></li>
                    <li><form class="dangxuat" method="POST"><button name="nutdx" type="submit" class="btn btn-warning">Logout</button></form></li>
                    </ul>
                </div>
            </div>
      
        </div>
        <div class="clear">
        </div>
       <div class="khung2">
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="#">Thegioididong.com</a>
              </div>
              <ul class="nav navbar-nav">
                <li><a href="index.php?action=quanly">Sản Phẩm</a></li>
                  <li><a href="index.php?action=khachhang">Người Dùng</a>
                <li><a href="#">Inbox</a></li>
                <li><a href="index.php"target="_blank"> Visit Website</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
          <div class="menutrai">
             <ul>
             <li><a href="index.php?action=admin_dashboard">Thống Kê</a></li>
             <li><a href="index.php?action=hoadon">Hóa Đơn</a></li>
             <li><a href="index.php?action=danhmuc">Danh Mục</a></li>
              <li><a href="index.php?action=nhanhieu">Nhãn hiệu</a></li>
             <li><a href="index.php?action=quanlybinhluan">Quản lý bình luận</a></li>
             <li><a href="index.php?action=slide">Quản lý slide</a></li>
           </ul>
        </div>
  



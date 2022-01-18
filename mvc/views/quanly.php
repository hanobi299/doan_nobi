
<?php if (isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung'])!=1 || isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung']) == null ) {
  echo '<script type="text/javascript">';
  echo ' alert("Không có quyền truy cập !")';  //not showing an alert box.
  echo '</script>';
 }else{
  ?>
    <?php include('mvc/includes/admin/hearder.php') ?>
          <div class="nd">
            <h1>Chào mừng bạn đến trang quản lý</h1>

        </div>
          <?php include('mvc/includes/admin/footer.php') ?>
          <?php 
        }     
 ?>
        
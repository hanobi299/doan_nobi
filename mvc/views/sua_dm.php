<?php if (isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung'])!=1 || isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung']) == null ) {
  echo '<script type="text/javascript">';
  echo ' alert("Không có quyền truy cập !")';  //not showing an alert box.
  echo '</script>';
 }else{
  ?>
    <?php include('mvc/includes/admin/hearder.php') ?>
<body>
  <?php 
  ?>
  <div class="nd">
    <form class="box" method="POST">
      <div class="nhantrang">SỬA DANH MỤC</div>
      <div class="dong">
        <div class="cot1">ID Danh Mục</div>
        <div class="cot2">
          <input class="td" type="text" name="iddm" value="<?php echo $data[0]['id_dm'];?>">

        </div>
        
      </div>
      <div class="dong">
        <div class="cot1">Tên Danh mục</div>
        <div class="cot2">
          <input class="td" type="text" name="tendm" value="<?php echo $data[0]['ten_dm'];?>">

        </div>
      </div>
      <div class="dong">
          <input id="nut" type="submit" name="suadm" value="UPDATE">
        </div>
    </form>
  </div>
</body>
<?php include('mvc/includes/admin/footer.php') ?>
</html>
<?php }  ?>
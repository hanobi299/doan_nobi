<?php if (isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung'])!=1 || isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung']) == null ) {
  echo '<script type="text/javascript">';
  echo ' alert("Không có quyền truy cập !")';  //not showing an alert box.
  echo '</script>';
 }else{
  ?>
<?php include('mvc/includes/admin/hearder.php') ?>
<body>
<div class="nd">
	<form class="box" method="POST">
		<div id="header"><a href="index.php?action=danhmuc" id="logo"><img src="uploads/logo.png" height="180px" width="250px "></a>
		</div>
		<div class="nhantrang">THÊM DANH MỤC</div>
		<div class="dong">
			<div class="cot1">Tên Danh Mục</div>
			<div class="cot2">
				<input class="td" type="text" name="tdm" placeholder="Nhập tên danh mục"required>

			</div>
			
		</div>
		<div class="dong">
				<input id="nut" type="submit" name="nutthemdm" value="ADD">
			</div>
	</form>
	</div>
</body>
<?php include('mvc/includes/admin/footer.php') ?>
</html>
<?php } ?>
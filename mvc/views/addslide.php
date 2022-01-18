<?php if (isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung'])!=1 || isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung']) == null ) {
  echo '<script type="text/javascript">';
  echo ' alert("Không có quyền truy cập !")';  //not showing an alert box.
  echo '</script>';
 }else{
  ?>
<?php include('mvc/includes/admin/hearder.php') ?>
<body>
	<div class ="nd">
	<form class="box" method="POST" enctype = "multipart/form-data">
		<div class="nhantrang">THÊM SLIDE</div>
		<div class="dong">
			<div class="cot1">Tiêu đề</div>
			<div class="cot2">
				<input class="td" type="text" name="tieude" placeholder="Nhập tên sản phẩm" required="">

			</div>
			
		</div>
		<div style="" class="dong" style="width: 700px;">
			<div class="cot1">Hình ảnh sản phẩm</div>
			<input class="ha" type="file" name="img" accept="image/*" required  enctype = "multipart/form-data" >	
		</div>
		<input id="nut" type="submit" name="add_slide" value="THÊM">
	</form>
	</div>
</body>
</html>
<?php }  ?>
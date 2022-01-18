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
	<form class="box" method="POST" enctype = "multipart/form-data">

		<div class="nhantrang">SỬA SLIDE</div>
		<div class="dong">
			<div class="cot1">Tiêu Đề</div>
			<div class="cot2">
				<input class="td" type="text" name="tieude" value="<?php echo $data[0]['tieude'];?>" required>

			</div>
			
		</div>
	
		<div style="" class="dong" style="width: 700px;">
			<div class="cot1">Hình ảnh sản phẩm</div>
			<input class="ha" type="file" name="img" accept="image/*" enctype = "multipart/form-data">
			<input style="display: none;" class="ha" name="test" type="text" value="<?php echo $data[0]['image'];?>" accept="image/*">
			<!-- <input style="display: none;" type="file" name="linkha1" accept="image/*" value="<?php echo $data1[0]['hinhanh_sp'];?>"> -->
			
		</div>
		
				
	      <td><input id="nut" type="submit" name="edit_slide" value="SỬA"></td>
		
			
	</form>
	</div>
</body>
<?php include('mvc/includes/admin/footer.php') ?>
</html>
<?php }  ?>
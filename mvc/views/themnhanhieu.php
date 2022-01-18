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
		<div class="nhantrang">THÊM NHÃN HIỆU</div>
		<div class="dong">
			<div class="cot1">Tên nhãn hiệu</div>
			<div class="cot2">
				<input class="td" type="text" name="tennh" placeholder="Nhập tên nhãn hiệu"required>

			</div>
			
		</div>
		<div class="dong">
			<div class="cot1">SDT</div>
			<div class="cot2">
				<input class="td" type="text" name="sdt" placeholder="Nhập số điện thoại"required>

			</div>
			
		</div>
		<div class="dong">
			<div class="cot1">Địa Chỉ</div>
			<div class="cot2">
				<input class="td" type="text" name="diachi" placeholder="Nhập địa chỉ"required>

			</div>
			
		</div>
		<div class="dong">
			<div class="cot1">Ghi chú</div>
			<div class="cot2">
				<input class="td"  type="text" name="mota" placeholder="Nhập mô tả"required>

			</div>
			
		</div>
		<div class="dong">
				<input id="nut" type="submit" name="nutthemnh" value="ADD">
			</div>
	</form>
	</div>
</body>
<?php include('mvc/includes/admin/footer.php') ?>
</html>
<?php } ?>
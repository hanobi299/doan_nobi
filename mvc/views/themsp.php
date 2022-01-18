<?php if (isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung'])!=1 || isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung']) == null ) {
  echo '<script type="text/javascript">';
  echo ' alert("Không có quyền truy cập !")';  //not showing an alert box.
  echo '</script>';
 }else{
  ?>
<?php include('mvc/includes/admin/hearder.php') ?>
<body>
<div class="nd">
	<form class="box" method="POST" enctype = "multipart/form-data">
		<div class="nhantrang">THÊM SẢN PHẨM</div>
		<div class="dong">
			<div class="cot1">Tên Sản Phẩm</div>
			<div class="cot2">
				<input class="td" type="text" name="tsp" placeholder="Nhập tên sản phẩm" required="">

			</div>
			
		</div>
		<div class="dong">
			<div class="cot1">Giá Gốc Sản phẩm</div>
			<div class="cot2">
				<input class="td" type="text" name="goc" placeholder="Nhập giá sản phẩm" required>

			</div>
			
		</div>
		<div class="dong">
			<div class="cot1">Giá Bán Sản phẩm</div>
			<div class="cot2">
				<input class="td" type="text" name="gsp" placeholder="Nhập giá sản phẩm" required>

			</div>
			
		</div>
		<div class="dong">
			<div class="cot1">Loại Sản Phẩm</div>
			<div class="cot2">
				<select class="form-control" name="lsp" required>
					<?php
					foreach ($data as $value){
					?>
						<option value='<?php echo $value['id_brand']  ?>'><?php echo $value['name_brand']; ?></option>
					<?php 
					}
					?>
				</select>
				
			</div>
		</div>
		<div class="dong">
			<div class="cot1">Danh Mục</div>
			<div class="cot2">
				<select class="form-control" name="ldm" requireds>
					<?php
					foreach ($datadm as $value){
					?>
						<option value='<?php echo $value['id_dm'] ?>'><?php echo $value['ten_dm']; ?></option>
					<?php 
					}
					?>
				</select>
				
			</div>
		</div>

		<div class="dong" style="width: 700px;">
			<div class="cot1">Hình ảnh sản phẩm</div>
			<input class="ha" type="file" name="linkha"  accept="image/*" enctype = "multipart/form-data"  required>
			
		</div>
			<div class="dong">
			<div class="cot1">Số Lượng</div>
			<div class="cot2">
				<input class="td" type="number" name="sl" min="1" placeholder="Nhập số lượng sản phẩm" required>

			</div>
		</div>
		<div class="dong">
			<div class="cot1">Ngày Nhập Kho</div>
			<input class="td" type="date" name="ngaynk" placeholder="Nhập ngày nhập kho" required>
		</div>
		<div class="dong">
			<div class="cot1">Mô tả sản phẩm</div>
			<div class="cot2">
				      <td><textarea cols="100" rows="15"  name="mt" ></textarea></td>
			</div>
			
		</div>
		<div class="dong">
			<div class="cot1">Thông số kỹ thuật</div>
			<div class="cot2">
				      <td><textarea cols="100" rows="15"  name="thongso" ></textarea></td>
			</div>
			
		</div>
		<div class="dong">
				<input id="nut" type="submit" name="nutthem" value="ADD">
			</div>
	</form>
</div>
				</div>
</body>
<?php include('mvc/includes/admin/footer.php') ?>
</html>
<?php }  ?>
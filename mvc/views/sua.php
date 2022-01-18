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
			<div class="nhantrang">SỬA SẢN PHẦM</div>
			<div class="dong">
				<div class="cot1">Tên sản phẩm</div>
				<div class="cot2">
					<input class="td" type="text" name="tsp" value="<?php echo $data1[0]['ten_sp'];?>" required>

				</div>
				
			</div>
			<div class="dong">
				<div class="cot1">Giá gốc Sản phẩm</div>
				<div class="cot2">
					<input class="td" type="text" name="goc" value="<?php echo $data1[0]['gia_goc'];?>" required>

				</div>
				
			</div>
			<div class="dong">
				<div class="cot1">Giá bán sản phẩm</div>
				<div class="cot2">
					<input class="td" type="text" name="gsp" value="<?php echo $data1[0]['gia_sp'];?>" required>

				</div>
				
			</div>
			<div class="dong">
				<div class="cot1">Nhãn hiệu</div>
				<div class="cot2">
					<select class="form-control" name="lsp" enctype = "multipart/form-data">
						<?php
						foreach ($data as $value){
							if ($value['id_brand']==$data1[0]['id_brand']){
						?>
							<option selected="selected" value="<?php echo $value['id_brand'];?>"><?php echo $value['name_brand'];?></option>	
						<?php 
							}
							else{
							?>
								<option value="<?php echo $value['id_brand']; ?>"><?php echo $value['name_brand']; ?> </option>
							<?php
								}
							?>
					<?php
						}
					?>	
					</select>
				
				</div>
			</div>
			<div class="dong">
				<div class="cot1"> Danh Mục</div>
				<div class="cot2">
					<select class="form-control" name="ldm">
						<?php
						foreach ($datadm as $value){
							if ($value['id_dm']==$data1[0]['id_dm']){
						?>
							<option selected="selected" value="<?php echo $value['id_dm'];?>"><?php echo $value['ten_dm'];?></option>	
						<?php 
							}
							else{
							?>
								<option value="<?php echo $value['id_dm']; ?>"><?php echo $value['ten_dm']; ?> </option>
							<?php
								}
							?>
					<?php
						}
					?>	
					</select>
				
				</div>
			</div>
			<div class="dong"style="width: 700px;">
				<div class="cot1">Hình ảnh sản phẩm</div>
				<input class="ha" type="file" name="linkha" enctype = "multipart/form-data" />

				<input style="display: none;" type="text" name="linkha1" value="<?php echo $data1[0]['hinhanh_sp'];?>">
				
			</div>
				<div class="dong">
				<div class="cot1">Số lượng sản phẩm</div>
				<input class="td" min="0" type="text" min=1 name="sl" value="<?php echo $data1[0]['soluong'];?>"required>
				
			</div>
			<div class="dong">
				<div class="cot1">Ngày Nhập Kho</div>
				<div class="cot2">
					<input class="td" type="date" name="ngaynk" value="<?php echo $data1[0]["ngaynhapkho_sp"];?>"required>

				</div>
				
			</div>

			<div class="dong">
				<div class="cot1">Mô tả sản phẩm</div>
				<div class="cot2">
						<td><textarea cols="100" rows="15" name="mt" required><?php echo $data1[0]['mota_sp'];?></textarea></td>
				</div>
				
			</div>
			<div class="dong">
				<div class="cot1">Thông số kỹ thuật</div>
				<div class="cot2">
						<td><textarea cols="100" rows="15" name="thongso" required><?php echo $data1[0]['thongso'];?></textarea></td>
				</div>
				
			</div>
			<div class="dong">
				<input id="nut" type="submit" name="nutsua" value="UPDATE">
			</div>
			
				
		</form>
	</div>
</body>
<?php include('mvc/includes/admin/footer.php') ?>
</html>
<?php }  ?>
<?php if (isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung'])!=1 || isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung']) == null ) {
  echo '<script type="text/javascript">';
  echo ' alert("Không có quyền truy cập !")';  //not showing an alert box.
  echo '</script>';
 }else{
  ?>
    <?php include('mvc/includes/admin/hearder.php') ?>
	        <div class="nd">
	        	<p>Danh sách sản phẩm</p>
				<form class="timkiem" method="GET">
								<div class="boxtk">
		                		<input id="tk" type="Search" name="key" placeholder=" Tìm Kiếm sản phẩm..."/>
		                		</div>
		            	</form>
						<form class="timkiem" method="GET">
							<div class="boxtk">
								<span style="margin-left: 5px;">Lọc giá sp:</span>
								<?php
									$pricefrom = isset($_GET['pricefrom']) ? $_GET['pricefrom'] : 0;
									$priceto = isset($_GET['priceto']) ? $_GET['priceto'] : 1000000;
								?>
								<input id="tk" type="number" name="pricefrom" value="<?= $pricefrom; ?>"/>
								<input id="tk" type="number" name="priceto" value="<?= $priceto; ?>" />
								<button type="submit" name="fill">Tìm kiếm</button>
							</div>
						</form>
	        	<table class="table table-striped">
					
	        		<thead>
						
	        		<tr>
	        			<th>STT</th>
	        			<th>ID sản phẩm</th>
	        			<th>Danh Mục</th>
	        			<th>Tên sản phẩm</th>
	        			<th>Giá</th>
	        			<th>Nhãn hiệu</th>
	        			<th>Hình ảnh</th>
	        			<th>Số Lượng</th>
	        			<th>Mô Tả</th>
	        			<th>Ngày Nhập</th>
	        			<th>Thao Tác</th>
	        		</tr>
	        		</thead>
	        		<tbody>
	       				<?php
	       					if ($data_tk1==0) {
	       					?>
	       					<h1 style="text-align: center; font-size: 20px;"><?php echo "Không tìm thấy kết quả với ".$key; ?></h1>	
	       					<?php  
	       					}
	       					else{
	       					?>	
	       					<h2 style="text-align: center; font-size: 20px;"><?php echo "Kết quả với từ ".$key; ?> với <?php echo count($data_tk1); ?> kết quả</h2>
	       					<?php
		       					$i=1;
		       					foreach ($data_tk1 as $value) {
	       					?>
	       					<tr>
		       					<td><?php echo $i++; ?></td>
		       					<td><?php echo $value['id_sp'];?></td>
		       					<?php foreach ($ket as $key) {
	        			 				if ($key['id_dm']==$value['id_dm']) {
	        			 					?>
	        			 					<td><?php echo $key['ten_dm']; ?></td>
	        			 					<?php
	        			 				}
	        			 			} ?>
		       					<td><?php echo $value['ten_sp'];  ?></td>
		       					<td><?php echo number_format($value['gia_sp']);  ?>đ</td>
		       					<?php foreach ($kq as $key) {
	        			 			if ($key['id_brand']==$value['id_brand']) {
	        			 				?><td><?php echo $key['name_brand']; ?></td>
	        			 				<?php
	        			 			}
	        			 		}  ?>
		       					<td><?php echo '<img style=" width="70px" height="90px" src="uploads/'.$value['hinhanh_sp'].'">' ?></td>
		       					<td><?php echo $value['soluong']; ?></td>
		       					<td><?php echo $value['mota_sp']; ?></td>
		       					<td><?php echo $value['thongso']; ?></td>
	        			 		<td><?php echo $value['ngaynhapkho_sp']; ?></td>
	        			 		<td>
	        			 		<form class="quanly">	
									<li><a href="index.php?action=sua&id_sua=<?php echo $value['id_sp'];?> "><i class="glyphicon glyphicon-edit"></i></a></li>
									
									<li><a href="index.php?action=xoa&id_xoa=<?php echo $value['id_sp'];?> "><i class="glyphicon glyphicon-trash"></i></a></li>
								</form>
						       </td>
	        			 	</tr>
	        			 	<?php  
	       					}
	       				}  
	       				  ?>
	        		</tbody>		
	        	</table>	
	        </div>
	        <div class="clear">
        	</div>
        </div>
    </div>
</body>
<?php include('mvc/includes/admin/footer.php') ?>
</html>
<?php }  ?>
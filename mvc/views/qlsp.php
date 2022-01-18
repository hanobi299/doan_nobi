<?php if (isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung'])!=1 || isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung']) == null ) {
  echo '<script type="text/javascript">';
  echo ' alert("Không có quyền truy cập !")';  //not showing an alert box.
  echo '</script>';
 }else{
  ?>
	<?php include('mvc/includes/admin/hearder.php') ?>
	<?php if (isset($_SESSION['success'])) :?>
				    	<?= $myMessage= addslashes($_SESSION["success"]);
                        echo "<script type='text/javascript'>alert('$myMessage');</script>"; ?>
				     <?php endif ; unset($_SESSION['success']) ?>


					 <?php if (isset($_SESSION['fail'])) :?>
				    	<?= $myMessage= addslashes($_SESSION["fail"]);
                        echo "<script type='text/javascript'>alert('$myMessage');</script>"; ?>
				     <?php endif ; unset($_SESSION['fail']) ?>				 
	        <div class="nd">
	        	<h1>Danh sách sản phẩm (<?php if($data){ echo count($data); }else { echo '0'; }   ?> sản phẩm)<a href="index.php?action=them"> ADD </a></h1>
		
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
						<th>Giá gốc</th>
	        			<th>Giá bán</th>
	        			<th>Nhãn hiệu</th>
	        			<th>Hình ảnh</th>
	        			<th>Số Lượng</th>
	        			<th style="text-align: center;">Mô Tả</th>
	        			<th>Thông số</th>
	        			<th>Ngày Nhập</th>
	        			<th>Thao Tác</th>
	        		</tr>
	        		</thead>
	        		<tbody>
	        			<?php 
							if($ketqua){
								$i=1;
									foreach ($ketqua as $value) {
								?>
									<tr>
										<td><?php echo $i++; ?></td>
										<td><?php echo $value['id_sp']; ?></td>
											<?php foreach ($ket as $key) {
												if ($key['id_dm']==$value['id_dm']) {
													?>
													<td><?php echo $key['ten_dm']; ?></td>
													<?php
												}
											} ?>
										<td><?php echo $value['ten_sp']; ?></td>
										<td><?php echo number_format($value['gia_goc']); ?>đ</td>
										<td><?php echo number_format($value['gia_sp']); ?>đ</td>
										<?php foreach ($kq as $key) {
											if ($key['id_brand']==$value['id_brand']) {
												?><td><?php echo $key['name_brand']; ?></td>
												<?php
											}
										}  ?>
										<td><?php echo '<img style=" width="70px" height="90px" src="uploads/'.$value['hinhanh_sp'].'">' ?></td>
										<td><?php echo $value['soluong']; ?></td>
										<td style="width: 500px;"><?php echo $value['mota_sp']; ?></td>
										<td style="width: 500px;"><?php echo $value['thongso']; ?></td>
										<td><?php echo $value['ngaynhapkho_sp']; ?></td>
										<td>
										<?php
										if (isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung'])!=0){
										?>
										<form class="quanly">	
											<li><a href="index.php?action=sua&id_sua=<?php echo $value['id_sp'];?>  "onclick="return confirm('Bạn có chắc chắn muốn sửa sản phẩm này?');"><i class="glyphicon glyphicon-edit"></i></a></li>
											
											<li><a href="index.php?action=xoa&id_xoa=<?php echo $value['id_sp'];?>" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm?');"><i class="glyphicon glyphicon-trash"></i></a></li>
										</form>
										<?php
										}

										?>
										
									</td>
									</tr> 
								
								<?php 
									}
							}else{
								echo '<tr>';
									echo '<td colspan="13">Không có sản phẩm</td>';
								echo '</tr>';
							}
	        				

	        			   ?>
	        		</tbody>		
	        	</table>
				<?php
                  if($ketqua != NULL)
                  {
                    ?>
                <div class="container1">
                  <div class="pagination" id="comment">
                    <?php 
                    for ($i=1; $i <$sotrang ; $i++) { 
                      echo '<a href="./index.php?action=quanly&page='.$i.'#comment">'.$i.'</a>';
                    }
                     ?>
                </div>
              </div>

                    <?php
                  }
                 ?>
                </div>
              </div>	
	        </div>
	        <div class="clear">
        	</div>
        </div>
    </div>
</div>
</body>
<?php include('mvc/includes/admin/footer.php') ?>
</html>

<?php }  ?>
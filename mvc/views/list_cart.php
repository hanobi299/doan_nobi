<?php include('mvc/includes/customer/hearder.php') ?>
  <?php
if (isset($_POST['nutdx'])) {
	session_unset();
}
?>
<div class="container-giohang">
	<?php if(!isset($_SESSION['giohang'])|| (count($_SESSION['giohang'])== "0")) 
	{
		?>
		<div class="title-cart">
    
			<div class="img-cart" style=" margin-top:10px;text-align:center">
			<img style="" src="uploads/empty-cart.png" alt="">
		</div>
			<h3 style="text-align: center;margin-bottom:10px;">Giỏ hàng của bạn trống. Mời mua hàng! <span><?php   echo "<a href=index.php>Về trang chủ</a>";  ?></span> </h3>
			
		</div>
	<?php 
	}else{
		?>
		<h3 style="text-align: center;margin-bottom:10px;">Giỏ hàng của bạn <?php if(count($_SESSION['giohang'])!= "0"){ echo count($_SESSION['giohang'])?> sản phẩm</h3>
		 <p><?php   echo "<a href=index.php>Tiếp tục mua hàng</a>";  ?></p>
		<div class="giohang">
			<?php if (isset($_SESSION['success'])) :?>
				<p class="text-danger"><?= $_SESSION['success'] ?></p>
			<?php endif ; unset($_SESSION['success']) ?>
				<form action="index.php?action=capnhatgiohang" method="post">
				<table class="table-giohang">
				<tr>
					<th>STT</th>
					<th>Tên sản phẩm</th>
					<th>Hình ảnh</th>
					<th>Giá</th>
					<th>Số lượng</th>
					<th>Tổng giá</th>
					<th>Thao tác</th>
				</tr>
				<?php
				$total = 0;
				$i=1;

				if(isset($_SESSION['giohang'])){
					foreach ($_SESSION['giohang'] as $key=> $value) {
						?>
				
						<tr>
						<td><?php echo $i++;?></td>
						<td><?php echo $value['name'];?></td>
						<td><?php echo '<img style=" width="70px" height="90px" src="uploads/'.$value['hinhanh_sp'].'">'?></td>
						
						<td><?php echo number_format($value['gia'])?><sup>đ</sup></td>
						<td>
							<input type="hidden" name="id_sp[]" value="<?php echo $key; ?>">
							<input type="number" name="soluong[]" min= 1 max= 5 value="<?php echo $value["soluong"]; ?>">
						</td>


						<td><?php echo number_format($value['gia']*$value['soluong']);?> <sup>đ</sup></td>
						<td><a href='index.php?action=xoaCart&key=<?php echo $key ?>'>Xóa</a></td>
					</tr>
				
					<?php
						$total +=  $value['soluong']*$value['gia'];
					}//dong foreach
				}
				?>

				<tr>
					<td></td>	
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					
					<?php 
						if($total > 1000000) {?>
							<td><strong>Tổng tiền: <?php echo number_format($total);?>đ</strong>+<span>Miễn phí vận chuyển</span></td>
						<?php
						}else{
							?>
							 
							<td><strong>Tổng tiền: <?php echo number_format($total + 50000);?>đ</strong>+<span>50.000 phí vận chuyển</span</td> 
						<?php
						} 
						?>
						
					<td colspan="8"><a href='index.php?action=xoagiohang' >Xóa hết</a>
					<input style="width:60%" type="submit" name="" value="Cập nhật">
				
				

				</tr>
				
				</table>
			</form> 
		</div>
		    <div class="adress_customer">
		         <div class="giohang-muahang">
	                    <h3 style="text-align: center;">Thông Tin Mua Hàng</h3>
	                        <form action="index.php?action=taohoadon" method="post">
	                            <div class="muahang-item">
	                                <p>Họ Tên</p>
	                                <input class="td" type="text" name="hoten" value="<?php if(isset($_SESSION['hoten'])) echo $_SESSION['hoten'];?>"required>

	                                <input class="td" type="hidden" name="tongtien" value="<?php echo $total; ?>"required>
	                            </div>
	                            <div class="muahang-item">
	                                <p>Địa Chỉ giao hàng</p>
	                               <input class="td" type="text" name="diachi" value=""required>
	                            </div>
	                            <div class="muahang-item">
	                                <p>Số Điện Thoại</p>
	                                <input class="td" type="text" name="dienthoai" value="<?php if(isset($_SESSION['dienthoai'])) echo $_SESSION['dienthoai'];?>"required>
	                            </div>
	                            <div class="muahang-item">
	                            	<p>Phương thức thanh toán</p>
			                        <select id="type-of-pay" name="phuongthucthanhtoan" class="form-control">
			                             <?php 

			                                  $duyet = array('Thanh toán sau khi nhận hàng','Thanh toán online');
			                                  for ($i=0; $i < 2 ; $i++) {
			                                  	$_SESSION['phuongthucthanhtoan'] = !isset($_SESSION['phuongthucthanhtoan'])? $i : $_SESSION['phuongthucthanhtoan'];
	 		                                    if ($_SESSION['phuongthucthanhtoan']==$i) {
			                                      ?>
			                                    <option value="<?php echo $i; ?>" selected="selected"><?php echo $duyet[$i]; ?></option>
			                                    <?php  
			                                    }
			                                    else {
			                                      ?>
			                                        <option value="<?php echo $i;?>"><?php echo $duyet[$i]; ?></option>
			                                     <?php

			                                    }
			                                  }
			                               ?> 
			                         </select>
	                            </div>
								<div id="cong-thanh-toan" class="muahang-item" style="display: none;">
									<label for="bank_code">Ngân hàng</label>
									<select name="bank_code" id="bank_code" class="form-control">
										<option value="">Không chọn</option>
										<option value="NCB"> Ngan hang NCB</option>
										<option value="AGRIBANK"> Ngan hang Agribank</option>
										<option value="SCB"> Ngan hang SCB</option>
										<option value="SACOMBANK">Ngan hang SacomBank</option>
										<option value="EXIMBANK"> Ngan hang EximBank</option>
										<option value="MSBANK"> Ngan hang MSBANK</option>
										<option value="NAMABANK"> Ngan hang NamABank</option>
										<option value="VNMART"> Vi dien tu VnMart</option>
										<option value="VIETINBANK">Ngan hang Vietinbank</option>
										<option value="VIETCOMBANK"> Ngan hang VCB</option>
										<option value="HDBANK">Ngan hang HDBank</option>
										<option value="DONGABANK"> Ngan hang Dong A</option>
										<option value="TPBANK"> Ngân hàng TPBank</option>
										<option value="OJB"> Ngân hàng OceanBank</option>
										<option value="BIDV"> Ngân hàng BIDV</option>
										<option value="TECHCOMBANK"> Ngân hàng Techcombank</option>
										<option value="VPBANK"> Ngan hang VPBank</option>
										<option value="MBBANK"> Ngan hang MBBank</option>
										<option value="ACB"> Ngan hang ACB</option>
										<option value="OCB"> Ngan hang OCB</option>
										<option value="IVB"> Ngan hang IVB</option>
										<option value="VISA"> Thanh toan qua VISA/MASTER</option>
									</select>
	                            </div>
	                            <div class="muahang-item">
	                                <p>Ghi Chú</p>
	                                <textarea rows="3" cols="60" class="td" name="ghichu" rows="3" placeholder="Nhập ghi chú"></textarea>
	                            </div>
	                            <div class="bn-dathang">
	                   			    	<button class="bn-dathang1">ĐẶT HÀNG</button>
	                            </div>
	                        </form>
	                        	<?php  
	                            	}
	                           	?>
	                </div>
	   </div>
	   
		<?php
		}
		?>
</div> 
<?php if (isset($_SESSION['thongbao'])) :?>
				    	<?= $myMessage= addslashes($_SESSION['thongbao']);
                        echo "<script type='text/javascript'>alert('$myMessage');</script>"; ?>
				     <?php endif ; unset($_SESSION['thongbao']) ?>    	
</section>
<?php include('mvc/includes/customer/footer.php') ?>
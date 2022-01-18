<?php if (isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung'])!=1 || isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung']) == null ) {
  echo '<script type="text/javascript">';
  echo ' alert("Không có quyền truy cập !")';  //not showing an alert box.
  echo '</script>';
 }else{
  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Hóa Đơn</title>
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
	body{
		font-family: 'Poppins', sans-serif;
		margin: 0;
		padding: 0;
	}
	.wrapper{
		max-width: 1920px;

	}
	.container{
		max-width: 1200px;
		padding: 0 15px;
		margin: 0 auto;
	}
	.header{
		display: flex;
		justify-content: space-around;
		text-align: center;
		margin: auto;
	}
	.logo img{
		max-width: 200px;
		max-height: 250px;
	}
	table{
		padding-top: 20px;
		margin: auto;
	}
	span{
		display: block;
		width: 500px;
		max-width: 80%;
		padding: 5px 5px;
	}
	.bottom{
		padding-top: 50px;
		text-align: center;
		display: flex;
		justify-content: space-between;
		padding-bottom:100px ;
	}
	th{
		text-align: center;
		padding: 15px;
		border: 1px solid #3333;
	}
	td{
		text-align: center;
		padding: 15px;
		border: 1px solid #3333;
	}
	.inhoadon{
		padding-bottom: 50px;
	}
	@media print{
    	button{
        	display:none;
        }
    
    }
</style>
<body>
	<div class="wrapper">
		<div class="container">
			<div class="content">
				<div class="header">
					<div class="logo">
						<img src="uploads/logo.png" alt="">
					</div>
					<div class="title"><h1>Hóa Đơn Bán Hàng</h1>
						<div class="date"> <p><?php echo"Ngày lập hóa đơn: ".date("d/m/Y") ?></p></div>
					</div>
					
					</div>
				<div class="detail">
					<h3>Tên khách hàng: <?php echo $inhoadon[0]['hoten'] ?></h3> 
					<span class="id-hd">Mã hóa đơn: <?php echo $inhoadon[0]['id_hd'] ?></span>
					<span> Ngày đặt hàng:<?php echo $inhoadon[0]['ngaydathang'] ?></span>
					<span>Địa chỉ: <?php echo $inhoadon[0]['diachi'] ?></span>
					<span>SDT: <?php echo $inhoadon[0]['dienthoai'] ?></span>
					<span>Hình thức thanh toán: <?php  switch($inhoadon[0]['Phuongthucthanhtoan']){
												case 1:{ echo 'Thanh toán online'; break;} 
												case 0:{ echo 'Thanh toán sau khi nhận hàng'; break;} 
												}
												?>  
					</span>
				</div>
				<table>
				<thead>
				<tr>
					<th>STT</th>
					<th>Tên Sản Phẩm</th>
					<th>Số Lượng</th>
					<th>Giá sản phẩm</th>
					<th>Thành tiền</th>
				</tr>
				</thead>
				<tbody>
					<?php 
					$i=1;
					foreach ( $inhoadon as $key =>$value) {
						$thanhtien = $value['soluong']*$value['gia_sp'];
					?>
					<tr>
						<td><?php echo $i++; ?></td>
						<td><?php echo $value['ten_sp']; ?></td>
						<td><?php echo $value['soluong']; ?></td>
						<td><?php echo number_format($value['gia_sp']) ?>đ</td>
						<td><?php echo number_format($thanhtien); ?> </td>
					</tr>  
					<?php 
						}
					?>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td><strong>Tổng tiền thanh toán: <?php echo number_format($inhoadon[0]['Total']) ?></strong></td> 
				</tbody> 
				</table> 
				<div class="bottom">
						<div class="customer">
							<span>Người Mua hàng</span>
						</div>
						<div class="kho">
							<span>Nhân viên kho</span>
						</div>
				</div> 	
				<div class="inhoadon"><button onclick="window.print()">Print</button></div>
			</div>
		</div>
	</div>
</body>
</html>
				
<?php
}
?>

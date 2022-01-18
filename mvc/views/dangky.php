
<!DOCTYPE html>
<html>
<head>
	<title>ĐĂNG KÝ</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="public/css/dangky.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head> 

<body>

		<form class="boxdangky" method="post">
			<div id="header"><a href="index.php" id="logo"><img src="uploads/logo.png" height="180px" width="250px "></a>
			</div>
			<div class="dong">
					<div class="cot1">Tên đăng nhập*</div>
					<input class="tendk" type="text" name="tdk" placeholder="Nhập tên người dùng"required>
				
			</div>
			<div class="dong">
		    <div class="cot1">Mật khẩu*</div>
					<input class="passdk" type="password" name="pass1" placeholder="Nhập mật khẩu"required>
				
			</div>
			<div class="dong">
	       <div class="cot1">Xác thức mật khẩu*</div>
					<input class="pass2" type="password" name="pass2" placeholder="Nhập lại mật khẩu"required>

			</div>
				<div class="dong">
				<div class="cot1">Họ Tên</div>
					<input class="tendk" type="text" name="Hoten" placeholder="Nhập họ tên"required>
			</div>
			<div class="dong">
				<div class="cot1">Ngày sinh</div>
					<input class="tendk" type="date" name="ns" placeholder="Nhập ngày tháng năm sinh"required>
				
			</div>
		
			<div class="dong">
				<div class="cot1">Giới tính</div>
					<input class="tendk" type="text" name="gioitinh" placeholder="Nhập giới tính">
			</div>
			<div class="dong">
				<div class="cot1">Email</div>	
					<input class="tendk" type="text" name="email" placeholder="Nhập Email"required>
			</div>
			<div class="dong">
					<div class="cot1">SĐT*</div>
				<input class="tendk" type="text" name="sdt" placeholder="Nhập số điện thoại"required>
			</div>
			<div class="dong">	
				<div class="cot1">Địa chỉ*</div>
				<input class="tendk" type="text" name="diachi" placeholder=" Nhập địa chỉ"required>
			</div>
			
			<div class="button">
				<button type="submit" name="nutdangky" class="bndangky">Tạo tài khoản</button>
			</div>
		</form>
	
</body>

</html>

<!DOCTYPE html>
<html>
<head>
	<title>ĐĂNG NHẬP</title>
	<meta charset="utf-8">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="public/css/dangnhap.css">
	<?php 
        if(isset($_GET['message']) && $_GET['message'] == 'success' )
        {
            echo '<script type="text/javascript">';
  echo ' alert("Đăng kí thành công !")';  //not showing an alert box.
  echo '</script>';;
        }
    ?>
</head>
<body>

	<form class="boxdangnhap" method="post">
		<div id="header"><a href="index.php" id="logo"><img src="uploads/logo.png" height="180px" width="250px "></a>
		</div>
		<header class="tdedn"> Đăng Nhập </header>
		<div class="dong">
			<div>
				<input class="ten" type="text" name="tdn" placeholder="Nhập tên người dùng">
			</div>
		</div>
		<div class="dong">
			<div>
				<input class="pass" type="password" name="mk" placeholder="Nhập mật khẩu">
			</div>
		</div>
		<div class="button">
			<button type="submit" name="nutdangnhap" class="bn">LOGIN</button>
			<button class="bn" ><a href="index.php?action=dangky">Đăng ký</a></button>
		</div>
	</form>

</body>
</html>
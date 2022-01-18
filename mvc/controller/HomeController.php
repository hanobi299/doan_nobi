
<?php 
session_start();

 ?>
<?php
require_once 'mvc/models/BaseModels.php';
	/**
	 * 
	 */
	class SanphamController
	{
		public $models;
		function __construct()
		{
			$this->models=new BaseModel();
		}	
		
		public function dieuhuong(){
			if(isset($_GET['action'])){
				switch ($_GET['action']) {
					case 'inhoadon':
                        if (isset($_GET['id_hd'])) {
							$id_hd = $_GET['id_hd'];
							$inhoadon = $this->models->inhoadon($id_hd);
                        }else{
							echo "Lỗi mời kiểm tra lại!";
						}
						require_once 'mvc/views/xuathoadon.php';
						break;
					case 'quanly':
	        			$sql1 = " SELECT * FROM `danhmuc`";
	        			$sql2 = "SELECT* FROM `loaisp`";
	        			$data = $this->models->laysanpham();
	        			$ketqua = $this->models->laysanphamquanly(5, isset($_GET['page'])? $_GET['page'] : 1);
	        			$ket = $this->models->laydanhmuc($sql1);
	        			$kq  = $this->models->get_brand($sql2);
	        			$sotrang = isset($ketqua)? $ketqua[0]['total'] < 5? 1 : ($ketqua[0]['total'] % 5 > 0)? ($ketqua[0]['total']/5) + 1: $ketqua[0]['total']/5 : 0;
	         			require_once 'mvc/views/qlsp.php';
					break;
					case 'home-admin':
							require_once('mvc/views/quanly.php');
						break;
					case 'admin_dashboard':
						$sql1 =" SELECT count(id_hd) FROM `hoadon`";
	        		    $sumhoadon =  $this->models->sumhd($sql1);
						$sql2 ="SELECT sum(soluong) FROM `chitiethoadon`,hoadon where hoadon.id_hd= chitiethoadon.id_hd and hoadon.trangthai=3";
	        			$sumsoluong = $this->models->sumSL($sql2);
	        			$sql = "SELECT count(id_user) FROM `user` WHERE user.level = 2";
	        			$sumuser = $this->models->sumuser($sql);
	        			$sqldt = " SELECT sum(Total) FROM `hoadon` where trangthai=3";
	        			$sumdt = $this->models->sumdt($sqldt);
						$sqlhuy =" SELECT count(id_hd) FROM `hoadon` where trangthai=4";
						$sumdonhuy= $this->models->sumdh($sqlhuy);
	        			$sqlhot = "SELECT
									sp.ten_sp,
									sp.hinhanh_sp,
									sp.gia_goc,
									sp.gia_sp,
									SUM(cthd.soluong) AS SL,
									sp.gia_sp
									FROM
										sanpham sp,
										chitiethoadon cthd
									WHERE
										sp.id_sp = cthd.id_sp
									GROUP BY
										sp.id_sp,
										sp.ten_sp,
										sp.hinhanh_sp,
										sp.gia_sp
									ORDER BY
										SUM(cthd.soluong)
									DESC
									LIMIT 0, 5";
	        			$sphot = $this->models->sanphamhot($sqlhot);

						$sqlkhach ="SELECT
									user.id_user,
									user.Hoten,
									user.ngaysinh,
									user.gioitinh,
									user.email,
									user.dienthoai,
									user.diachi,
									COUNT(hoadon.id_user) AS Don,
									SUM(hoadon.Total) as Total
									FROM
										user,
										hoadon 
									WHERE
										user.id_user = hoadon.id_user
									GROUP BY
										user.Hoten,
										user.ngaysinh,
										user.gioitinh,
										user.email,
										user.dienthoai,
										user.diachi
									ORDER BY
										COUNT(hoadon.id_user)
									
									DESC
									LIMIT 0, 5 ";

						$khachtt = $this->models->khanhquen($sqlkhach);
	         			require_once 'mvc/views/thongke.php';
					break;
					case 'hoadon':
		        		$sql = "SELECT * FROM hoadon ";
						$ketqua  = $this->models->layhoadon($sql);
					require_once('mvc/views/quanlyhoadon.php');			
					break;

					case 'them':
						 $data=$this->models->get_brand();
						 $datadm=$this->models->laydanhmuc();
						 require_once 'mvc/views/themsp.php';
						 if (isset($_POST['nutthem'])) {
						 	$ldm2 =$_POST['ldm'];
						 	$tsp2 = $_POST['tsp'];
							$goc2 =$_POST['goc'];
						 	$gsp2 = $_POST['gsp'];
						 	$id_lsp2 = $_POST['lsp'];
						 	$sl2=$_POST['sl'];
						 	$mt2 = $_POST['mt'];
						 	$thongso=$_POST['thongso'];
						 	$ngaynk2 = $_POST['ngaynk'];
                                if (isset($_FILES['linkha'])) {
                                    $errors= array();
                                    $file_name = $_FILES['linkha']['name'];
                                    $file_size =$_FILES['linkha']['size'];
                                    $file_tmp =$_FILES['linkha']['tmp_name'];
                                    $file_type=$_FILES['linkha']['type'];
                                    
                                    if ($file_size > 3097152) {
                                        $errors[]='Tập tin cho phép 3 MB';
                                    }
                                    // Up file vào thư mục
                                    if (empty($errors)==true) {
										$linkha2 = $file_name = $_FILES['linkha']['name'];
                                        move_uploaded_file($file_tmp, "uploads/".$file_name);
										$this->models->themsanpham($ldm2, $tsp2, $goc2, $gsp2, $id_lsp2, $linkha2, $sl2, $mt2, $thongso, $ngaynk2);
										$_SESSION['success']='thao tác thành công';
										header('Location:index.php?action=quanly');
                                    }

            
                                   
                                }
						}
						break;
					case 'themdm':
						require_once'mvc/views/themdanhmuc.php';
							if (isset($_POST['nutthemdm'])) {
								$ten_dm=$_POST['tdm'];
								$this->models->themdanhmuc($ten_dm);
								$_SESSION['success']='thao tác thành công';
								header('Location:index.php?action=danhmuc');
							}
							break;
					case 'themnh':
						require_once'mvc/views/themnhanhieu.php';
							if (isset($_POST['nutthemnh'])) {
								$ten_nh=$_POST['tennh'];
								$sdt   =$_POST['sdt'];
								$diachi=$_POST['diachi'];
								$ghichu=$_POST['mota'];
								$this->models->themnhanhieu($ten_nh,$sdt,$diachi,$ghichu);
								$_SESSION['success']='thao tác thành công';
								header('Location:index.php?action=nhanhieu');
							}	
						break;
					case 'dangky':
						 require_once 'mvc/views/dangky.php';
						 if(isset($_POST['nutdangky'])){
							$user       = $_POST["tdk"];
							$pass1      = md5($_POST["pass1"]);
							$pass2      = md5($_POST["pass2"]);
							$Hoten		= $_POST["Hoten"];
							$ngaysinh   = $_POST["ns"];
							$gioitinh   = $_POST["gioitinh"];
							$email      = $_POST["email"];
							$sdt        = $_POST["sdt"];
							$diachi     = $_POST["diachi"];
							$ngaydangky = date("Y-m-d");
							if ($user==""||$pass1==""||$sdt==""||$diachi==""||$email==""||$ngaydangky=="") {
								echo "Yêu cầu nhập đủ dữ liệu";
							}
							else{
								$sql="select*from user where user='".$user."'";
								$this->ketqua = $this->models->checktaikhoan($user);
								if($this->ketqua==0&&$pass1==$pass2){
									$this->models->dangkythanhvien($user,$pass1,$Hoten,$ngaysinh,$gioitinh,$email,$sdt,$diachi,$ngaydangky);
									header("location:index.php?action=dangnhap&message=success");
								}else{ 
									if ($this->ketqua!=0) {
									    echo '<script type="text/javascript">';
  										echo ' alert("Tài khoản đã tồn tại!")';  //not showing an alert box.
  										echo '</script>';
									
									}
									if ($pass1!=$pass2) {
									     echo '<script type="text/javascript">';
 										 echo ' alert("Mật khẩu không khớp !")';  //not showing an alert box.
 										 echo '</script>';
									}
								}

							}

						}	

						break;

					case 'sua':
						$data = $this->models->get_brand();
						$data1 = $this->models->laysanpham_id($_GET['id_sua']);
						$datadm=$this->models->laydanhmuc();
						include_once('mvc/views/sua.php');
						if(isset($_POST['nutsua'])){
							$id=$_GET['id_sua'];
							$id_dm2=$_POST['ldm'];
							$tsp2 = $_POST["tsp"];
							$goc2 =$_POST["goc"];
							$gsp2 = $_POST["gsp"];
							$id_lsp2 = $_POST['lsp'];
							$sl2=$_POST['sl'];
							$mt2 = $_POST['mt'];
							$thongso=$_POST['thongso'];
							$ngaynk2 = $_POST['ngaynk'];
                            if (isset($_FILES['linkha'])) {
                                $errors= array();
                                $file_name = $_FILES['linkha']['name'];
                                $file_size =$_FILES['linkha']['size'];
                                $file_tmp =$_FILES['linkha']['tmp_name'];
                                $file_type=$_FILES['linkha']['type'];
                                
                                if ($file_size > 3097152) {
                                    $errors[]='Tập tin cho phép 3 MB';
                                }
                                // Up file vào thư mục
                                if (empty($errors)==true) {	
									$linkha2 = $file_name;
										if($linkha2 ==''){			
											$linkha2= $_POST['linkha1'];
											// var_dump($_POST['linkha1']);
											// die();
											$this->models->suasanpham($id, $id_dm2, $tsp2, $goc2, $gsp2, $id_lsp2, $linkha2, $sl2, $mt2, $thongso, $ngaynk2);
											$_SESSION['success']='thao tác thành công';
											header('Location:index.php.?action=quanly');
										}else{
											$linkha2 = $file_name;
											move_uploaded_file($file_tmp, "uploads/".$file_name);
                                            $this->models->suasanpham($id, $id_dm2, $tsp2, $goc2, $gsp2, $id_lsp2, $linkha2, $sl2, $mt2, $thongso, $ngaynk2);
                                            $_SESSION['success']='thao tác thành công';
                                            header('Location:index.php.?action=quanly');
                                        }
                                }
                            }				
						}
					break;
					case 'suauser':
						$data = $this->models->layid_user($_GET['id_user']);
						include_once('mvc/views/sua_ad.php');
						if (isset($_POST['suaad'])) {
							$id=$_GET['id_user'];
							$user=$_POST['user'];
							$pass= $_POST['pass'];
							$level=$_POST['level'];
							$Hoten=$_POST['Hoten'];
							$ngaysinh=$_POST['ngaysinh'];
							$gioitinh=$_POST['gioitinh'];
							$email =$_POST['email'];
							$sdt   =$_POST['dienthoai'];
							$diachi=$_POST['diachi'];
							$this->models->suauser($id,$user,$pass,$level,$Hoten
								,$ngaysinh,$gioitinh,$email,$sdt,$diachi);
							header('Location:index.php?action=khachhang');

						}
						break;
					case 'suadanhmuc':
						$data = $this->models->layid_danhmuc($_GET['id_dm']);
						include_once('mvc/views/sua_dm.php');
						 if(isset($_POST['suadm'])){
						 	$id_dm=$_POST['iddm'];
						 	$ten_dm=$_POST['tendm'];
						 	$this->models->suadm($id_dm,$ten_dm);
							 $_SESSION['success']='thao tác thành công';
						 	header('Location:index.php?action=danhmuc');
						 }
						break;
					case 'suanhan':
						$data = $this->models->get_id_brand($_GET['id_brand']);
						include_once('mvc/views/sua_nh.php');
						 if(isset($_POST['suanh'])){
						 	$id_brand=$_POST['idnh'];
						 	$name_brand=$_POST['tennh'];
						 	$sdt   =$_POST['sdt'];
						 	$diachi=$_POST['diachi'];
						 	$ghichu=$_POST['mota'];
						 	$this->models->edit_brand($id_brand,$name_brand,$sdt,$diachi,$ghichu);
							$_SESSION['success']='thao tác thành công';
						 	header('Location:index.php?action=nhanhieu');
						 }
						break;
					case 'xoa':
						// 
							$check = $this->models->id_sp_chitiethoadon($_GET['id_xoa']);
							if($check!=null){
								$_SESSION['fail']='thao tác không thành công sản phẩm tồn tại trong hóa đơn';
								header('Location:index.php?action=quanly');
							}else{
								$this->models->xoasanpham($_GET['id_xoa']);
								$_SESSION['success']='thao tác thành công';
								header('Location:index.php?action=quanly');
							}
					
						break;
					case 'xoauser':
							$this->models->xoauser($_GET['id_user']);
							header('Location:index.php?action=khachhang');
							break;
					case 'xoadm':
						$s1 = $this->models->layid_danhmucsp($_GET['id_dm']);
						if($s1!=null){
							$_SESSION['fail']='thao tác không thành công';
							header('Location:index.php?action=danhmuc');
						}else{
							$this->models->xoadm($_GET['id_dm']);
							$_SESSION['success']='thao tác thành công';
							header('Location:index.php?action=danhmuc');
						}	
							
							break;
					case 'xoanhan':
						$id_brand =$_GET['id_brand'];
						$s2 = $this->models->sanphambrand($id_brand);
						if($s2!=NULL){
							$_SESSION['fail']='thao tác không thành công';
							header('Location:index.php?action=nhanhieu');
						}else{
                            $this->models->xoanhanhieu($id_brand);
							$_SESSION['success']='thao tác thành công';
							header('Location:index.php?action=nhanhieu');
                        }
							
							break;
					case 'xoahoadon':
							$this->models->xoahoadon($_GET['id']);
							$_SESSION['success']='thao tác thành công';
							header('Location:index.php?action=hoadon');
						break;					
					case'danhmuc':
							$sql = "SELECT * FROM `danhmuc` ";
							$ketqua2 = $this->models->laydanhmuc($sql);
							include_once('mvc/views/danhmuc.php');
							break;
						break;
					case 'nhanhieu':
						$sql="SELECT * FROM `brand`";
						$ketqua2 = $this->models->get_brand($sql);
						 include_once('mvc/views/nhanhieu.php');
						break;
					case 'dangnhap':
						include_once('mvc/views/dangnhap.php');
						if (isset($_POST['nutdangnhap'])) {
							$tendn= $_POST['tdn'];
							$mkhau=md5($_POST['mk']);
							$data1=$this->models->kiemtradangnhap($tendn,$mkhau);
							$dem1 =$this->models->dembangghi($tendn,$mkhau);
							if ($dem1==0) {
								echo '<script type="text/javascript">';
									echo ' alert("đăng nhập thất bại!")';  
									echo '</script>';

								
							}else{
								$_SESSION['tennguoidung']=$tendn;
								$_SESSION['quyennguoidung']=$data1[0]['level'];
								$_SESSION['diachi']=$data1[0]['diachi'];
								$_SESSION['dienthoai']=$data1[0]['dienthoai'];
								$_SESSION['hoten']=$data1[0]['Hoten'];
								$_SESSION['id']=$data1[0]['id_user'];
								if($_SESSION['quyennguoidung']==1||$_SESSION['quyennguoidung']==3){
	        				$ketqua= $this->models->laysanpham($sql);

										header('Location:index.php?action=home-admin');
								}else{
									header('location:index.php');
								}
							}
						}
						break;
						case'brand':
							$idnh=$_GET['idnh'];
							$brand=$this->models->sanphambrand($idnh);
							$get_name = $this->models->get_id_brand($idnh);
							if( isset($_GET['pricefrom']) && isset($_GET['priceto']) ){
								$brand=$this->models->laysp_boi_idbrand($idnh, $_GET['pricefrom'], $_GET['priceto']);
							}
							$nhanhieu=$this->models->get_brand();
							include_once('mvc/views/brand.php');
							break;
						case'slide':
							$slide = $this->models->getslide();
							include_once('mvc/views/quanlyslide.php');
						break;
						case'addslide':
							require_once'mvc/views/addslide.php';
                            if (isset($_POST['add_slide'])) {
                                $tieude=$_POST['tieude'];
                                if (isset($_FILES['img'])) {
                                    $errors= array();
                                    $file_name = $_FILES['img']['name'];
                                    $file_size =$_FILES['img']['size'];
                                    $file_tmp =$_FILES['img']['tmp_name'];
                                    $file_type=$_FILES['img']['type'];
                                    
                                    if ($file_size > 5097152) {
                                        $errors[]='Tập tin cho phép 3 MB';
                                    }
                                    // Up file vào thư mục
                                    if (empty($errors)==true) {
                                        $img = $file_name ;
                                        move_uploaded_file($file_tmp, "uploads/".$file_name);
                                        $_SESSION['success']='thao tác thành công';
                                        $this->models->addslide($img, $tieude);
                                        header('Location:index.php?action=slide');
                                    }
                                }
                            }
							break;	
						case'editslide':
							$id=$_GET['id'];
							$data = $this->models->layid_banner($_GET['id']);
							include_once('mvc/views/editslide.php');
							 if(isset($_POST['edit_slide'])){
								 $tieude=$_POST['tieude'];
								 if (isset($_FILES['img'])) {
									$errors= array();
									$file_name = $_FILES['img']['name'];
									$file_size =$_FILES['img']['size'];
									$file_tmp =$_FILES['img']['tmp_name'];
									$file_type=$_FILES['img']['type'];
									if ($file_size > 5097152) {
										$errors[]='Tập tin cho phép 5 MB';
									}
									// Up file vào thư mục
									if (empty($errors)==true) {	
										$img = $file_name;
											if($img ==''){			
												$img= $_POST['test'];
												// var_dump($_POST['test']);
												// die();
												$this->models->editslide($id,$img,$tieude);
												$_SESSION['success']='thao tác thành công';
												header('Location:index.php?action=slide');
											}else{
												$img = $file_name;
												move_uploaded_file($file_tmp, "uploads/".$file_name);
												$this->models->editslide($id,$img,$tieude);
												$_SESSION['success']='thao tác thành công';
												header('Location:index.php?action=slide');
											}
									}
								}				
							
							 }
							break;
						
						case'deleteslide':
							$this->models->deleteslide($_GET['id']);
							$_SESSION['success']='thao tác thành công';
							header('Location:index.php?action=slide');	
						break;
						case 'Category':
						$iddm=$_GET['id_dm'];
						$danhmuc=$this->models->layid_danhmuc($iddm);
						$kq=$this->models->layid_danhmucsp($iddm);
						if( isset($_GET['pricefrom']) && isset($_GET['priceto']) ){
							$kq=$this->models->laysp_boi_iddm($iddm, $_GET['pricefrom'], $_GET['priceto']);
						}
						$nhanhieu=$this->models->laybranddanhmuc($iddm);
						$slide = $this->models->getslidehome();
						include_once('mvc/views/Category.php');
						break;
						case 'tintuc':{
							include_once('mvc/views/tintuc.php');
							}
							break;
				    	case 'xemchitiet':
							if (isset($_GET['id'])) {
								$id_hoadon=$_GET['id'];
								$data = $this->models->layid_hoadon($id_hoadon);
						include_once('mvc/views/chitiethoadonkhach.php');
						}
						break;
						
						case 'add':
							if (isset($_SESSION['tennguoidung'])) {
							$id =isset($_GET['id']) ? (int)$_GET['id'] : '';
							$sanpham=$this->models->layid_sanpham($id)[0];
							 if ($sanpham) {
								if (isset($_SESSION['giohang'][$id]))
							     {
							     	if (isset($_SESSION['giohang'][$id]))
							         {
							    		$_SESSION['giohang'][$id]['soluong']+=1;	
							     	}
							     	else
							     	{
							     		$_SESSION['giohang'][$id]['soluong']=1;
							     	}
							     	$_SESSION['giohang'][$id]['name']=$sanpham['ten_sp'];
							     	$_SESSION['giohang'][$id]['gia']=$sanpham['gia_sp'];
							 		$_SESSION['giohang'][$id]['hinhanh_sp']=$sanpham['hinhanh_sp'];
							     	$_SESSION['success']='sản phẩm đã có trong giỏ hàng! cập nhật mới';
							     	header('location:index.php?action=chitiet&id='.$id);
							     	exit();
									
							 	}
							 	else
							 	{
							 		$_SESSION['giohang'][$id]['soluong']=1;
							 		$_SESSION['giohang'][$id]['name']=$sanpham['ten_sp'];
							 		$_SESSION['giohang'][$id]['gia']=$sanpham['gia_sp'];								
							 		$_SESSION['giohang'][$id]['hinhanh_sp']=$sanpham['hinhanh_sp'];
							 		$_SESSION['success']='Thêm sản phẩm vào giỏ hàng thành công!!!';
							 		header('location:index.php?action=chitiet&id='.$id);
							 		exit();
							 	}
							 }
							 else{
							 	$_SESSION['success']='không tồn tại sp trong csdl!!';
							 	header("location:index.php");
							 	exit();
							 }
							}
							header("Location:index.php?action=dangnhap");
							exit();
							break;
						case "capnhatgiohang" : {
								$id = $_POST["id_sp"];
								$soluong = $_POST["soluong"];								
									for($i = 0; $i < count($id); $i++) {
										if($soluong[$i] <= 0) {
											unset($_SESSION["giohang"][$id[$i]]);
											
										}
										else {
											$_SESSION["giohang"][$id[$i]]["soluong"] = $soluong[$i];
									    }
									}
									
								header("Location: index.php?action=listcart");
							break;
						}
						case 'taohoadon': {
								$bank_code = isset($_POST['bank_code']) ? trim($_POST['bank_code']) : '';
								$result = $this->models->taohoadon($_SESSION["id"],$_POST["hoten"],$_POST["diachi"],$_POST["dienthoai"],$_POST["ghichu"],$_POST["tongtien"], 0, $_POST['phuongthucthanhtoan'], $bank_code);
								if(is_string($result)){
									header('Location: '.$result);
									die();
								}
								if($result == 1) {
									$_SESSION["thongbao"] = "Mua hàng thành công.";
									//$this->models->suahoadon($_GET['id']);
									header("Location:index.php?action=listcart");		
								}else{
									echo '<script type="text/javascript">';
									echo ' alert("Thanh toán không thành công!")';  //not showing an alert box.
									echo '</script>';
								}
							break;

						}
						case 'thanhtoanonlinethanhcong': {
							//echo $_GET['id'];
							$result = $this->models->suahoadon($_GET['id']);
							if($result){
								$_SESSION["thongbao"] = "Mua hàng thành công.";
								header("Location:index.php?action=listcart");	
								die();
							}else{
								echo '<script type="text/javascript">';
								echo ' alert("Thanh toán không thành công!")';  //not showing an alert box.
								echo '</script>';
							}
							
						break;

					}
						case 'xemchitiethoadon':
							if (isset($_GET['id'])) {
								$id_hoadon=$_GET['id'];
								$data = $this->models->layid_hoadon($id_hoadon);
							$sql = "SELECT * FROM hoadon where id_hd = $id_hoadon";
						    $get_hoadon = $this->models->layhoadon($sql);
							
							
							}
						    if (isset($_POST['ok'])) {
	
								$ketqua = $this->models->capnhaptrangthai($_POST['id'],$_POST['trangthai']);
								if($_POST['trangthai'] == '2') {
									$hoadon = $this->models->inhoadon($_GET['id']);
									$user = $this->models->layid_user($hoadon[0]['id_user']);
									//require_once 'mvc/models/BaseModels.php';
									require('PHPMailer/src/PHPMailer.php');
									require("PHPMailer/src/SMTP.php");
									require("PHPMailer/src/Exception.php");
									$mail = new PHPMailer\PHPMailer\PHPMailer();
								
									try {
										$mail->SMTPDebug = 1; //0,1,2: chế độ debug. khi chạy ngon thì chỉnh lại 0 nhé
										$mail->isSMTP();  
										$mail->CharSet  = "utf-8";
										$mail->Host = 'smtp.gmail.com';  //SMTP servers
										$mail->SMTPAuth = true; // Enable authentication
										$mail->Username = "nobidev299@gmail.com";
										$mail->Password = "ozougenmfmalmwwi";
										$mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
										$mail->Port = 465;  // port to connect to                
										$mail->setFrom('thegioididong@gmail.com', 'Ha Nobi' ); 
										$mail->addAddress('hanobi299@gmail.com', $user[0]['Hoten']); //mail và tên người nhận  
										$mail->isHTML(true);  // Set email format to HTML
										$mail->Body    = 'Đặt hàng thành công';
										$mail->Subject  =  'Cảm ơn quý khách đã đặt hàng .Đơn hành của bạn đã được chuyển đi';
										$mail->smtpConnect( array(
											"ssl" => array(
												"verify_peer" => false,
												"verify_peer_name" => false,
												"allow_self_signed" => true
											)
										));

										$mail->send();
									}catch(Exception $e){
										echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
										die();
									}
								
								}
								if($_POST['trangthai'] == '3') {
									$hoadon = $this->models->inhoadon($_GET['id']);
									$user = $this->models->layid_user($hoadon[0]['id_user']);
									//require_once 'mvc/models/BaseModels.php';
									require('PHPMailer/src/PHPMailer.php');
									require("PHPMailer/src/SMTP.php");
									require("PHPMailer/src/Exception.php");
									$mail = new PHPMailer\PHPMailer\PHPMailer();
								
									try {
										$mail->SMTPDebug = 1; //0,1,2: chế độ debug. khi chạy ngon thì chỉnh lại 0 nhé
										$mail->isSMTP();  
										$mail->CharSet  = "utf-8";
										$mail->Host = 'smtp.gmail.com';  //SMTP servers
										$mail->SMTPAuth = true; // Enable authentication
										$mail->Username = "nobidev299@gmail.com";
										$mail->Password = "ozougenmfmalmwwi";
										$mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
										$mail->Port = 465;  // port to connect to                
										$mail->setFrom('thegioididong@gmail.com', 'Ha Nobi' ); 
										$mail->addAddress('hanobi299@gmail.com', $user[0]['Hoten']); //mail và tên người nhận  
										$mail->isHTML(true);  // Set email format to HTML
										$mail->Body    = 'Hoàn tất đơn hàng';
										$mail->Subject  =  'Đơn hành của bạn đã hoàn tất cảm ơn quý khách đã lựa chọn thế giới di động!';
										$mail->smtpConnect( array(
											"ssl" => array(
												"verify_peer" => false,
												"verify_peer_name" => false,
												"allow_self_signed" => true
											)
										));

										$mail->send();
									}catch(Exception $e){
										echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
										die();
									}
								
								}
								$_SESSION['success']='Cập nhật thành công!!';	
								header('Location:index.php?action=xemchitiethoadon&id='.$id_hoadon );
							}
						
							include_once('mvc/views/chitiethoadon.php');
							
							break;	

						
						case 'listcart':
							isset($_SESSION['giohang']);
							include_once('mvc/views/list_cart.php');
							break;
						case 'quanlybinhluan':
							$sql="SELECT * FROM `binhluan`";
							$databl = $this->models->layBinhLuan($sql);
							if (isset($_POST['ok'])) {
	
									$ketqua = $this->models->capnhaptrangthaibinhluan($_POST['id'],$_POST['trangthai']);
									echo '<script type="text/javascript">';
  								 echo ' alert("Duyệt bình luận thành công!")';  //not showing an alert box.
  								 echo '</script>';
									header("Location:index.php?action=quanlybinhluan");
								}
								include_once('mvc/views/quanlybinhluan.php');
							break;
						case 'xoabl':
							$this->models->xoabl($_GET['id_bl']);
							$_SESSION['success']='thao tác thành công!';
							header('Location:index.php?action=quanlybinhluan');
							break;
						case 'chitiet':
						if(isset($_GET['id'])){
							$id_sp=$_GET['id'];
							$sql="SELECT sanpham.id_dm From sanpham where sanpham.id_sp= $id_sp";
							$id = $this->models->danhmucsp_lienquan($sql);
							$id_dm =$id[0]['id_dm'];
							$dienthoai2=$this->models->danhmucsp_ct($id_dm);
							$data_id=$this->models->layid_sanpham($id_sp);
							$databl=$this->models->layBinhLuanid($id_sp);
							$data_bl=$this->models->layBinhLuanCT($id_sp, 5, isset($_GET['page'])? $_GET['page'] : 1);
							$sotrang = isset($data_bl)? $data_bl[0]['total'] < 5? 1 : ($data_bl[0]['total'] % 5 > 0)? ($data_bl[0]['total']/5) + 1: $data_bl[0]['total']/5 : 0; 
							include_once('mvc/views/chitiet.php');
							if(isset($_POST['submit']))
								{
								$id_sp=$_GET['id'];
								$id_user=$_POST['id_user'];
								$ten=$_POST['hoten'];
								$binhluan=$_POST['noidung'];
								$ngaybinhluan = date("Y-m-d H:i:s");
								$this->models->themBinhLuan($id_sp,$id_user,$ten,$binhluan,$ngaybinhluan);
								header('Location:index.php?action=chitiet&id='.$id_sp.'&message=binhluan');
								}
						}
						break;
						case 'xoaCart':
								if (!isset($_SESSION['giohang'])) 
								{
									header("location:index.php");
									exit;
								}
								$key=isset($_GET['key']) ? (int)$_GET['key'] : '';
								if ($key)
							    {
							    	if (array_key_exists($key,$_SESSION['giohang'])) 
							    	{
							    		unset($_SESSION['giohang'][$key]);
							    		$_SESSION['success'] ='Xóa sản phẩm trong giỏ hàng thành công';
							    	}
								}
							header("location:index.php?action=listcart");exit();
							break;

						case 'xoagiohang':
								unset($_SESSION['giohang']);
								header("location:index.php?action=listcart");
								exit();
							break;	
						case 'khachhang':
							$sql      = "SELECT * FROM user ";
							$ketqua1  = $this->models->layuser($sql);
							include_once('mvc/views/khachhang.php');
							break;
					case 'suathongtin':
						$data = $this->models->layid_user($_GET['idnd']);
						include_once('mvc/views/thongtin.php');
						if (isset($_POST['suatt'])) {
							$id=$_GET['idnd'];
							$pass= md5($_POST['pass']);
							$Hoten=$_POST['Hoten'];
							$ngaysinh=$_POST['ngaysinh'];
							$gioitinh=$_POST['gioitinh'];
							$email =$_POST['email'];
							$sdt   =$_POST['dienthoai'];
							$diachi=$_POST['diachi'];
							/*if ($pass==""||$Hoten==""||$email==""||$sdt==""||$diachi=="") {
								echo "Nhập thiếu dữ liệu";
							}else{}*/
							$this->models->suatt($id,$pass,$Hoten
								,$ngaysinh,$gioitinh,$email,$sdt,$diachi);
							header('Location:index.php?action=Thongtincanhan&idnd='.$id.'&message=success');
							header('Location:index.php?action=dangnhap&message=ok');

						}
						break;
						case 'Thongtincanhan':
							if(isset($_POST['suatt']))
							{

							}else{	
								$id = $_GET['idnd'];
								$data=$this->models->layid_user($id);
								$hoadon1=$this->models->layhoadon_iduser($id);
								include_once('mvc/views/thongtin.php');
							}
							break;
						case 'lichsudonhang':
								{
								$id = $_GET['idnd'];
								$data=$this->models->layid_user($id);
								$hoadon1=$this->models->layhoadon_iduser($id);
								include_once('mvc/views/lichsudonhang.php');
								}
							break;	
					}

				}else{

                    if (isset($_GET['tukhoa'])) {
						$key=$_GET['tukhoa'];
						if ($key==NULL) {
							header('Location:index.php');
						}
						$data_tk=$this->models->tksp($key);
						
						include_once 'mvc/views/timkiem.php';
						exit();

					}
					   if (isset($_GET['ten'])) {
						$ten=$_GET['ten'];
						if ($ten==NULL) {
							header('Location:index.php?action=khachhang');
						}
						$data_tk=$this->models->tkkh($ten);
						
						include_once 'mvc/views/timkiem_user.php';
						exit();

					}
					if ( isset($_GET['pricefrom']) && isset($_GET['priceto']) && isset($_GET['fill']) ) {
						$data = $this->models->loc_san_pham_theo_gia($_GET['pricefrom'], $_GET['priceto']);
						$ketqua=$this->models->loc_san_pham_theo_gia($_GET['pricefrom'], $_GET['priceto']);
						$ket = $this->models->laydanhmuc();
	        			$kq  = $this->models->get_brand();
						$sotrang = '';
						require_once 'mvc/views/qlsp.php';
						exit;
					}
					if (isset($_GET['key'])) {
							$key=$_GET['key'];
							if ($key==NULL) {
								header('Location:index.php?action=quanly');
	
							}
							$sql1 = " SELECT * FROM `danhmuc`";
	        				$sql2 = "SELECT* FROM SELECT * FROM `loaisp`";
	        	        	$ket = $this->models->laydanhmuc($sql1);
	        			    $kq  = $this->models->get_brand($sql2);
							$data_tk1=$this->models->tksp($key);
							include_once 'mvc/views/timkiem_ad.php';
							exit();
					}
					else{

						$slide = $this->models->getslidehome();
						$data = $this->models->laysanpham();
						$sanphammoi=$this->models->sanphammoi();
						$id=1;
						$dienthoai=$this->models->danhmucsp($id);
						$id1=2;
						$tablet=$this->models->danhmucsp($id1);
						$id2=3;
						$laptop=$this->models->danhmucsp($id2);
						$id3=4;
						$phukien=$this->models->danhmucsp($id3);
						$id4=5;
						$dongho=$this->models->danhmucsp($id4);
						$dienthoai2=$this->models->danhmucsp_dt($id);
						$id1=2;
						$tablet2=$this->models->danhmucsp_home($id1);
						$id2=3;
						$laptop2=$this->models->danhmucsp_home($id2);
						$id3=4;
						$phukien2=$this->models->danhmucsp_home($id3);
						$id4=5;
						$dongho2=$this->models->danhmucsp_home($id4);
						$sqlhot1 = "SELECT
									sp.id_sp,
									sp.ten_sp,
									sp.hinhanh_sp,
									sp.gia_goc,
									sp.gia_sp
									FROM
										sanpham sp,
										chitiethoadon cthd
									WHERE
										sp.id_sp = cthd.id_sp
									GROUP BY
										sp.id_sp,
										sp.ten_sp,
										sp.hinhanh_sp,
										sp.gia_sp
									ORDER BY
										SUM(cthd.soluong)
									DESC
									LIMIT 0, 5";
	        			$sphot1 = $this->models->sanphamhot_home($sqlhot1);
					
					include_once('mvc/views/home.php');
					}
				
				}	
			}				
		}
?>	
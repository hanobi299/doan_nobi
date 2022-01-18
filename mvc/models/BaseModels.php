<?php
class BaseModel
{
	private $maychu = 'localhost';
	private $tk='root';
	private $mk='';
	private $csdl='thegioididong';
	private $bienketnoi=null;

	function __construct()
	{
		$this->ketnoi();
	}
	
	public function ketnoi()
	{
		$this->bienketnoi = new mysqli($this->maychu,$this->tk,$this->mk,$this->csdl);
		mysqli_set_charset($this->bienketnoi,'utf8');
	}
	public function laysanpham()
		{
			$sql="select * from sanpham";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				$data=0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
			public function laysanphamquanly($limit, $page)
		{
			$sql="select *, (select count(id_sp) from sanpham ) as total from sanpham LIMIT ".(($page - 1) * $limit).", ".'5'."";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				$data=0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
	 public function layhoadon_iduser($id){
			$sql="select * from hoadon where id_user=$id";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				$data=0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;

	 }
	 public function inhoadon($id_hd){
		 $sql="SELECT * FROM hoadon, chitiethoadon 
		 WHERE hoadon.id_hd = chitiethoadon.id_hd and hoadon.id_hd = $id_hd ORDER BY hoadon.id_hd";
		 $this->ketqua=$this->bienketnoi->query($sql);
		 if ($this->ketqua->num_rows==0) {
			 $data=0;
		 }else{
			 while ($row=$this->ketqua->fetch_assoc()) {
				 $data[]=$row;
			 }
		 }
		 return $data;

	 }
	 public function loc_san_pham_theo_gia($pricefrom, $priceto){
		$sql="SELECT * FROM `sanpham` WHERE `gia_sp` > ". $pricefrom ." AND `gia_sp` < ". $priceto;
		$this->ketqua=$this->bienketnoi->query($sql);
		if ($this->ketqua->num_rows==0) {
			$data=0;
		}else{
			while ($row=$this->ketqua->fetch_assoc()) {
				$data[]=$row;
			}
		}
		return $data;

	}
	
	 public function sanphamhot($sqlhot)
	 {
         
			$this->ketqua=$this->bienketnoi->query($sqlhot);
			if ($this->ketqua->num_rows==0) {
				$data=0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
     }
	 public function sanphamhot_home($sqlhot1)
	 {
         
			$this->ketqua=$this->bienketnoi->query($sqlhot1);
			if ($this->ketqua->num_rows==0) {
				$data=0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
     }
	 public function khanhquen($sqlkhach){
		$this->ketqua=$this->bienketnoi->query($sqlkhach);
		if ($this->ketqua->num_rows==0) {
			$data=0;
		}else{
			while ($row=$this->ketqua->fetch_assoc()) {
				$data[]=$row;
			}
		}
		return $data;
	 }
	 public function sanphammoi()
		{
			$sql="SELECT * FROM `sanpham` ORDER BY id_sp DESC LIMIT 10";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				$data=0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
		public function layuser(){
			$sql= "SELECT * FROM `user`";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				$data=0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
		public function sumhd($sql1){
			$this->ketqua=$this->bienketnoi->query($sql1);
			if ($this->ketqua->num_rows==0) {
				$data=0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
		public function sumuser($sql){
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				$data=0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
		public function sumdt($sqldt){
			$this->ketqua=$this->bienketnoi->query($sqldt);
			if ($this->ketqua->num_rows==0) {
				$data=0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
		public function sumdh($sqlhuy){
			$this->ketqua=$this->bienketnoi->query($sqlhuy);
			if ($this->ketqua->num_rows==0) {
				$data=0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
		public function sumSL($sql2){
			$this->ketqua=$this->bienketnoi->query($sql2);
			if ($this->ketqua->num_rows==0) {
				$data=0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
			public function layhoadon($sql){
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				$data=0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}


		public function id_sp_chitiethoadon($id){
			$sql="select * from chitiethoadon where id_sp=$id";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				$data=0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
		public function laysanpham_id($id_sua)
		{
			$sql="select * from sanpham where id_sp=$id_sua";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				$data=0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
		public function danhmucsp($id)
		{
			$sql="select * from sanpham where id_dm = $id ";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				return 0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
		public function danhmucsp_lienquan($sql)
		{
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				return 0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
		public function danhmucspprice($id,$start,$end)
		{
            if ($end!=0) {
                $sql="select * from sanpham where id_dm = $id and sanpham.gia_sp >=$start and sanpham.gia_sp <= $end ";
            }
			else{
				$sql="select * from sanpham where id_dm = $id and sanpham.gia_sp >=$start ";
			}
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				return 0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
		public function danhmucsp_home($id)
		{
			$sql="select * from sanpham where sanpham.id_dm = $id limit 10";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				return 0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
		public function danhmucsp_ct($id_dm)
		{
			$sql="select * from sanpham where sanpham.id_dm =$id_dm limit 10";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				return 0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
		public function danhmucsp_dt($id)
		{
			$sql="select * from sanpham where id_dm = $id limit 10";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				return 0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
		public function layid_sanpham($id_sp)
		{
			$sql="select * from sanpham where id_sp = '$id_sp'";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				return 0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
		public function layid_banner($id)
		{
			$sql="select * from banner where id_banner = '$id'";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				return 0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
		public function layid_user($id_user)
		{
			$sql="select * from user where id_user = '$id_user'";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				return 0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}

		public function get_brand()
		{
			$sql="select * from brand";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				return NULL;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
		public function laybranddanhmuc($id_dm){
			$sql ="SELECT
						brand.id_brand,
						brand.name_brand
					FROM
						brand,
						danhmuc,
						sanpham
					WHERE
						danhmuc.id_dm = $id_dm
						and
						danhmuc.id_dm = sanpham.id_dm
						AND 
						brand.id_brand = sanpham.id_brand GROUP BY brand.id_brand";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				$data=0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;				
		}
		public function sanphambrand($idnh){
			$sql = "SELECT
						sanpham.id_sp,
						brand.name_brand,
						sanpham.ten_sp,
						sanpham.gia_goc,
						sanpham.gia_sp,
						sanpham.hinhanh_sp
					FROM
						brand,
						sanpham
					WHERE
						sanpham.id_brand = brand.id_brand
						AND
						brand.id_brand  = $idnh
					ORDER BY sanpham.id_sp";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				 return NULL;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
		public function getslide(){
			$sql="SELECT * FROM `banner`";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				$data=0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
		public function getslidehome(){
			$sql="SELECT * FROM `banner` limit 5";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				$data=0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
		public function addslide($img,$tieude){
			$sql ="INSERT INTO `banner`( `image`, `tieude`) VALUES ('$img','$tieude')";
			$this->ketqua=$this->bienketnoi->query($sql); 
			if ($this->ketqua->num_rows==0) {
				$data=0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
		public function editslide($id,$img,$tieude){
			$sql="UPDATE `banner` SET `image`='$img',`tieude`='$tieude' WHERE id_banner = $id";
			$this->ketqua=$this->bienketnoi->query($sql); 
			if ($this->ketqua->num_rows==0) {
				$data=0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
		public function deleteslide($id){
			$sql = "DELETE FROM `banner` where id_banner = $id" ;
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				$data=0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
		public function laydanhmuc()
		{
			$sql="select * from danhmuc";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				$data=0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
			public function layid_danhmuc($id_dm)
		{
			$sql="select * from danhmuc where id_dm = '$id_dm'";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				return 0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
				public function layid_danhmucsp($id_dm)
		{
			$sql="select * from sanpham where id_dm = '$id_dm'";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				return 0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;	
		}

		public function laysp_boi_iddm($id_dm, $pricefrom, $priceto)
		{
			$sql="select * from sanpham where id_dm = '$id_dm' and gia_sp > " . $pricefrom . " and gia_sp < " . $priceto;
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				return null;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
		public function laysp_boi_idbrand($idnh, $pricefrom, $priceto)
		{
			$sql="select * from sanpham where id_brand = '$idnh' and gia_sp > " . $pricefrom . " and gia_sp < " . $priceto;
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				return 0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}

				public function get_id_brand($id_brand)
		{
			$sql="select * from brand where id_brand = '$id_brand'";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				return 0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
		public function dangkythanhvien($user,$pass,$Hoten,$ngaysinh,$gioitinh,$email,$dienthoai,$diachi,$ngaydangky)
		{
		$sql="INSERT INTO user(user,pass,level,Hoten,ngaysinh,gioitinh,email,dienthoai,diachi,ngaydangky) VALUES ('$user','$pass','2','$Hoten','$ngaysinh','$gioitinh','$email','$dienthoai','$diachi','$ngaydangky')";
		$this->bienketnoi->query($sql);

		}
		public function themsanpham($b1,$b2,$b3,$b4,$b5,$b6,$b7,$b8,$b9,$b10)
		{
			$sql="INSERT INTO sanpham(id_dm,ten_sp,gia_goc,gia_sp,id_brand,hinhanh_sp,soluong,mota_sp,thongso,ngaynhapkho_sp) VALUES ('".$b1."','".$b2."','".$b3."','".$b4."','".$b5."','".$b6."','".$b7."','".$b8."','".$b9."','".$b10."')";
			$this->bienketnoi->query($sql);

		}
		public function themdanhmuc($ten_dm)
		{	
			$sql="INSERT INTO `danhmuc`( `ten_dm`) VALUES ('".$ten_dm."')";			
			$this->bienketnoi->query($sql);

		}
		public function themnhanhieu($ten_loai_sp,$sdt,$diachi,$mota)
		{	
			$sql="INSERT INTO `brand`(`name_brand`, `SDT`, `Diachi`, `mota`) VALUES ('".$ten_loai_sp."','".$sdt."','".$diachi."','".$mota."')";			
			$this->bienketnoi->query($sql);

		}
		public function suasanpham($b1,$b2,$b3,$b4,$b5,$b6,$b7,$b8,$b9,$b10,$b11){
		$sql="UPDATE sanpham SET id_dm='".$b2."',ten_sp = '".$b3."', gia_goc = '".$b4."' ,gia_sp = '".$b5."', id_brand = '".$b6."', hinhanh_sp = '".$b7."', soluong = '".$b8."', mota_sp = '".$b9."',thongso = '".$b10."', ngaynhapkho_sp = '".$b11."' WHERE id_sp = ".$b1."";
		$this->bienketnoi->query($sql);
		}
		public function suauser($id_user,$user,$pass,$level,$Hoten,$ngaysinh,$gioitinh,$email,$dienthoai,$diachi){
		$sql="UPDATE user SET user ='".$user."',pass = '".$pass."', level = '".$level."',Hoten='".$Hoten."' ,ngaysinh = '".$ngaysinh."', gioitinh = '".$gioitinh."', email = '".$email."', dienthoai = '".$dienthoai."', diachi = '".$diachi."' WHERE id_user = ".$id_user."";
		$this->bienketnoi->query($sql);
		}
		public function suatt($id_user,$pass,$Hoten,$ngaysinh,$gioitinh,$email,$dienthoai,$diachi){
		$sql="UPDATE user SET pass = '".$pass."',Hoten='".$Hoten."' ,ngaysinh = '".$ngaysinh."', gioitinh = '".$gioitinh."', email = '".$email."', dienthoai = '".$dienthoai."', diachi = '".$diachi."' WHERE id_user = ".$id_user."";
		echo $sql;
		$this->bienketnoi->query($sql);
		}
		public function suadm($id_dm,$ten_dm){
		$sql="UPDATE `danhmuc` SET `ten_dm`='".$ten_dm."' WHERE  id_dm = '".$id_dm."'";
		$this->bienketnoi->query($sql);
		}
		public function suahoadon($id_hd){
			$sql="UPDATE chitiethoadon SET thanhcong='1' WHERE id_hd = ".$id_hd."";
			$this->bienketnoi->query($sql);
			return true;
		}
		public function edit_brand($id_brand,$name_brand,$sdt,$diachi,$mota){
		$sql="UPDATE `brand` SET name_brand='".$name_brand."',SDT='".$sdt."',Diachi='".$diachi."',mota='".$mota."' WHERE id_brand='".$id_brand."'";
		$this->bienketnoi->query($sql);
		}
		public function xoadm($id_dm){
		$sql="delete from danhmuc where id_dm =$id_dm";
		$this->bienketnoi->query($sql);
		}
		public function xoanhanhieu($id_brand){
		$sql="delete from brand where id_brand =$id_brand";
		$this->bienketnoi->query($sql);
		}



		public function xoasanpham($id_xoa){
			$sql= "delete from sanpham where id_sp=$id_xoa";
			$this->bienketnoi->query($sql);

		}
		public function xoauser($id_user){
			$sql= "delete from user where id_user=$id_user";
			$this->bienketnoi->query($sql);

		}
				public function xoahoadon($id){
			$sql= "delete from hoadon where id_hd=$id";
			$this->bienketnoi->query($sql);

		}
		
		public function kiemtradangnhap($user,$pass){
			$sql="select *from user where user='".$user."'and pass='".$pass."'";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				$data=0;
			
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
					}
				}
			return $data;
		}
		public function dembangghi($user,$pass){
			$sql="select*from user where user='".$user."' and pass='".$pass."'";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				$dem= 0;
			}else{
				$dem=1;
			}
			return $dem;
		}
		public function checktaikhoan($user){
			$sql="select*from user where user='".$user."'";
			$this->ketqua = $this->bienketnoi->query($sql);
			if($this->ketqua->num_rows==0){
				return 0;
			}else{
				return 1;

				}

		}
		
		public function tksp($tukhoa)
		{
			$sql="select * from sanpham where ten_sp like N'%$tukhoa%'";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				return 0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
			public function tkkh($ten)
		{
			$sql="select * from user where hoten like N'%$ten%'";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				return 0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
		public function taohoadon($id_user,$hoten,$diachi,$dienthoai,$ghichu,$Total,$trangthai, $phuongThucThanhToan, $bank_code){
			$sql="INSERT INTO `hoadon`( `id_user`, `hoten`, `diachi`, `dienthoai`, `ghichu`, `Total`, `trangthai`) VALUES ('$id_user','$hoten','$diachi','$dienthoai','$ghichu',$Total,$trangthai)";
			if($this->bienketnoi->query($sql)) {
				$id_hd = $this->bienketnoi->insert_id;
				foreach ($_SESSION["giohang"] as $key => $item) {
					$id = $key;
					$soluong = $item["soluong"];
					$gia = $item["gia"];
					$ten=$item["name"];
					$hinhanh=$item["hinhanh_sp"];
					$Phuongthucthanhtoan = $phuongThucThanhToan;
					$sql1= "SELECT * FROM `sanpham` WHERE id_sp= ".$id;
					$ketqua= $this->bienketnoi->query($sql1)->fetch_assoc();
					$soluongmoi=(int)$ketqua['soluong']-(int) $soluong;
					$check = '';
					if($this->ktraHoaDon($id,$soluong)) {
						$sql="INSERT INTO chitiethoadon( id_hd, id_sp,ten_sp,hinhanh_sp,soluong,gia_sp, Phuongthucthanhtoan) VALUES ('$id_hd','$id','$ten','$hinhanh','$soluong','$gia',$Phuongthucthanhtoan)";
						$this->bienketnoi->query($sql);
						$sql="UPDATE sanpham set soluong= ".$soluongmoi." where id_sp = ".$id;
						$this->bienketnoi->query($sql);
						if($phuongThucThanhToan == '1'){
							$check = $this->thanhtoanonline($id_hd, $ten, $gia, $bank_code, $dienthoai, $hoten, $diachi);

						}
					}else {
							$sql = "delete from hoadon where id_hd = $id_hd";
							$this->bienketnoi->query($sql);
							return 0;
					}
				}
				unset($_SESSION['giohang']);
			}
			if($check != ''){
				return $check;
			}
			$this->suahoadon($id_hd);
			return 1;
		}

		public function thanhtoanonline($order_id, $name_product, $amount, $bank_code, $phone, $fullName, $address){
			error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
			date_default_timezone_set('Asia/Ho_Chi_Minh');
			
			$vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
			$vnp_Returnurl = "https://localhost/thegioididong/index.php?action=thanhtoanonlinethanhcong&id=".$order_id;
			$vnp_TmnCode = "UDCHNF2P";//Mã website tại VNPAY 
			$vnp_HashSecret = "GSVLBUYDWFWAUPLIWFVEEZKCNSXSAPEL"; //Chuỗi bí mật
			
			$vnp_TxnRef = $order_id; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
			$vnp_OrderInfo = "Thanh toán bằng phương thức thanh toán online ". $name_product;
			$vnp_OrderType = "billpayment";
			$vnp_Amount = $amount * 100;
			$vnp_Locale = "vn";
			if($bank_code != ''){
				$vnp_BankCode = $bank_code;
			}
			$vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
			//Add Params of 2.0.1 Version
			$vnp_ExpireDate = date('Y-m-d', strtotime(' +1 day'));
			//Billing
			$vnp_Bill_Mobile = $phone;
			$vnp_Bill_Email = 'devcheck@gmail.com';
			$fullName = trim($fullName);
			if (isset($fullName) && trim($fullName) != '') {
				$name = explode(' ', $fullName);
				$vnp_Bill_FirstName = array_shift($name);
				$vnp_Bill_LastName = array_pop($name);
			}
			$vnp_Bill_Address=$address;
			$vnp_Bill_City=$address;
			$vnp_Bill_Country=$address;
			$vnp_Bill_State=$address;
			// Invoice
			//$vnp_Inv_Phone=$_POST['txt_inv_mobile'];
			//$vnp_Inv_Email=$_POST['txt_inv_email'];
			//$vnp_Inv_Customer=$_POST['txt_inv_customer'];
			//$vnp_Inv_Address=$_POST['txt_inv_addr1'];
			//$vnp_Inv_Company=$_POST['txt_inv_company'];
			//$vnp_Inv_Taxcode=$_POST['txt_inv_taxcode'];
			//$vnp_Inv_Type=$_POST['cbo_inv_type'];
			$inputData = array(
				"vnp_Version" => "2.1.0",
				"vnp_TmnCode" => $vnp_TmnCode,
				"vnp_Amount" => $vnp_Amount,
				"vnp_Command" => "pay",
				"vnp_CreateDate" => date('YmdHis'),
				"vnp_CurrCode" => "VND",
				"vnp_IpAddr" => $vnp_IpAddr,
				"vnp_Locale" => $vnp_Locale,
				"vnp_OrderInfo" => $vnp_OrderInfo,
				"vnp_OrderType" => $vnp_OrderType,
				"vnp_ReturnUrl" => $vnp_Returnurl,
				"vnp_TxnRef" => $vnp_TxnRef,
				"vnp_ExpireDate"=>$vnp_ExpireDate,
				"vnp_Bill_Mobile"=>$vnp_Bill_Mobile,
				"vnp_Bill_Email"=>$vnp_Bill_Email,
				"vnp_Bill_FirstName"=>$vnp_Bill_FirstName,
				"vnp_Bill_LastName"=>$vnp_Bill_LastName,
				"vnp_Bill_Address"=>$vnp_Bill_Address,
				"vnp_Bill_City"=>$vnp_Bill_City,
				"vnp_Bill_Country"=>$vnp_Bill_Country
				//"vnp_Inv_Phone"=>$vnp_Inv_Phone,
				//"vnp_Inv_Email"=>$vnp_Inv_Email,
				//"vnp_Inv_Customer"=>$vnp_Inv_Customer,
				//"vnp_Inv_Address"=>$vnp_Inv_Address,
				//"vnp_Inv_Company"=>$vnp_Inv_Company,
				//"vnp_Inv_Taxcode"=>$vnp_Inv_Taxcode,
				//"vnp_Inv_Type"=>$vnp_Inv_Type
			);
			
			if (isset($vnp_BankCode) && $vnp_BankCode != "") {
				$inputData['vnp_BankCode'] = $vnp_BankCode;
			}
			if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
				$inputData['vnp_Bill_State'] = $vnp_Bill_State;
			}
			
			//var_dump($inputData);
			ksort($inputData);
			$query = "";
			$i = 0;
			$hashdata = "";
			foreach ($inputData as $key => $value) {
				if ($i == 1) {
					$hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
				} else {
					$hashdata .= urlencode($key) . "=" . urlencode($value);
					$i = 1;
				}
				$query .= urlencode($key) . "=" . urlencode($value) . '&';
			}
			
			$vnp_Url = $vnp_Url . "?" . $query;
			if (isset($vnp_HashSecret)) {
				$vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//  
				$vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
			}
			$returnData = array('code' => '00'
				, 'message' => 'success'
				, 'data' => $vnp_Url);
				if (isset($_POST['redirect'])) {
					header('Location: ' . $vnp_Url);
					die();
				} else {
					return $vnp_Url;
				}
		}

		public function capnhaptrangthai($id,$trangthai){
			$sql="update hoadon set trangthai='".$trangthai."' where id_hd=$id ";
			$this->bienketnoi->query($sql);
		}
		public function layid_hoadon($id){
			$sql = "select*from chitiethoadon where id_hd =$id";
			$this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				return 0;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
		}
		public function ktraHoaDon($id, $sl)
    	{
        $sql= "select * from sanpham where id_sp=$id";
        $result= $this->bienketnoi->query($sql)->fetch_assoc();
        if($result["soluong"]<$sl)
            return false;
        return true;
    	}
	     public function themBinhLuan($id,$id_user,$hoten,$noidung,$ngaybl) {
		  $sql= "INSERT INTO `binhluan`( `id_sp`, `id_user`, `hoten`, `noidung`, `ngaybl`) VALUES ('".$id."','".$id_user."','".$hoten."','".$noidung."','".$ngaybl."')";
				    $this->ketqua=$this->bienketnoi->query($sql);
						if ($this->ketqua->num_rows==0) {
							return 0;
						}else{
							while ($row=$this->ketqua->fetch_assoc()) {
								$data[]=$row;
							}
						}
						return $data;
	    }	
		public function layBinhLuanCT($id, $limit, $page) {
        $sql = "select *, (select count(*) from binhluan where id_sp = $id) as total from binhluan where id_sp = $id ORDER BY id_bl ASC LIMIT ".((int) ($page - 1) * $limit).", ".((int) $page * $limit);
            $this->ketqua=$this->bienketnoi->query($sql);
			if ($this->ketqua->num_rows==0) {
				return NULL;
			}else{
				while ($row=$this->ketqua->fetch_assoc()) {
					$data[]=$row;
				}
			}
			return $data;
    		}
    	public function layBinhLuanid($id){
    		$sql="SELECT* FROM binhluan where id_sp =$id";
    		$this->ketqua=$this->bienketnoi->query($sql);
						if ($this->ketqua->num_rows==0) {
							return 0;
						}else{
							while ($row=$this->ketqua->fetch_assoc()) {
								$data[]=$row;
							}
						}
						return $data;
    	}	
    	public function xoabl($id){
    		$sql = "DELETE FROM `binhluan` WHERE id_bl =$id";
    		$this->bienketnoi->query($sql);
    	}
    	public function capnhaptrangthaibinhluan($id,$trangthai){
    		$sql="UPDATE `binhluan` SET`trangthai`= '".$trangthai."' WHERE `id_bl`= '".$id."' ";
    		$this->bienketnoi->query($sql);
    	}
    	public function layBinhLuan() {
        $sql = "select * from binhluan";
            $this->ketqua=$this->bienketnoi->query($sql);
				if ($this->ketqua->num_rows==0) {
					return 0;
				}else{
					while ($row=$this->ketqua->fetch_assoc()) {
						$data[]=$row;
					}
				}
				return $data;
    		}		
   }
?>
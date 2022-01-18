 <?php require "mvc/includes/customer/hearder.php"?>
 <?php
if (isset($_POST['nutdx'])) {
	session_unset();
}
?>

    <?php 
        if(isset($_GET['message']) && $_GET['message'] == 'success' )
        {
            echo '<div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> Cập nhật thành công! Hãy đăng nhập lại !! 
</div>';
        }
    ?>
 <div class="giohang-muahang">
  <?php foreach ($data as $value): ?>   
    <form class="boxsua" method="POST" action="index.php?action=suathongtin&idnd=<?php echo $_GET['idnd'] ?>">
            <h1 style="text-align: center;color:black">Thông Tin Cá Nhân</h1>
            <p>( Sửa và ấn UPDATE để thay đổi thông tin cá nhân )</p>
       <div class="dong">
            <div class="cot1">Mật khẩu</div>
            <div class="cot2">
                <input class="td" type="password" name="pass" value="<?php echo $data[0]['pass'];?>" required>

            </div>
            
        </div>
         <div class="dong">
            <div class="cot1">Họ Tên</div>
            <div class="cot2">
                <input class="td" type="text" name="Hoten" value="<?php echo $data[0]['Hoten'];?>" required>

            </div>
            
        </div>
        
           <div class="dong">
                <div class="cot1">Ngày Sinh</div>
                <div class="cot2">
                <input class="td" type="date" name="ngaysinh" value="<?php echo $data[0]['ngaysinh'];?>" required>
            </div>
        </div>
        <div class="dong">
            <div class="cot1">Giới Tính</div>
            <div class="cot2">
                <input class="td" type="text" name="gioitinh" value="<?php echo $data[0]['gioitinh'];?>" required>

            </div>
        </div>
        <div class="dong">
            <div class="cot1">Email</div>
            <div class="cot2">
                <input class="td" type="text" name="email" value="<?php echo $data[0]['email'];?>" required>

            </div>
        </div>
        <div class="dong">
            <div class="cot1">SĐT</div>
            <div class="cot2">
                <input class="td" type="text" name="dienthoai" value="<?php echo $data[0]['dienthoai'];?>" required>

            </div>
        </div>
        <div class="dong">
            <div class="cot1">Địa Chỉ</div>
            <div class="cot2">
                <input class="td" type="text" name="diachi" value="<?php echo $data[0]['diachi'];?>" required>

            </div>
        </div>
            <input id="nut" type="submit" name="suatt" value="Update">
    </form>
    <!--Hóa đơn-->
           <?php endforeach ?>
   </div>
  </section>
  <?php include("mvc/includes/customer/footer.php") ?>

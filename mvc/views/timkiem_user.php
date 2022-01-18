<?php
if (isset($_POST['nutdx'])) {
  session_unset();
  header("location:index.php?action=dangnhap");

}
?>
<?php if (isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung'])!=1 || isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung']) == null ) {
  echo '<script type="text/javascript">';
  echo ' alert("Không có quyền truy cập !")';  //not showing an alert box.
  echo '</script>';
 }else{
  ?>
  <?php include('mvc/includes/admin/hearder.php') ?>    
          <div class="nd">
            <p>Danh sách tài khoản</p>
            <form class="timkiem" method="GET">
            <div class="boxtk">
                    <input id="tk" type="Search" name="ten" placeholder=" Tìm Kiếm ai đó..."/>
                        </div>
                  </form> 
                    <table class="table table-striped">
              <thead>
              <tr>
                <th>STT</th>
                <th>ID user</th>
                <th>User</th>
                <th>pass</th>
                <th>quyền</th>
                <th>Họ Tên</th>
                <th>ngày sinh</th>
                <th>giới tính</th>
                <th>email</th>
                <th>Điện thoại</th>
                <th>Địa chỉ</th>
                <th>ngày đăng ký</th>
                <!-- <th>Thao tác</th> -->
              </tr>
              </thead>
              <tbody>
                <?php
                  if ($data_tk==0) {
                  ?>
                  <h1 style="margin-right: 170px;text-align: center; font-size: 20px;"><?php echo "Không tìm thấy kết quả với ".$ten; ?></h1> 
                  <?php  
                  }
                  else{
                  ?>  
                  <h2 style="margin-right: 170px;text-align: center; font-size: 20px;"><?php echo "Kết quả với từ ".$ten; ?> với <?php echo count($data_tk); ?> kết quả</h2>
                <?php 
                  $i=1;
                  foreach ($data_tk as $value) {
                  ?>
                  <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $value['id_user']; ?></td>
                    <td><?php echo $value['user']; ?></td> 
                    <td><?php echo $value['pass']; ?></td>
                    <td><?php echo $value['level']; ?></td>
                    <td><?php echo $value['Hoten'];   ?></td>
                    <td><?php echo $value['ngaysinh']; ?></td>
                    <td><?php echo $value['gioitinh']; ?></td>
                    <td><?php echo $value['email']; ?></td>
                    <td><?php echo $value['dienthoai']; ?></td>
                    <td><?php echo $value['diachi']; ?></td>
                    <td><?php echo $value['ngaydangky']; ?></td>

                    <td>
                     <!-- <form class="quanly"> 
                      <li><a href="index.php?action=suauser&id_user=<?php echo $value['id_user'];?> "><i class="glyphicon glyphicon-edit"></i></a></li>
                      
                      <li><a href="index.php?action=xoauser&id_user=<?php echo $value['id_user'];?> "><i class="glyphicon glyphicon-trash"></i></a></li>
                      </form> -->
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
</body>
<?php include('mvc/includes/admin/footer.php') ?>
</html>
<?php }  ?>
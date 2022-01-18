<?php if (isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung'])!=1 || isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung']) == null ) {
  echo '<script type="text/javascript">';
  echo ' alert("Không có quyền truy cập !")';  //not showing an alert box.
  echo '</script>';
 }else{
  ?>
    <?php include('mvc/includes/admin/hearder.php') ?>   
	        <div class="nd">
	        	<h1>Danh sách tài khoản</h1>
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
                  $i=1;
                  foreach ($ketqua1 as $value) {
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
                        <?php
                     if (isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung'])==1){
                     ?>
                     <!-- <form class="quanly"> 
                      <li><a href="index.php?action=suauser&id_user=<?php echo $value['id_user'];?> "><i class="glyphicon glyphicon-edit"></i></a></li>
                      
                      <li><a href="index.php?action=xoauser&id_user=<?php echo $value['id_user'];?> "><i class="glyphicon glyphicon-trash"></i></a></li>
                      </form> -->
                         <?php
                    }

                      ?>
                    </td>
                  </tr> 
                
                  <?php 
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
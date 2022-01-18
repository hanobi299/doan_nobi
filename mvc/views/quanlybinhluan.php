<?php if (isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung'])!=1 || isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung']) == null ) {
  echo '<script type="text/javascript">';
  echo ' alert("Không có quyền truy cập !")';  //not showing an alert box.
  echo '</script>';
 }else{
  ?>
    <?php include('mvc/includes/admin/hearder.php') ?>
    <?php 
        if(isset($_GET['message']) && $_GET['message'] == 'success' )
        {
            echo '<script type="text/javascript">';
            echo ' alert("thao tác thành công !")';  //not showing an alert box.
            echo '</script>';
        }
    ?>
          <div class="nd">
            <h1>Danh sách bình luận</h1>
                    <table class="table table-striped">
              <thead>
              <tr>
                <th>STT</th>
                <th>ID BL</th>
                <th>ID sản phẩm</th>
                <th>ID USER</th>
                <th>Họ Tên</th>
                <th>Nội dung</th>
                <th>Ngày bình luận</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
              </tr>
              </thead>
              <tbody>
                <?php 
                  $a=1;
                  foreach ($databl as $value) {
                  ?>
                  <tr>
                    <td><?php echo $a++; ?></td>
                    <td><?php echo $value['id_bl']; ?></td>
                    <td><?php echo $value['id_sp']; ?></td> 
                    <td><?php echo $value['id_user']; ?></td>
                    <td><?php echo $value['hoten']; ?></td>
                    <td><?php echo $value['noidung'];   ?></td>
                    <td><?php echo $value['ngaybl']; ?></td>
                    <td>
                       <form method="POST" >
                        <div>
                          <input hidden=""  type="" value="<?php echo $value['id_bl']; ?>" name="id"> 
                            <select name="trangthai" class="form-control" >
                             <?php 
                                  $duyet = array('Chờ duyệt','Đã duyệt');
                                  for ($i=0; $i < 2 ; $i++) { 
                                    if ($value['trangthai']==$i) {
                                      ?>
                                    <option value="<?php echo $i; ?>"selected><?php echo $duyet[$i]; ?></option>
                                    <?php  
                                    }
                                    else {
                                      ?>
                                        <option value="<?php echo $i; ?>"><?php echo $duyet[$i]; ?></option>
                                     <?php

                                    }
                                  }
                               ?> 
                            </select>
                        </div>
                        <div class="btn-them" >
                            <button style="margin-top: 10px;" type="submit" name="ok" onclick="return confirm('Bạn có chắc chắn muốn duyệt bình luận này?');" class="btn-primary">Cập nhật</button>
                        </div>
                    </form>
                  </td>
                  <td>
                     <form class="quanly"> 
                      <li><a href="index.php?action=xoabl&id_bl=<?php echo $value['id_bl'];?> "onclick="return confirm('Bạn chắc chắn muốn xóa bình luận trên?');"><i class="glyphicon glyphicon-trash"></i></a></li>
                      </form>
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
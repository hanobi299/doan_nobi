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
    <?php if (isset($_SESSION['success'])) :?>
				    	<?= $myMessage= addslashes($_SESSION["success"]);
                        echo "<script type='text/javascript'>alert('$myMessage');</script>"; ?>
				     <?php endif ; unset($_SESSION['success']) ?>


					 <?php if (isset($_SESSION['fail'])) :?>
				    	<?= $myMessage= addslashes($_SESSION["fail"]);
                        echo "<script type='text/javascript'>alert('$myMessage');</script>"; ?>
				     <?php endif ; unset($_SESSION['fail']) ?>	
	          <div class="nd">
            <h1>Danh sách nhãn hiệu</h1>
            <a href="index.php?action=themnh">Thêm Nhãn Hiệu</a>
            <table class="table table-striped">
              <thead>
                <tr class="th">
                  <th>STT</th>
                  <th>id Nhãn Hiệu</th>
                  <th>Tên Nhãn Hiệu</th>
                  <th>SDT</th>
                  <th>Địa Chỉ</th>
                  <th>Ghi Chú</th>
                  <th>Thao tác</th>
                </tr>
              </thead>
              <tbody>
                <?php

                $i=1;
                foreach ($ketqua2 as  $value) {    
                  ?>
                  <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $value['id_brand']; ?></td>
                    <td><?php echo $value['name_brand']; ?></td>
                      <td><?php echo $value['SDT'];  ?></td>
                       <td><?php echo $value['Diachi'];  ?></td>
                      <td><?php echo $value['mota'];  ?></td>
                  <td>
                   <?php
                     if (isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung'])==1){
                     ?>
                     <form class="quanly"> 
                      <li><a href="index.php?action=suanhan&id_brand=<?php echo $value['id_brand'];?>  "onclick="return confirm('Bạn có chắc chắn muốn sửa nhãn hiệu này?');"><i class="glyphicon glyphicon-edit"></i></a></li>
                      
                      <li><a href="index.php?action=xoanhan&id_brand=<?php echo $value['id_brand'];?> "onclick="return confirm('Bạn chắc chắn muốn xóa nhãn hiệu trên?');"><i class="glyphicon glyphicon-trash"></i></a></li>
                      </form>
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
<?php } ?>
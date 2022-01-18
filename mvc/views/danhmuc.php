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
            <h1>Danh sách danh mục</h1> <a href="index.php?action=themdm">Thêm danh mục</a>
            <table class="table table-striped">
              <thead>
                <tr class="th">
                  <th>STT</th>
                  <th>id danh mục</th>
                  <th>Tên danh mục</th>
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
                      <td><?php echo $value['id_dm']; ?></td>
                      <td><?php echo $value['ten_dm']; ?></td>
                      <td>
                     <?php
                       if (isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung'])==1){
                       ?>
                       <form class="quanly"> 
                        <li><a href="index.php?action=suadanhmuc&id_dm=<?php echo $value['id_dm'];?> "onclick="return confirm('Bạn có chắc chắn muốn sửa danh mục này?'); "><i class="glyphicon glyphicon-edit"></i></a></li>
                        
                        <li><a href="index.php?action=xoadm&id_dm=<?php echo $value['id_dm'];?> "onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này?');"><i class="glyphicon glyphicon-trash"></i></a></li>
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
<?php }  ?>
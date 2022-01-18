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
  			echo ' alert("Thao tác thành công !")';  //not showing an alert box.
  			echo '</script>';;
        }
    ?>
		<?php 
        if(isset($_GET['message']) && $_GET['message'] == 'fail' )
        {
            echo '<script type="text/javascript">';
  			echo ' alert("Thao tác thất bài. Xin hãy kiểm tra lại !")';  //not showing an alert box.
  			echo '</script>';;
        }
    ?>
	        <div class="nd">
	        	<h1>Danh sách tổng có <?php echo count($slide);  ?> banner<a href="index.php?action=addslide"> ADD </h1></p>
					
	        	<table class="table table-striped">
	        		<thead>
	        		<tr>
	        			<th>STT</th>
	        			<th>Hình ảnh</th>
                        <th>Tiêu đề</th>
	        			<th>Thao Tác</th>
	        		</tr>
	        		</thead>
	        		<tbody>
	        			<?php 
	        				$i=1;
	        				foreach ($slide as $value) {
	        			  ?>
	        			 	<tr>
	        			 		<td><?php echo $i++; ?></td>
	      	        			 <td><?php echo '<img style="width:300px;height:100px" src="uploads/'.$value['image'].'">' ?></td>
	        			 		<td><?php echo $value['tieude']; ?></td>
	        			 		<td>
	        			 		<?php
	        			 		 if (isset($_SESSION['tennguoidung'])and($_SESSION['quyennguoidung'])==1){
	        			 		 ?>
	        			 		 <form class="quanly">	
									<li><a href="index.php?action=editslide&id=<?php echo $value['id_banner'];?> "onclick="return confirm('Bạn có chắc chắn muốn sửa Slide này?'); "><i class="glyphicon glyphicon-edit"></i></a></li>
									<li><a href="index.php?action=deleteslide&id=<?php echo $value['id_banner'];?>" onclick="return confirm('Bạn có chắc chắn muốn xóa slide này?');"><i class="glyphicon glyphicon-trash"></i></a></li>
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
              </div>	
	        </div>
	        <div class="clear">
        	</div>
        </div>
    </div>
</body>
<?php include('mvc/includes/admin/footer.php') ?>
</html>

<?php }  ?>
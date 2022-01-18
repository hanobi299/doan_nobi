<?php
if (isset($_POST['nutdx'])) {
	session_unset();
}
?>
<?php include('mvc/includes/customer/hearder.php') ?>
			<div class="box clearfix">
			  <div class="container">
				</div>
				    <?php if (isset($_SESSION['success'])) :?>  
				    	<p class="text-danger"><?= $_SESSION['success'] ?></p>
				     <?php endif ; unset($_SESSION['success']) ?>
					<div class="sp">
						<h1 style="text-align: center;color: red; font-size: 64px;margin-left: -6%;">COME SOON</h1>
						<img style="margin-left: 40%" src="anh/anim-circ-preloader.gif">
		
				</div>
			</div>
	

<?php include('includes/customer/footer.php') ?>
	
	
	
</body>
</html>
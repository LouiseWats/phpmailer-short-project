<?php
	if(ISSET($_SESSION['status'])){
		if($_SESSION['status'] == "ok"){
	?>
		<div class="alert alert-info"><?php echo $_SESSION['result']?></div>
		<?php
			}else{
		?>
			<div class="alert alert-danger"><?php echo $_SESSION['result']?></div>
		<?php
		}
 
		unset($_SESSION['result']);
		unset($_SESSION['status']);
		}
?>
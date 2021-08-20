<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		
		<!-- Bootstrap -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">	

	</head>
<body>
	<div class="row">
		<div class="col-lg-12 center-form">
			<h3 class="heading">PHPMailer - send mail to Gmail account</h3>
			<hr>
			<form method="POST" action="sendmsg.php">
				<div class="form-group col-lg-6">
					<label>Name</label>
					<input type="text" name="name" class="form-control" maxlength="30" required="required">
				</div>
				<div class="form-group col-lg-6">
					<label>Email:</label>
					<input type="email" class="form-control" name="email" maxlength="30" required="required"/>
				</div>
				<div class="form-group col-lg-6">
					<label>Subject</label>
					<input type="text" class="form-control" name="subject" maxlength="30" required="required"/>
				</div>
				<div class="form-group col-lg-6">
					<label>Message</label>
					<input type="text" class="form-control" id="message" name="message" maxlength="100" style="height:120px;" required="required"/>
				</div>
				<div class="form-group col-lg-6">
					<button name="send" class="btn btn-primary"><span class="glyphicon glyphicon-envelope"></span>Send</button>
				</div>
			</form>
	</div>
	</div>
			<br />
			<?php require_once 'statusmsg.php';?>

		</div>
	</div>
</body>
</html>
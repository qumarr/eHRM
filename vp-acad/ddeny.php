<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VP Academics</title>
	<link rel="shortcut icon" href="../hrlogo.png">
    <!-- Bootstrap -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<?php include("background_print.php");?>
  </head>
  <body>
<?php
include('../conn.php');
mysql_query("UPDATE travel_ordr SET vp_acad='3' where to_id='$_GET[id]'");

echo'<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">
						×</button>
					<span class="glyphicon glyphicon-remove"></span> <strong>Done!</strong>
					<hr class="message-inner-separator">
					<p><strong> Travel Order Denied!</strong></p>
					<br>
					<div class="col-md-offset-9">
						<a href="to_approval_deny.php"><button type="button" class="btn btn-danger">Continue</button></a>
					</div>
				</div>
			</div>
		</div>
	</div>';
?>
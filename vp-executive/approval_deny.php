<?php 
	include ('menu.php');
?>	
	<link rel="shortcut icon" href="../hrlogo.png">		
		<div class="container-fluid">
				<div class = "row" style = "margin-top:50px">	
					<div class = "col-md-4">
						<ul class="nav nav-tabs">
						  <li role="presentation"><a href="view-emp-pending.php">Pending</a></li>
						  <li role="presentation" ><a href="approval_approve.php">Approve</a></li>
						  <li role="presentation" class="active"><a href="approval_deny.php">Deny</a></li>
						</ul>
					</div>
					<div class = "col-md-3">
						<h1>Sick Leave</h1>
					</div>
				</div>
				<?php include("background_print.php");?>
<div class="container-fluid">
	<div class = "row">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="table-responsive">
					<?php
						//diri is icall ya ang tatlo ka table then iview nia lng ang mai 2 nga data sa table w/c is approve 
						$sql = "SELECT * FROM employee, leaves, department, executive
									WHERE employee.emp_id = leaves.emp_id AND employee.id_dept = department.id_dept AND leaves.exe_vp = executive.exe_vp
									AND executive.exe_vp = '3'";
						$qry=mysql_query($sql);
					?>
						<table class='table table-hover' style='margin-top:10px;'>
									<thead>
										<tr>
											<th>Employee ID</th>
											<th>Department</th>
											<th>First Name</th>
											<th>Last Name</th>
											<th>Filed Date</th>
											
											<th>Status</th>
											<th></th>
										</tr>
									</thead>
					<?php
						while($rec=mysql_fetch_array($qry))
						{
					?>
					<tbody>
						<tr>
								<td>
									<?php echo $rec['id_emp']; ?>
								</td>
								<td>
									<?php echo $rec['depart_name']; ?>
								</td>
								<td>
									<?php echo $rec['emp_fname']; ?>
								</td>
								<td>
									<?php echo $rec['emp_lname']; ?>
								</td>
								<td>
									<?php echo $rec['date']; ?>
								</td>
								
								<td>
									<?php echo $rec['name_stat_exe']; ?>
								</td>
								<td>
									<a href="leave_deny_approve.php?id=<?php echo $rec['leaveid'];?>"><input type='button' value='View' data-toggle="tooltip" data-placement="top" title="View Content" class='btn btn-info'/></a>
								</td>
							</tr>
					</tbody>
				<?php
					}
					echo"</table>";
				?>
				</div>
			</div>
		</div>
	</div>
</div>
	</div>
	<?php include('footer.php'); ?>
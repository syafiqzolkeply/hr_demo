<?php
require('NavBar.php');
include_once('viewEmployeeSQL.php');
$employee = getEmployees();
?>
<div class="container pb-5">
	<main role="main" class="pb-3">
		<h2>List of Employees</h2><br>
	</main>
</div>
<div class="row">
	<div class="col-11">
		<table class="table table-striped">
			<thead class="table-dark">
				<td>Employee ID</td>
				<td>Employee Name</td>
				<td>Job Title</td>
				<td>Department</td>
				<td>Location</td>
				<td>Country</td>
				<td>Action</td>
			</thead>
			<?php for ($i = 0; $i < count($employee); $i++) : ?>
				<tr>
					<td><?php echo $employee[$i]['employee_id'] ?></td>
					<td><?php echo $employee[$i]['Name'] ?></td>
					<td><?php echo $employee[$i]['job_title'] ?></td>
					<td><?php echo $employee[$i]['department_name'] ?></td>
					<td><?php echo $employee[$i]['Location'] ?></td>
					<td><?php echo $employee[$i]['country_name'] ?></td>
					<td><a href="updateEmployee.php?emp_id=<?php echo $employee[$i]['employee_id']; ?>">Update</a></td>					
				</tr>
			<?php endfor; ?>
		</table>
	</div>
</div>

<?php require('Footer.php'); ?>
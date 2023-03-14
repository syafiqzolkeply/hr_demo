<?php
require('NavBar.php');
?>
<div class="container pb-5">
    <main role="main" class="pb-3">
        <h2>New Employee Form</h2><br>
    </main>
</div>
<div class="row">
    <div class="col-6">
        <form method="post" action="createEmployeeSQL.php">
            <div class="form-group col-md-6">
                <label class="control-label labelFont">First Name</label>
                <input class="form-control" type="text" name="first_name" required>
            </div>

            <div class="form-group col-md-6">
                <label class="control-label labelFont">Last Name</label>
                <input class="form-control" type="text" name="last_name" required>
            </div>

            <div class="form-group col-md-6">
                <label class="control-label labelFont">Email</label>
                <input class="form-control" type="email" name="email" required>
            </div>

            <div class="form-group col-md-6">
                <label class="control-label labelFont">Phone Number</label>
                <input class="form-control" type="text" name="phone_number" required>
            </div>
            <div class="form-group col-md-6">
                <label class="control-label labelFont">Hire Date</label>
                <input class="form-control" type="date" name="hire_date" required>
            </div>
            <div class="form-group col-md-4">
                <?php include_once('dd_list/jobs.php'); ?>
            </div>
            <div class="form-group col-md-6">
                <label class="control-label labelFont">Salary</label>
                <input class="form-control" type="text" name="salary" required>
            </div>
            <div class="form-group col-md-4">
                <?php include_once('dd_list/manager.php'); ?>
            </div>
            <div class="form-group col-md-4">
                <?php include_once('dd_list/department.php'); ?>
            <div class="form-group col-md-4">
                <input class="btn btn-primary" type="submit" value="Submit" name="submit">
            </div>
        </form>
    </div>
</div>
</main>
<?php //require('Footer.php'); 
?>
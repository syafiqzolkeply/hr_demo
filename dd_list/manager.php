<?php
include("./db_conn.php");
?>
<label class="control-label labelFont">Manager / Department / Job Title</label>
<select name="manager_id" class="form-control" style="width: 50px !important; min-width: 450px; max-width: 450px;">
    <option value="">- Select one -</option>
    <?php
    // To view the manager's names only.
    $query = "SELECT sup.employee_id, CONCAT(sup.first_name,' ',sup.last_name) AS Manager 
              FROM employees sub 
              JOIN employees sup ON sub.manager_id = sup.employee_id 
              GROUP BY sup.employee_id, sup.first_name, sup.last_name;";

    // to view manager's names with their associated department.
    $query2 = "SELECT sup.employee_id, CONCAT(sup.first_name,' ',sup.last_name,' - ', dept.department_name,' Department ') AS Manager 
               FROM employees sub 
               JOIN employees sup ON sub.manager_id = sup.employee_id 
               JOIN departments dept ON dept.department_id = sup.department_id 
               GROUP BY sup.employee_id, sup.first_name, sup.last_name, dept.department_name";
    // to view manager's name with their associated deparment and job title.
    $query3 = "SELECT sup.employee_id, CONCAT(sup.first_name,' ',sup.last_name,' - ', dept.department_name,' Department ', ' - ', jobs.job_title) AS Manager 
               FROM employees sub 
               JOIN employees sup ON sub.manager_id = sup.employee_id 
               JOIN departments dept ON dept.department_id = sup.department_id
               JOIN jobs ON sup.job_id = jobs.job_id
               GROUP BY sup.employee_id, sup.first_name, sup.last_name, sup.department_id, dept.department_name, jobs.job_title";

    $result = $conn->query($query2);
    if ($result->num_rows > 0) {
        while ($optionData = $result->fetch_assoc()) {
            $option = $optionData['Manager'];
            $id = $optionData['employee_id'];
    ?>
            <option value="<?php echo $id; ?>"><?php echo $option; ?> </option>
    <?php
        }
    }
    ?>
</select>
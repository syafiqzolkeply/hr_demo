<?php
include("./db_conn.php");
?>
<label class="control-label labelFont">Department</label>
<select name="department_id" class="form-control">
    <option value="">- Select one -</option>
    <?php
    $query = "select department_id, department_name from departments;";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        while ($optionData = $result->fetch_assoc()) {
            $option = $optionData['department_name'];
            $id = $optionData['department_id'];
    ?>
            <option value="<?php echo $id; ?>"><?php echo $option; ?> </option>
    <?php
        }
    }
    ?>
</select>
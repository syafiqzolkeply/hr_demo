<?php
include("./db_conn.php");
?>
<label class="control-label labelFont">Job Title</label>
<select name="job_id" class="form-control">
    <option value="">- Select one -</option>
    <?php
    $query = "select job_id, job_title from jobs";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        while ($optionData = $result->fetch_assoc()) {
            $option = $optionData['job_title'];
            $id = $optionData['job_id'];
    ?>
            <option value="<?php echo $id; ?>"><?php echo $option; ?> </option>
    <?php
        }
    }
    ?>
</select>
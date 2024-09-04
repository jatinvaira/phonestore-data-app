<!-- php/add_manager_form.php -->

<form action="php/process.php" method="post">
    <label for="employee_ID">Employee ID:</label>
    <input type="text" id="employee_ID" name="employee_ID" required>

    <input type="hidden" name="action" value="add_manager">
    <input type="submit" value="Add Manager">
</form>

<!-- php/add_plan_details_form.php -->

<form action="php/process.php" method="post">
    <label for="data_limit">Data Limit:</label>
    <input type="text" id="data_limit" name="data_limit" required>

    <label for="minutes_limit">Minutes Limit:</label>
    <input type="text" id="minutes_limit" name="minutes_limit" required>

    <label for="sms_limit">SMS Limit:</label>
    <input type="text" id="sms_limit" name="sms_limit" required>

    <input type="hidden" name="action" value="add_plan_details">
    <input type="submit" value="Add Plan Details">
</form>

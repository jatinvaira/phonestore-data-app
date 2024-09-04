<!-- php/add_sale_device_form.php -->

<form action="php/process.php" method="post">
    <label for="sale_ID">Sale ID:</label>
    <input type="text" id="sale_ID" name="sale_ID" required>

    <label for="device_ID">Device ID:</label>
    <input type="text" id="device_ID" name="device_ID" required>

    <label for="Plan_ID">Plan ID:</label>
    <input type="text" id="Plan_ID" name="Plan_ID" required>

    <input type="hidden" name="action" value="add_sale_device">
    <input type="submit" value="Add Sale Device">
</form>

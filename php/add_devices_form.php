<!-- php/add_device_form.php -->

<form action="php/process.php" method="post">
    <label for="device_name">Device Name:</label>
    <input type="text" id="device_name" name="device_name" required>

    <label for="brand">Brand:</label>
    <input type="text" id="brand" name="brand" required>

    <label for="model">Model:</label>
    <input type="text" id="model" name="model" required>

    <label for="manufacturer">Manufacturer:</label>
    <input type="text" id="manufacturer" name="manufacturer" required>

    <input type="hidden" name="action" value="add_device">
    <input type="submit" value="Add Device">
</form>

<!-- php/add_device_details_form.php -->

<form action="php/process.php" method="post">
    <label for="device_ID">Device ID:</label>
    <input type="text" id="device_ID" name="device_ID" required>

    <label for="price">Price:</label>
    <input type="text" id="price" name="price" required>

    <label for="warranty_information">Warranty Information:</label>
    <input type="text" id="warranty_information" name="warranty_information" required>

    <label for="technical_specifications">Technical Specifications:</label>
    <textarea id="technical_specifications" name="technical_specifications" required></textarea>

    <input type="hidden" name="action" value="add_device_details">
    <input type="submit" value="Add Device Details">
</form>

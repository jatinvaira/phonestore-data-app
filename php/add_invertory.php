<!-- php/add_inventory_form.php -->

<form action="php/process.php" method="post">
    <label for="device_ID">Device ID:</label>
    <input type="text" id="device_ID" name="device_ID" required>

    <label for="quantity">Quantity:</label>
    <input type="text" id="quantity" name="quantity" required>

    <label for="purchase_Date">Purchase Date:</label>
    <input type="date" id="purchase_Date" name="purchase_Date" required>

    <label for="cost_per_Unit">Cost Per Unit:</label>
    <input type="text" id="cost_per_Unit" name="cost_per_Unit" required>

    <label for="supplier_ID">Supplier ID:</label>
    <input type="text" id="supplier_ID" name="supplier_ID" required>

    <input type="hidden" name="action" value="add_inventory">
    <input type="submit" value="Add Inventory">
</form>

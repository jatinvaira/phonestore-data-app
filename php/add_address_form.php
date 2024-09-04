<!-- php/add_address_form.php -->

<form action="php/process.php" method="post">
    <label for="address">Address:</label>
    <input type="text" id="address" name="address" required>

    <label for="customer_ID">Customer ID:</label>
    <input type="text" id="customer_ID" name="customer_ID" required>

    <input type="hidden" name="action" value="add_address">
    <input type="submit" value="Add Address">
</form>

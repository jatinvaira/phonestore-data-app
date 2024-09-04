<!-- php/add_supplier_form.php -->

<form action="php/process.php" method="post">
    <label for="supplier_information">Supplier Information:</label>
    <input type="text" id="supplier_information" name="supplier_information" required>

    <input type="hidden" name="action" value="add_supplier">
    <input type="submit" value="Add Supplier">
</form>

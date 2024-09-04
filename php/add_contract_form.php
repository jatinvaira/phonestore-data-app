<!-- php/add_contract_form.php -->

<form action="php/process.php" method="post">
    <label for="contract_Duration">Contract Duration:</label>
    <input type="text" id="contract_Duration" name="contract_Duration" required>

    <input type="hidden" name="action" value="add_contract">
    <input type="submit" value="Add Contract">
</form>

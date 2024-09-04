<!-- php/add_store_branch_form.php -->

<form action="php/process.php" method="post">
    <label for="branch_name">Branch Name:</label>
    <input type="text" id="branch_name" name="branch_name" required>

    <label for="location">Location:</label>
    <input type="text" id="location" name="location" required>

    <label for="contact_number">Contact Number:</label>
    <input type="text" id="contact_number" name="contact_number" required>

    <label for="manager_ID">Manager ID:</label>
    <input type="text" id="manager_ID" name="manager_ID" required>

    <input type="hidden" name="action" value="add_store_branch">
    <input type="submit" value="Add Store Branch">
</form>

    <!-- php/add_employee_form.php -->

<form action="php/process.php" method="post">
    <label for="first_name">First Name:</label>
    <input type="text" id="first_name" name="first_name" required>

    <label for="last_name">Last Name:</label>
    <input type="text" id="last_name" name="last_name" required>

    <label for="contact_number">Contact Number:</label>
    <input type="text" id="contact_number" name="contact_number" required>

    <label for="email_address">Email Address:</label>
    <input type="email" id="email_address" name="email_address" required>

    <label for="position">Position:</label>
    <input type="text" id="position" name="position" required>

    <label for="salary">Salary:</label>
    <input type="text" id="salary" name="salary" required>

    <label for="date_of_joining">Date of Joining:</label>
    <input type="date" id="date_of_joining" name="date_of_joining" required>

    <label for="branch_ID">Branch ID:</label>
    <input type="text" id="branch_ID" name="branch_ID" required>

    <input type="hidden" name="action" value="add_employee">
    <input type="submit" value="Add Employee">
</form>

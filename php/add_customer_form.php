<!-- php/add_customer_form.php -->

<form action="php/process.php" method="post">
    <label for="first_name">First Name:</label>
    <input type="text" id="first_name" name="first_name" required>

    <label for="last_name">Last Name:</label>
    <input type="text" id="last_name" name="last_name" required>

    <label for="contact_number">Contact Number:</label>
    <input type="text" id="contact_number" name="contact_number" required>

    <label for="email_address">Email Address:</label>
    <input type="email" id="email_address" name="email_address" required>

    <label for="date_of_birth">Date of Birth:</label>
    <input type="date" id="date_of_birth" name="date_of_birth" required>

    <label for="gender">Gender:</label>
    <select id="gender" name="gender" required>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select>

    <input type="hidden" name="action" value="add_customer">
    <input type="submit" value="Add Customer">
</form>

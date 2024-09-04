<!-- php/add_sale_form.php -->

<form action="php/process.php" method="post">
    <label for="customer_ID">Customer ID:</label>
    <input type="text" id="customer_ID" name="customer_ID" required>

    <label for="employee_ID">Employee ID:</label>
    <input type="text" id="employee_ID" name="employee_ID" required>

    <label for="device_ID">Device ID:</label>
    <input type="text" id="device_ID" name="device_ID" required>

    <label for="plan_ID">Plan ID:</label>
    <input type="text" id="plan_ID" name="plan_ID" required>

    <label for="sale_Date">Sale Date:</label>
    <input type="date" id="sale_Date" name="sale_Date" required>

    <label for="total_Price">Total Price:</label>
    <input type="text" id="total_Price" name="total_Price" required>

    <label for="payment_Method">Payment Method:</label>
    <input type="text" id="payment_Method" name="payment_Method" required>

    <label for="contract_ID">Contract ID:</label>
    <input type="text" id="contract_ID" name="contract_ID" required>

    <input type="hidden" name="action" value="add_sale">
    <input type="submit" value="Add Sale">
</form>

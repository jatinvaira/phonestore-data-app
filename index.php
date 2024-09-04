<!-- index.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhoneStore</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <h1>ADMIN</h1>

    <!-- Display Customer Data -->
    <section id="customer-section">
        <h2>Customer Data</h2>
        <?php include 'php/display_customers.php'; ?>
    </section>

    <!-- Input Form to Add a New Customer -->
    <section id="add-customer-section">
        <h2>Add a New Customer</h2>
        <?php include 'php/add_customer_form.php'; ?>
    </section>

    <!-- Display Employee Data -->
    <section id="employee-section">
        <h2>Employee Data</h2>
        <?php include 'php/display_employees.php'; ?>
    </section>

    <!-- Input Form to Add a New Employee -->
    <section id="add-employee-section">
        <h2>Add a New Employee</h2>
        <?php include 'php/add_employees_form.php'; ?>
    </section>

    <!-- Display Device Data -->
    <section id="device-section">
        <h2>Device Data</h2>
        <?php include 'php/display_devices.php'; ?>
    </section>

    <!-- Input Form to Add a New Device -->
    <section id="add-device-section">
        <h2>Add a New Device</h2>
        <?php include 'php/add_devices_form.php'; ?>
    </section>

    <!-- Repeat similar sections for other tables (Inventory, Plan, Sale, Store_Branch, etc.) -->

    <script src="js/main.js"></script>
</body>
</html>

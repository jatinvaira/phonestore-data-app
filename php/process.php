<!-- php/process.php -->

<?php
include 'crud.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'];

    switch ($action) {
        case 'add_customer':
            addCustomer($_POST);
            break;
        case 'add_employee':
            addEmployee($_POST);
            break;
        case 'add_device':
            addDevice($_POST);
            break;
        case 'add_inventory':
            addInventory($_POST);
            break;
        case 'add_plan':
            addPlan($_POST);
            break;
        case 'add_sale':
            addSale($_POST);
            break;
        case 'add_store_branch':
            addStoreBranch($_POST);
            break;
        case 'add_manager':
            addManager($_POST);
            break;
        case 'add_contract':
            addContract($_POST);
            break;
        case 'add_address':
            addAddress($_POST);
            break;
        case 'add_device_details':
            addDeviceDetails($_POST);
            break;
        case 'add_supplier':
            addSupplier($_POST);
            break;
        case 'add_plan_details':
            addPlanDetails($_POST);
            break;
        case 'add_sale_device':
            addSaleDevice($_POST);
            break;
        // Add similar cases for other actions
    }
}
?>

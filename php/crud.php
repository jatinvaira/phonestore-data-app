
<?php
include 'db.php';

if (!function_exists('addAddress')) {
    function addAddress($data) {
        global $conn;
        $query = "INSERT INTO `Address` (`Address`, `customer_ID`) VALUES (?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("si", $data['Address'], $data['customer_ID']);
        $stmt->execute();
        $stmt->close();
    }
}

if (!function_exists('addContract')) {
    function addContract($data) {
        global $conn;
        $query = "INSERT INTO `Contract` (`Contract_Duration`) VALUES (?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $data['Contract_Duration']);
        $stmt->execute();
        $stmt->close();
    }
}

if (!function_exists('addCustomer')) {
    function addCustomer($data) {
        global $conn;
        $query = "INSERT INTO `Customer` (`first_name`, `last_name`, `contact_number`, `email_address`, `date_of_birth`, `gender`) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssssss", $data['first_name'], $data['last_name'], $data['contact_number'], $data['email_address'], $data['date_of_birth'], $data['gender']);
        $stmt->execute();
        $stmt->close();
    }
}

if (!function_exists('addDevice')) {
    function addDevice($data) {
        global $conn;
        $query = "INSERT INTO `Device` (`device_name`, `brand`, `model`, `manufacturer`) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssss", $data['device_name'], $data['brand'], $data['model'], $data['manufacturer']);
        $stmt->execute();
        $stmt->close();
    }
}

if (!function_exists('addDeviceDetails')) {
    function addDeviceDetails($data) {
        global $conn;
        $query = "INSERT INTO `Device_Details` (`device_ID`, `price`, `warranty_information`, `technical_specifications`) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ids", $data['device_ID'], $data['price'], $data['warranty_information'], $data['technical_specifications']);
        $stmt->execute();
        $stmt->close();
    }
}

if (!function_exists('addEmployee')) {
    function addEmployee($data) {
        global $conn;
        $query = "INSERT INTO `Employee` (`first_name`, `last_name`, `contact_number`, `email_address`, `position`, `salary`, `date_of_joining`, `branch_ID`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sssssdss", $data['first_name'], $data['last_name'], $data['contact_number'], $data['email_address'], $data['position'], $data['salary'], $data['date_of_joining'], $data['branch_ID']);
        $stmt->execute();
        $stmt->close();
    }
}

if (!function_exists('addInventory')) {
    function addInventory($data) {
        global $conn;
        $query = "INSERT INTO `Inventory` (`device_ID`, `quantity`, `purchase_Date`, `cost_per_Unit`, `supplier_ID`) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("iisdi", $data['device_ID'], $data['quantity'], $data['purchase_Date'], $data['cost_per_Unit'], $data['supplier_ID']);
        $stmt->execute();
        $stmt->close();
    }
}

if (!function_exists('addManager')) {
    function addManager($data) {
        global $conn;
        $query = "INSERT INTO `Manager` (`Employee_ID`) VALUES (?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $data['Employee_ID']);
        $stmt->execute();
        $stmt->close();
    }
}

if (!function_exists('addPlanDetails')) {
    function addPlanDetails($data) {
        global $conn;
        $query = "INSERT INTO `Plan_Details` (`plan_ID`, `data_limit`, `minutes_limit`, `sms_limit`) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("iiii", $data['plan_ID'], $data['data_limit'], $data['minutes_limit'], $data['sms_limit']);
        $stmt->execute();
        $stmt->close();
    }
}

if (!function_exists('addSaleDevices')) {
    function addSaleDevices($data) {
        global $conn;
        $query = "INSERT INTO `Sale_Device` (`sale_ID`, `device_ID`, `Plan_ID`) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("iii", $data['sale_ID'], $data['device_ID'], $data['Plan_ID']);
        $stmt->execute();
        $stmt->close();
    }
}

if (!function_exists('addSale')) {
    function addSale($data) {
        global $conn;
        $query = "INSERT INTO `Sale` (`Customer_ID`, `Employee_ID`, `Device_ID`, `Plan_ID`, `Sale_Date`, `Total_Price`, `Payment_Method`, `Contract_ID`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("iiisdsii", $data['Customer_ID'], $data['Employee_ID'], $data['Device_ID'], $data['Plan_ID'], $data['Sale_Date'], $data['Total_Price'], $data['Payment_Method'], $data['Contract_ID']);
        $stmt->execute();
        $stmt->close();
    }
}

if (!function_exists('addStoreBranch')) {
    function addStoreBranch($data) {
        global $conn;
        $query = "INSERT INTO `Store_Branch` (`branch_name`, `location`, `contact_number`, `manager_ID`) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sssi", $data['branch_name'], $data['location'], $data['contact_number'], $data['manager_ID']);
        $stmt->execute();
        $stmt->close();
    }
}

if (!function_exists('addSupplier')) {
    function addSupplier($data) {
        global $conn;
        $query = "INSERT INTO `Supplier` (`supplier_information`) VALUES (?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $data['supplier_information']);
        $stmt->execute();
        $stmt->close();
    }
}

if (!function_exists('addPlan')) {
    function addPlan($data) {
        global $conn;
        $query = "INSERT INTO `Plan` (`Plan_Name`, `Description`, `Monthly_Cost`) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssd", $data['Plan_Name'], $data['Description'], $data['Monthly_Cost']);
        $stmt->execute();
        $stmt->close();
    }
}

// Add more functions for other tables if needed
?>

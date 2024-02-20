<?php
// Assuming you have a database connection established
include 'config.php';

// Fetch the latest data from each sensor table
$sqlSensor1 = "SELECT sensor_value FROM sensor_table1 ORDER BY timestamp DESC LIMIT  1";
$sqlSensor2 = "SELECT sensor_value FROM sensor_table2 ORDER BY timestamp DESC LIMIT  1";
$sqlSensor3 = "SELECT sensor_value FROM sensor_table3 ORDER BY timestamp DESC LIMIT  1";

// Execute the queries and fetch the results
$resultSensor1 = $conn->query($sqlSensor1);
$resultSensor2 = $conn->query($sqlSensor2);
$resultSensor3 = $conn->query($sqlSensor3);

// Check if there's a result for each sensor and fetch the data
$sensor1_value = $resultSensor1->num_rows >  0 ? $resultSensor1->fetch_assoc()['sensor_value'] : "No data";
$sensor2_value = $resultSensor2->num_rows >  0 ? $resultSensor2->fetch_assoc()['sensor_value'] : "No data";
$sensor3_value = $resultSensor3->num_rows >  0 ? $resultSensor3->fetch_assoc()['sensor_value'] : "No data";

// Update the final data variable with the sensor values
$final_data = [
    'sensor1' => $sensor1_value,
    'sensor2' => $sensor2_value,
    'sensor3' => $sensor3_value
];

// Close the database connection
$conn->close();
?>

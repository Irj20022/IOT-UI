<?php
include('config.php');

// SQL queries to fetch data from tables
$sql_phdata = "SELECT id, time, reading FROM phdata";
$sql_tdpdata = "SELECT id, time, reading FROM tdpdata";
$sql_tempdata = "SELECT id, time, temp FROM tempdata";

// Execute SQL queries and store the results
$result_phdata = $conn->query($sql_phdata);
$result_tdpdata = $conn->query($sql_tdpdata);
$result_tempdata = $conn->query($sql_tempdata);

// SQL queries to fetch data from tables and calculate averages
$sql_phdata_avg = "SELECT AVG(reading) as average FROM phdata";
$sql_tdpdata_avg = "SELECT AVG(reading) as average FROM tdpdata";
$sql_tempdata_avg = "SELECT AVG(temp) as average FROM tempdata";

// Execute SQL queries and store the results
$result_phdata_avg = $conn->query($sql_phdata_avg);
$result_tdpdata_avg = $conn->query($sql_tdpdata_avg);
$result_tempdata_avg = $conn->query($sql_tempdata_avg);


// Close the database connection
$conn->close();
?>


<html>
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" type="text/css" href="Style/Sensor.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </head>
    <body>
<!-- Sidebar begins -->
        <div class="sidebar">
          <div class="logo">
            <ul class="menu">
              <li class="active">
                <a href="Dashboard.php">
                  <i class="fas fa-home"></i>
                  <span>Home</span>
                </a>
              </li>
              <li>
                <a href="Sensor.php">
                  <i class="fas fa-tachometer-alt"></i>
                  <span>Sensors</span>
                </a>
              </li>
              <li>
                <a href="DataInput.php">
                  <i class="fas fa-download"></i>
                  <span>Data Input</span>
                </a>
              </li>
              <li>
                <a href="Tables.php">
                  <i class="fas fa-chart-bar"></i>
                  <span>Data Output</span>
                </a>
              </li>
              <li class="logout">
                <a href="Welcome.php">
                  <i class="fas fa-sign-out-alt"></i>
                  <span>Log Out</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
<!-- Sidebar ends -->
<!-- Main Content begins -->
   <div class="main-content">
          <div class="header-wrapper">
            <div class="header-title">
              <span>Sensors</span>
              <h2>Readings with Tables</h2>
            </div>
            <div class="user-info">
              <div class="search-box">
                <i class="fa-solid fa-search-alt"></i>
                <input type="text" placeholder="Search...">
              </div>
              <img src="/Images/bluett.jpg" alt="">
            </div>
            </div>
<!--First sensor card-->
<div class="tabular-wrapper">
  <h3 class="main-title">pH Data</h3>
  <div class="table-container">
      <table>
          <thead>
              <tr>
                  <th>Time</th>
                  <th>Readings</th>
              </tr>
          </thead>
          <tbody>
              <?php while($row = $result_phdata->fetch_assoc()): ?>
                  <tr>
                      <td><?php echo $row['time']; ?></td>
                      <td><?php echo $row['reading']; ?></td>
                  </tr>
              <?php endwhile; ?>
          </tbody>
      </table>
      <div class="sensor-card">
          <div class="card-header">
            <div class="ammount">
              <span class="title">
                Average
              </span>
              <span class="ammount-value">
                <?php
                    
                    $row_avg = $result_phdata_avg->fetch_assoc();
                    echo htmlspecialchars($row_avg['average']);
                    ?>
              </span>
            </div>
          </div>
        </div>
    </div>
</div>
<!--First sensor ends-->

<!--Second sensor card-->
<div class="tabular-wrapper">
    <h3 class="main-title">Turbidity Data</h3>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Time</th>
                    <th>Readings</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result_tdpdata->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['time']); ?></td>
                        <td><?php echo htmlspecialchars($row['reading']); ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <div class="sensor-card">
            <div class="card-header">
                <div class="ammount">
                    <span class="title">
                        Average
                    </span>
                    <span class="ammount-value">
                        <?php
                            $row_avg = $result_tdpdata_avg->fetch_assoc();
                            echo htmlspecialchars($row_avg['average']);?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Second sensor ends-->


<!--Third sensor card-->
<div class="tabular-wrapper">
    <h3 class="main-title">Temperature</h3>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Time</th>
                    <th>Readings</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result_tempdata->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['time']); ?></td>
                        <td><?php echo htmlspecialchars($row['temp']); ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <div class="sensor-card">
            <div class="card-header">
                <div class="ammount">
                    <span class="title">
                        Average
                    </span>
                    <span class="ammount-value">
                        <?php 
                            $row_avg = $result_tempdata_avg->fetch_assoc();
                            echo htmlspecialchars($row_avg['average']);
                            ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Third sensor ends-->


        </div>
<!-- Main content ends-->
  </body>
</html>
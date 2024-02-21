<?php
include 'config.php';
$query = "SELECT * FROM tank01";
$result = mysqli_query($conn, $query);

$query2 = "SELECT * FROM tank02";
$result2 = mysqli_query($conn, $query2);

$query3 = "SELECT * FROM tank03";
$result3 = mysqli_query($conn, $query3);

?>

<html>
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" type="text/css" href="Style/Tables.css">
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
              <span>Data Output</span>
              <h2>Turtle Data in Tanks</h2>
            </div>
            <div class="user-info">
              <div class="search-box">
                <i class="fa-solid fa-search-alt"></i>
                <input type="text" placeholder="Search...">
              </div>
              <img src="/Images/bluett.jpg" alt="">
            </div>
            </div>
<!--First table card-->
<div class="tabular-wrapper">
  <h3 class="main-title">Tank  01</h3>
  <div class="table-container">
      <table>
          <thead>
              <tr>
                  <th>Date</th>
                  <th>Number of Turtles</th>
              </tr>
          </thead>
          <tbody>
          <?php
          if (mysqli_num_rows($result) >  0) {
              // Output each row of data into the table
              while ($row = mysqli_fetch_assoc($result)) {
                  echo '<tr>';
                  echo '<td>' . $row["date"] . '</td>'; // Replace with actual column name
                  echo '<td>' . $row["numberOfTurtles"] . '</td>'; // Replace with actual column name
                  echo '</tr>';
              }
          } else {
              echo '<tr><td colspan="2">No data available</td></tr>';
          }
          ?>
          </tbody>
      </table>
  </div>
</div>
<!--First table ends-->
<!--Second table card-->
<div class="tabular-wrapper">
    <h3 class="main-title">Tank  02</h3>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Number of Turtles</th>
                </tr>
            </thead>
            <tbody>
            <?php
            if (mysqli_num_rows($result) >   0) {
                // Output each row of data into the table
                while ($row = mysqli_fetch_assoc($result2)) {
                    echo '<tr>';
                    echo '<td>' . $row["date"] . '</td>'; // Replace with actual column name
                    echo '<td>' . $row["numberOfTurtles"] . '</td>'; // Replace with actual column name
                    echo '</tr>';
                }
            } else {
                echo '<tr><td colspan="2">No data available</td></tr>';
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
<!--Second table ends-->

<div class="tabular-wrapper">
    <h3 class="main-title">Tank   03</h3>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Number of Turtles</th>
                </tr>
            </thead>
            <tbody>
            <?php
            if (mysqli_num_rows($result) >   0) {
                // Output each row of data into the table
                while ($row = mysqli_fetch_assoc($result3)) {
                    echo '<tr>';
                    echo '<td>' . $row["date"] . '</td>'; // Replace with actual column name
                    echo '<td>' . $row["numberOfTurtles"] . '</td>'; // Replace with actual column name
                    echo '</tr>';
                }
            } else {
                echo '<tr><td colspan="2">No data available</td></tr>';
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

        </div>
<!-- Main content ends-->
  </body>
</html>
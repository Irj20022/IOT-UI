<?php

include("config.php");

if(isset($_POST['tank1'])){
  // Check if the form data has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Collect the form data
  $date = $_POST["date"];
  $turtle = $_POST["turtle"];

  // Sanitize the input data
  $date = mysqli_real_escape_string($conn, $date);
  $turtle = mysqli_real_escape_string($conn, $turtle);

  // Construct the SQL query
  $sql = "INSERT INTO tank01 (date, numberOfTurtles) VALUES ('$date', '$turtle')";

  // Execute the query
  if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
}

if(isset($_POST['tank2'])){
  // Check if the form data has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Collect the form data
  $date = $_POST["date"];
  $turtle = $_POST["turtle"];

  // Sanitize the input data
  $date = mysqli_real_escape_string($conn, $date);
  $turtle = mysqli_real_escape_string($conn, $turtle);

  // Construct the SQL query
  $sql = "INSERT INTO tank02 (date, numberOfTurtles) VALUES ('$date', '$turtle')";

  // Execute the query
  if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
}

if(isset($_POST['tank3'])){
  // Check if the form data has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Collect the form data
  $date = $_POST["date"];
  $turtle = $_POST["turtle"];

  // Sanitize the input data
  $date = mysqli_real_escape_string($conn, $date);
  $turtle = mysqli_real_escape_string($conn, $turtle);

  // Construct the SQL query
  $sql = "INSERT INTO tank03 (date, numberOfTurtles) VALUES ('$date', '$turtle')";

  // Execute the query
  if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
}

// Close the connection
mysqli_close($conn);

?>


<html>
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" type="text/css" href="Style/DataI.css">
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
              <span>Data Input</span>
              <h2>Add Date and Turtles</h2>
            </div>
            <div class="user-info">
              <div class="search-box">
                <i class="fa-solid fa-search-alt"></i>
                <input type="text" placeholder="Search...">
              </div>
              <img src="/Images/bluett.jpg" alt="">
            </div>
        </div>
        <div class="card-container">
    <h1 class="main-title">Add Tank  01 Data</h1>
    <div class="card-wrapper">
        <div class="main-container">
            <form method="POST" action="DataInput.php">
                <input type="hidden" name="tank" value="tank01">
                <div class="input-box-1">
                    <label for="date" class="datename">Date</label>
                    <input type="date" id="date" name="date" class="datel">
                </div>
                <div class="input-box-2">
                    <label for="turtle" class="turtlename">Number of Turtles</label>
                    <input type="text" id="turtle" name="turtle" class="text">
                </div>
                <div class="button-wrapper">
                    <button type="submit" class="button-primary" name="tank1">Add</button>
                    <button type="reset" class="button-secondary" name="reset">Clear</button>
                </div>
            </form>
        </div>
    </div>
</div>

          <div class="card-container">
            <h1 class="main-title">Add Tank 02 Data</h1>
            <div class="card-wrapper">
                <div class="main-container">
                      <form>
                        <div class="input-box-1">
                          <label for="date" class="datename">Date</label>
                          <input type="date" id="date" name="date" class="datel">
                        </div>
                        <div class="input-box-2">
                          <label for="turtle" class="turtlename">Number of Turtles</label>
                          <input type="text" id="turtle" name="turtle" class="text">
                        </div>
                      <div class="button-wrapper">
                        <button type="button" class="button-primary" aria-label="Add" name="tank2">Add</button>
                        <button type="button" class="button-secondary" aria-label="Clear">Clear</button>
                      </div>
                    </form>
                  </div>
            </div>
          </div>
          <div class="card-container">
            <h1 class="main-title">Add Tank 03 Data</h1>
            <div class="card-wrapper">
                <div class="main-container">
                      <form>
                        <div class="input-box-1">
                          <label for="date" class="datename">Date</label>
                          <input type="date" id="date" name="date" class="datel">
                        </div>
                        <div class="input-box-2">
                          <label for="turtle" class="turtlename">Number of Turtles</label>
                          <input type="text" id="turtle" name="turtle" class="text">
                        </div>
                      <div class="button-wrapper">
                        <button type="button" class="button-primary" aria-label="Add" name="tank3">Add</button>
                        <button type="button" class="button-secondary" aria-label="Clear">Clear</button>
                      </div>
                    </form>
                  </div>
            </div>
          </div>
   </div>
<!-- Main content ends-->
  </body>
</html>
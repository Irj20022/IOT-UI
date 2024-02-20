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
            <h1 class="main-title">Add Tank 01 Data</h1>
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
                        <button type="button" class="button-primary" aria-label="Add">Add</button>
                        <button type="button" class="button-secondary" aria-label="Clear">Clear</button>
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
                        <button type="button" class="button-primary" aria-label="Add">Add</button>
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
                        <button type="button" class="button-primary" aria-label="Add">Add</button>
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
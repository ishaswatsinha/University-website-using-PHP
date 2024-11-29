<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <title>Admin Dashboard </title>
      <link rel="stylesheet" href="style.css" />
      <link rel="stylesheet" href="css/aprycot.min.css">
      <!-- Font Awesome Cdn Link -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    </head>
    <body>
      <div class="container">
        <nav class="main-menu">

        <?php include "aside.php" ?>
          
        
        </nav>
    
    
        <section class="main ">
          <div class="main-top">
            <h1>Attendance</h1>
            <i class="fas fa-user-cog"></i>
          </div>
          <div class="users att1">
            <div class="card">
              <img src="./pic/img4.png">
              <h4>Shaswat sinha</h4>
              <p>Developper</p>
              <div class="per">
                <table>
                  <tr>
                    <td><span>85%</span></td>
                    <td><span>87%</span></td>
                  </tr>
                  <tr>
                    <td>Month</td>
                    <td>Year</td>
                  </tr>
                </table>
              </div>
              <button>Profile</button>
            </div>
            <div class="card">
              <img src="./pic/img7.jpg">
              <h4>Satish Das</h4>
              <p>Progammer</p>
              <div class="per">
                <table>
                  <tr>
                    <td><span>82%</span></td>
                    <td><span>85%</span></td>
                  </tr>
                  <tr>
                    <td>Month</td>
                    <td>Year</td>
                  </tr>
                </table>
              </div>
              <button>Profile</button>
            </div>
            <div class="card">
              <img src="./pic/img3.jpg">
              <h4>Vivek Kumar Sah</h4>
              <p>tester</p>
              <div class="per">
                <table>
                  <tr>
                    <td><span>94%</span></td>
                    <td><span>92%</span></td>
                  </tr>
                  <tr>
                    <td>Month</td>
                    <td>Year</td>
                  </tr>
                </table>
              </div>
              <button>Profile</button>
            </div>
            <div class="card">
              <img src="./pic/img4.jpg">
              <h4>Reyansh Kumar</h4>
              <p>Ui designer</p>
              <div class="per">
                <table>
                  <tr>
                    <td><span>85%</span></td>
                    <td><span>82%</span></td>
                  </tr>
                  <tr>
                    <td>Month</td>
                    <td>Year</td>
                  </tr>
                </table>
              </div>
              <button>Profile</button>
            </div>


          </div>
    
         <section class="attendance">
            <div class="attendance-list">
              <h1>Attendance List</h1>
              <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Depart</th>
                    <th>Date</th>
                    <th>Join Time</th>
                    <th>Logout Time</th>
                    <th>Details</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>01</td>
                    <td>Shaswat Sinha</td>
                    <td>Design</td>
                    <td>03-24-22</td>
                    <td>8:00AM</td>
                    <td>3:00PM</td>
                    <td><button>View</button></td>
                  </tr>
                  <tr class="active">
                    <td>02</td>
                    <td>Satish Das</td>
                    <td>Coding</td>
                    <td>03-24-22</td>
                    <td>9:00AM</td>
                    <td>4:00PM</td>
                    <td><button>View</button></td>
                  </tr>
                  <tr>
                    <td>03</td>
                    <td>Vivek Kumar Sah</td>
                    <td>testing</td>
                    <td>03-24-22</td>
                    <td>8:00AM</td>
                    <td>3:00PM</td>
                    <td><button>View</button></td>
                  </tr>
                  <tr>
                    <td>04</td>
                    <td>Reyansh Kumar</td>
                    <td>Design</td>
                    <td>03-24-22</td>
                    <td>8:00AM</td>
                    <td>3:00PM</td>
                    <td><button>View</button></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </section> 
        </section>
      </div>
    <!-- ------------------------------------------------------------------------ -->
    <!-- Required Library Bundle Script -->
<script src="../assets/js/core/libs.min.js"></script>
    
<!-- External Library Bundle Script -->
<script src="../assets/js/core/external.min.js"></script>

<!-- Mapchart JavaScript -->
<script src="../assets/js/charts/dashboard.js"></script>

<!-- fslightbox JavaScript -->
<script src="../assets/js/fslightbox.js"></script>

<!-- app JavaScript -->
<script src="../assets/js/app.js"></script>

<!-- moment JavaScript -->
<script src="../assets/vendor/moment.min.js"></script> 
    </body>
    </html>
    </span>
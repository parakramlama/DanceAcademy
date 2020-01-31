<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title> Classes </title>
    <link href="dance2.css" rel="stylesheet" type="text/css" />
    <script src="jquery-3.2.1.js"></script>
  </head>
  <body>
    <div id="top">
      <a href="index.php"> <img src="images/logo.jpg" /></a> 
      <h1 id="head">HAPPY DANCE ACADEMY </h1> <br/>
    </div>

    <header>
      <nav>
        <ul>
          <li><a href="uniforms.php" >Add Uniforms</a> </li>
          <li><a href="uniformsdetails.php">Uniforms</a> </li>    
          <li><a href="membersdetails.php"> Members </a> </li>
          <li><a href="addstaffs.php"> Add Teachers </a> </li>
          <li><a href="staffs.php">Teachers</a> </li>
          <li><a href="bookingtable.php">Booking Data</a> </li>
          <li><a href="logout.php"> Log Out </a> </li>
        </ul>
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        <a> Follow us at:</a> 
        <a href="https://www.facebook.com/" target="blank"> 
        <img src="images/facebook.png" width="40" height="40" /> </a>
        <a href="https://www.instagram.com/" target="blank"> 
        <img src="images/instagram.jpg" width="40" height="40" /> </a>
      
      </nav>
       <!--<a href="#head" class="take-top"><img src="images/up-arrow.png" alt="box"></a> -->
    </header>
     
    <section id="posts">
      <div class="container-fluid mt-2">
        <div class="row">
          <div class="col-md-9">
            <div class="card">
              <div class="card-header">
                <h1>User Booked Details</h1>
              </div>
              <table class="table table-striped">
                <thead class="thead-inverse">
                  <table border="2" width="98%" align="center">
                    <tr>
                      <th>Your Name</th>
                      <th>Choose Venue</th>
                      <th>Booking Date</th>
                      <th>Number of people</th>
                    </tr>

                    <tbody>
                      
                      <?PHP
                        include 'connect.php' ;
                        $sql = 'SELECT * FROM booking';
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0){
                          while($row = mysqli_fetch_assoc($result)){
                            echo  '<tr>';
                            echo  '<td>'.$row["name"].'</td>';
                            echo  '<td>'.$row["venue"].'</td>';
                            echo  '<td>'.$row["date"].'</td>';
                            echo  '<td>'.$row["size"].'</td>';
                            echo '</tr>';  
                          }
                         }
                      ?>
                    </tbody>
                  </table>
                </thead>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>

          
    <footer>
      <div class="main-footer">
        <div class="firstdivision">
              <div class="foot-topic">Contact Us</div>
            <br> Dilli Bazar, Kathmandu
            <br>phn no:+4456789 <br>email:dance@gmail.com</div>
            
            <div class="clear">
        
            </div>  
        </div>
      <div class="secondfooter">
          Copyright &copy; 2020 HAPPY DANCE ACADEMY. All Rights Reserved.
        </div>
    </footer>
  </body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "maidbookapp";
$conn = new mysqli($servername, $username, $password, $dbname);

$location=$_GET['loc'];
$gender = $_GET['gen'];
$sal = $_GET['sal'];
$wkng = $_GET['whrs'];
$rel = $_GET['rel'];
$lan = $_GET['lan'];
if($sal != ''){
  $minsal = $sal-2000;
}else{
  $minsal = $sal;
}

if($wkng != ''){
  $minhrs = $wkng-3;
}else{
  $minhrs = $wkng;
}

$stmt = "SELECT * FROM registered WHERE area='$location' OR gender='$gender' OR salary BETWEEN '$minsal'AND '$sal' OR working BETWEEN '$minhrs' AND '$wkng' OR religion='$rel' OR languages='$lan'";
$result = $conn->query($stmt);

if(isset($_POST['submitFilter'])){
$loc = $_POST['location'];
$gen = $_POST['gender'];
$sal = $_POST['salary'];
$working = $_POST['workingHrs'];
$reli = $_POST['religion'];
$langu = $_POST['lang'];
header('location:filteredPage.php?loc='.$loc.'&gen='.$gen.'&sal='.$sal.'&whrs='.$working.'&rel='.$reli.'&lan='.$langu);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <title>Hire Maid Portal</title>
    <link rel="icon" href="../images/maidicon.ico">
    <link rel="stylesheet" href="../styles/hirePage.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

  <!-- Enquiry Box -->
  <div class="enquiryBlock float-right"  data-toggle="modal" data-target="#exampleModalCenter2" tabindex="0">
    <p class="text-center enquiryText">Enquiry Now</p>
  </div>

  <!-- Heading  -->
  <div class="pt-4 pb-4" id="heading">
    <div class="navbarlinks pb-5 text-center">
      <a class="nav-item" href="../templates/index.php">Home</a>
      <a class="nav-item" href="#">Help</a>
      <a class="nav-item" href="tel:9480727922">Contact Us</a>
    </div>
    <h1 class="headingH1 text-center">HIRE CANDIDATES</h1>
  </div>

  <!-- Search Result  -->
  <div class="container pt-4">
    <div class="row">
      <div class="col"><h3>showing 
        <?php  
          if($result->num_rows == 1){echo $result->num_rows.' result..';}
          else{echo ($result->num_rows).' results..';}
        ?>
        </h3>
      </div>
      <div class="col col-lg-2">
        <!-- Sort by  -->
        <select name="sortby" form="filter" class="custom-select custom-select-sm">
          <option selected disabled>SORT BY &downarrow;</option>
          <option value="sortSalary">Salary : Low to High</option>
          <option value="sortWork">Working Hours</option>
        </select>
      </div>
    </div>
  </div>

  <!-- content block  -->
    <div class="container mt-2 contentBlock">
      <div class="row">
        <!-- 1st column  -->
        <div class="col col-lg-3 mt-4 mr-5" id="leftcol">        
          <form action="#" method="POST" id="filter">
            <div id="selectLocation">
              <label for="location">Location</label>
              <input type="text" name="location" class="form-control" placeholder="Ex: Kengeri">
            </div>
            <br>

            <div id="selectGender">
              <label for="gender">Gender</label><br>
              <input type="radio" value="male" name="gender">
              <label id="maleLabel" for="male">Male</label><br>
              <input type="radio" value="female" name="gender">
              <label id="femaleLabel" for="female">Female</label>
            </div>
            <br>

            <div id="selectSalary">
              <label for="salary">Salary</label>
              <select name="salary" class="custom-select custom-select-sm mb-3">
                <option selected disabled>Select Salary Range</option>
                <option value="7000">5000-7000</option>
                <option value="9000">7000-9000</option>
                <option value="11000">9000-11000</option>
                <option value="14000">11000-14000</option>
                <option value="16000">14000-16000</option>
                <option value="18000">16000-18000</option>
                <option value="20000">18000-20000</option>
              </select>
            </div>
            <br>

            <div id="selectWorkingHrs">
              <label for="workingHrs">Working Hours</label>
              <select name="workingHrs" class="custom-select custom-select-sm mb-3">
                <option selected disabled>Select Working Time</option>
                <option value="4">1 to 4 Hours</option>
                <option value="8">5 to 8 Hours</option>
                <option value="24">24 Hours</option>
              </select>
            </div>
            <br>

            <div id="selectReligion">
              <label for="religion">Religion</label>
              <select name="religion" class="custom-select custom-select-sm mb-3">
                <option selected disabled>Select Religion</option>
                <option value="Hindu">Hindu</option>
                <option value="Muslim">Muslim</option>
                <option value="Christian">Christian</option>
              </select>
            </div>
            <br>

            <div id="selectLanguage">
              <label for="lang">Language</label>
              <select name="lang" class="custom-select custom-select-sm mb-3">
                <option selected disabled>Select Language</option>
                <option value="English">English</option>
                <option value="Kannada">Kannada</option>
                <option value="Hindi">Hindi</option>
                <option value="Tamil">Tamil</option>
                <option value="Telagu">Telagu</option>
              </select>
            </div>
            <br>

            <input type="submit" name="submitFilter" class="btn btn-success btn-sm" value="F I L T E R">
            <br><br>
          </form>
        </div>
        
        <!-- 2nd column  -->
        <div class="col">
          <br>
          <!-- featuresBlock -->
          <div class="card text-center" id="featuresBlock">
            <div class="card-body">
              <h5 class="card-title" id="featureHeading">Our Features</h5><br>
              <div class="container">
                <div class="row">
                  <div class="col">
                    <img src="../images/f1.png" height="50" alt="Feature 1">
                    <p class="lead pt-2">Easy Shortlist</p>
                  </div>
                  <div class="col">
                    <img src="../images/f2.png" height="50" alt="Feature 1">
                    <p class="lead pt-2">Affordable Price</p>
                  </div>
                  <div class="col">
                    <img src="../images/f3.png" height="50" alt="Feature 1">
                    <p class="lead pt-2">Contact Candidates</p>
                  </div>
                  <div class="col">
                    <img src="../images/f4.png" height="50" alt="Feature 1">
                    <p class="lead pt-2">24/7 Support</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <?php 
            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
          ?>
          <!-- details  -->
          <div class="card">
            <div class="card-header">
              <div class="row ml-2">
                <div class="col col-lg-1 col-4">
                  <img src="../images/user.png" height="50" alt="user icon">
                </div>
                <div class="col">
                  <p class="lead"><b><?php echo $row['fname']. ' ' . $row['lname'];  ?></b> <br> <img src="../images/location.png" height="25" alt="Location">
                    <span style="font-size: 0.8em;"><b><?php echo $row['home'].', '.$row['street'].', '.$row['area'].', '.$row['city'].'<br>'.$row['states'].' - '.$row['zipcode']; ?></b></span>
                  </p>
                </div>
                <div class="col col-lg-3 pt-4 float-rght">
                  <a href="#" class="btn btn-sm btn-danger"><?php  echo '+91-'.$row['mobile']; ?></a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
              <!-- first side -->
                <div class="col col-lg-6 col-12">
                  <div class="row">
                    <div class="col"><p><b>Age</b></p></div>
                    <div class="col"> <?php echo $row['age'] ?></div>
                  </div>
                  <div class="row">
                    <div class="col"><p><b>Marital Status</b></p></div>
                    <div class="col"> <?php echo $row['marital'] ?> </div>
                  </div>
                  <div class="row">
                    <div class="col"><p><b>Religion</b></p></div>
                    <div class="col"> <?php echo $row['religion'] ?> </div>
                  </div>
                  <div class="row">
                    <div class="col"><p><b>Experience</b></p></div>
                    <div class="col"> <?php echo $row['experience'] ?> </div>
                  </div>
                </div>
              <!-- second side -->
                <div class="col col-lg-6 col-12">
                  <div class="row">
                    <div class="col"><p><b>Gender</b></p></div>
                    <div class="col"> <?php echo $row['gender'] ?> </div>
                  </div>
                  <div class="row">
                    <div class="col"><p><b>Expected Salary</b></p></div>
                    <div class="col"> <?php echo $row['salary'] ?> </div>
                  </div>
                  <div class="row">
                    <div class="col"><p><b>Working Hours</b></p></div>
                    <div class="col"> <?php echo $row['working'] ?> </div>
                  </div>
                  <div class="row">
                    <div class="col"><p><b>Language</b></p></div>
                    <div class="col"> <?php echo $row['languages'] ?> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer text-muted">
              <div class="row">
                <div class="col col-lg-3 col-12">
                  <span>Passport &nbsp; <img src="../images/no.png" height="20" alt="No"></span>
                </div>
                <div class="col col-lg-3 col-12">
                  <span>Aadhar Card &nbsp; <img src="../images/yes.png" height="20" alt="No"></span>
                </div>
                <div class="col col-lg-3 col-12">
                  <span>Documents &nbsp; <img src="../images/yes.png" height="20" alt="No"></span>
                </div>
                <div class="col col-lg-3 col-12">
                  <a href="./payment.php?num=<?php echo $row['id'] ?>" class="btn hireBtn btn-sm">HIRE NOW</a>
                </div>
              </div>
            </div>
          </div>
          <br>
          <?php 
              }
            }
          ?>

        </div>
      </div>
    </div>


    <!-- Enquiry Modal  -->
    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title loginTitle" id="exampleModalLongTitle">What Service are you looking for?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body mt-4">
              <form action="#" method="POST">
                    <div class="container">
                      <input type="text" name="fname" class="form-control" placeholder="Name"><br>
                      <input type="text" name="mobile" class="form-control" placeholder="Mobile"><br>
                      <input type="email" name="emailid" class="form-control" placeholder="Email Id"><br>
                      <textarea name="query" id="textarea" cols="60" rows="2"  class="form-control" placeholder="Query here..."></textarea>
                      <br>
                      <input type="submit" class="btn btn-success col" value="Send">
                    </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
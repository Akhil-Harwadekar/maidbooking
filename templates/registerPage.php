<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <title>Register Portal</title>
    <link rel="icon" href="../images/maidicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/registerPage.css">
</head>
<body>
    <!-- Enquiry Box -->
    <div class="enquiryBlock float-right"  data-toggle="modal" data-target="#exampleModalCenter2" tabindex="0">
        <p class="text-center enquiryText">Enquiry Now</p>
    </div>

    <!-- Heading -->
    <div class="heading">
        <div class="container text-center pt-5 pb-3">
            <h1 class="headingH1">Register to Book My Maid</h1>
        </div>
    </div>

    <!-- content -->
    <div class="container mt-5">
        <div class="row">
            <div class="col colL pt-5">
                <h1 id="lefth1">Interested in becoming part of our team?</h1><hr>
                <p class="lead">Our platform allows for a flexible schedule with generous pay. <br>
                    Becoming a maid is a simple process that provides the luxuries <br>
                    of working when and where you want.
                </p>
                <br>
                <p class="lead">Submit your information and we will process your <br> 
                    application and contact you.
                </p>
                <br>
                <img class="col-lg-12" src="../images/registercolpic.jpg" alt="Maid clean">
                <br><br>
            </div>

            <!-- Second column -->
            <div class="col col-lg-7 rightcol">
                <h1 id="righth1" class="pt-5 pr-4 pl-4">Submit your information and we will get back to you</h1> <br>
                <form action="./registerPhp.php" method="POST" id="detailsForm">
                    <div class="row">
                        <div class="col">
                            <small><b>First Name</b></small>
                            <input required type="text" name="fname" class="form-control" placeholder="First Name">
                        </div>
                        <div class="col">    
                            <small><b>Last Name</b></small>
                            <input required type="text" name="lname" class="form-control" placeholder="Last Name">
                        </div>
                    </div><br>

                    <div class="row">
                        <div class="col">
                            <small><b>Mobile</b></small>
                            <input required type="text" name="mobile" class="form-control" placeholder="Contact No.">
                        </div>
                        <div class="col">    
                            <small><b>Gender</b></small><br>
                            <select name="gender" class="custom-select mb-3">
                                <option selected disabled>Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div><br>

                    <div class="row">
                        <div class="col">
                            <small><b>Age</b></small>
                            <input required type="text" name="age" class="form-control" placeholder="Age">
                        </div>
                        <div class="col">    
                            <small><b>Marital Status</b></small>
                            <input required type="text" name="marital" class="form-control" placeholder="Marital Status">
                        </div>
                        <div class="col">
                            <small><b>Religion</b></small>
                            <input required type="text" name="religion" class="form-control" placeholder="Religion">
                        </div>
                    </div><br>

                    <div class="row">
                        <div class="col">
                            <small><b>Year of Experience</b></small>
                            <input required type="text" name="exp" class="form-control" placeholder="Experience">
                        </div>
                        <div class="col">    
                            <small><b>Salary Expectations</b></small>
                            <input required type="text" name="salary" class="form-control" placeholder="Salary">
                        </div>
                    </div><br>

                    <div class="row">
                        <div class="col">
                            <small><b>Working Hours</b></small>
                            <input required type="text" name="workingHrs" class="form-control" placeholder="Working Hours">
                        </div>
                        <div class="col">    
                            <small><b>Languages Known</b></small><br>
                            <select name="lang" class="custom-select mb-3">
                                <option selected disabled>Select Language</option>
                                <option value="English">English</option>
                                <option value="Kannada">Kannada</option>
                                <option value="Hindi">Hindi</option>
                                <option value="Tamil">Tamil</option>
                                <option value="Telagu">Telagu</option>
                            </select>
                        </div>
                    </div><br>

                    <div class="row">
                        <div class="col">
                            <small><b>Home</b></small>
                            <input required type="text" name="home" class="form-control" placeholder="House No">
                        </div>
                        <div class="col">    
                            <small><b>Street</b></small>
                            <input required type="text" name="street" class="form-control" placeholder="Street">
                        </div>
                        <div class="col">    
                            <small><b>Area</b></small>
                            <input required type="text" name="area" class="form-control" placeholder="Area">
                        </div>
                    </div><br>

                    <div class="row">
                        <div class="col">
                            <small><b>City</b></small>
                            <input required type="text" name="city" class="form-control" placeholder="City">
                        </div>
                        <div class="col">    
                            <small><b>State</b></small>
                            <input required type="text" name="states" class="form-control" placeholder="State">
                        </div>
                        <div class="col">    
                            <small><b>Zipcode</b></small>
                            <input required type="text" name="zip" class="form-control" placeholder="Zip-Code">
                        </div>
                    </div><br>

                    <input required type="checkbox" name="intrested" checked><small><b> &nbsp; I’m interested in becoming a maid.</b></small> <br>
                    <input required type="checkbox" name="terms"><small> &nbsp; By checking this you are agreeing to our <em>terms and condtitions.</em></small> <br><br>

                    <input type="submit" value="S U B M I T - D A T A" class="btn btn-success col"><br><br>
                </form>
            </div>
        </div>
        <br>
    </div>

    <!-- Mobile Pics -->
    <div class="row mt-4 mb-3" id="mobile">
        <div class="col pt-5" id="mobileLeft">
            <h1 id="mobileH1" class="text-center">Get started today</h1>
            <p id="mobilep" class="lead text-muted text-center">
                Visit our app in your phone and enjoy the experience. <br>
                Setting up an account is simple and fun.       
            </p>
        </div>
        <div class="col col-lg-4 pt-4 pb-4">
            <img id="iphone" src="../images/Riphone.png" height="550" alt="iphone pic">
            <img id="android" src="../images/Randroid.png" height="580" alt="android pic">
        </div>
    </div>


     <!-- Desktop Pic -->
     <div class="row mt-4 mb-3" id="desktop">
        <div class="col" id="mobileLeft">
            <h1 id="macH1" class="text-center pb-2">Get started today</h1>
            <p class="lead text-muted ml-3">
                Visit our app in thr browser and enjoy the experience.
                Setting up an account is simple and fun.       
            </p>
        </div>
        <div class="col col-lg-7 pt-4 pb-5">
            <img id="macbook" src="../images/Rdesktop.png" height="260" alt="macbook pic">
        </div>
    </div>


    <!-- Testimonials -->
    <h1 class="ml-3 mt-3" id="testimonialh1">Testimonials..</h1>
    <div class="col ml-2 mr-5 col-lg-5">
        <p class="muted lead">
            Hear what our existing customers have to say from their experience with our services. We take pride in carefully listening to all of the feedback from our customers.
        </p>
    </div>
    <div class="container">
        <div class="row">
            <div class="mt-4 mb-4 card-deck">
                <div class="card mb-1">
                    <div class="card-body">
                      <p class="card-text lead">“I can't believe that i really got a cleaner within an hour. Will definitely use again.”</p>
                    </div>
                    <div class="card-footer"><b class="float-right fnames">~ Akhil Harwadekar</b></div>
                </div>

                <div class="card mb-1">
                    <div class="card-body">
                      <p class="card-text lead">"All our property managers use this services. It makes our management service more efficient during vacancies. No more need to make cleaning services appointments ahead of time.”</p>
                    </div>
                    <div class="card-footer"><b class="float-right fnames">~ Bhargavi Naidu</b></div>
                </div>

                <div class="card mb-1">
                    <div class="card-body">
                      <p class="card-text lead">“Awesome app. Within 20 minutes someone was at my house cleaning. Also the cleaner did a great job.”</p>
                    </div>
                    <div class="card-footer"><b class="float-right fnames">~ Sunder Pitchai</b></div>
                </div>

                <div class="card mb-1">
                    <div class="card-body">
                      <p class="card-text lead">“Have used another app in the past and the service was terrible each and everytime i tried. then i found this app and was blown away at the quality! My house has never been cleaner! And they arrived within two hours of booking.”</p>
                    </div>
                    <div class="card-footer"><b class="float-right fnames">~ Satya Nadela</b></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer  -->
    <center>
        <footer>
            <small><b>&copy; 2021, All reserved Copyrights are owned by BookMyMaid</b></small>
        </footer>
    </center>


    <!-- Enquiry Modal  -->
    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">What Service are you looking for?</h5>
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
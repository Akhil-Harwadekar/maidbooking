<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "maidbookapp";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if (isset($_GET['num'])) {
        $idnum = $_GET['num'];
    }

    $stmt = "SELECT * FROM registered WHERE id=$idnum"; 
    $result = $conn->query($stmt);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Portal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/payment.css">
</head>
<body>
    <div id="mainblock" class="container mt-1">
        <div id="heading" class="mt-2">
            <h1 class="pt-2 pb-2"> BOOK MY MAID</h1>
        </div>

        <h1 class="text-center mb-2 invoiceH1">INVOICE</h1>

        <div class="container">
            <div class="row">
                <div class="col">
                    <h4 class="invoiceH1">Invoice To </h4>
                    <p class="lead"><b>Name : Akhil</b> <br> <b>Contact : 1234567890</b></p>
                </div>
                <div class="col">
                    <h4 class="float-right invoiceH1">Invoice Details</h4><br><br>
                    <p class="float-right"><b>Date : <?php echo date("Y-m-d"); ?></b></p>
                </div>
            </div>
        </div>
        <hr>

        <div class="container">
            <h4 class="invoiceH1">Service & Description</h4><br>
            <p class="lead"><b>Name: <?php echo $row['fname'].' '.$row['lname']; ?></b></p>
            <p><b>Address :</b>  <?php echo $row['home'].', '.$row['area'].', '.$row['city'].', '.$row['states'].' - '.$row['zipcode']; ?></p>
            <div class="row">
                <div class="col">
                    <p><b>Age :</b> <?php echo $row['age'] ?></p>
                    <p><b>Gender :</b> <?php echo $row['gender'] ?></p>
                    <p><b>Marital Status :</b> <?php echo $row['marital'] ?></p><br>
                </div>
                <div class="col">
                    <p><b>Religion :</b> <?php echo $row['religion'] ?></p>
                    <p><b>Experience :</b> <?php echo $row['experience'] ?>+ years</p><br>
                </div>
                <div class="col">
                    <p><b>Salary :</b> <?php echo $row['salary'] ?>/month</p>
                    <p><b>Working Hours :</b> <?php echo $row['working'] ?>/day</p><br>
                </div>
            </div>
        </div>

        <div class="container">
            <h4 class="invoiceH1">Additional Charges</h4> <br>
            <div class="row mb-3">
                <div class="col"><p><b>Service Charge :</b> <?php echo ($row['salary']/10)*3; ?></p></div>
                <div class="col"><p><b>GST :</b> 20% </p></div>
                <div class="col"><h4>Total : <?php echo (($row['salary']/10)*3)+(($row['salary']/10)*3)*0.2; ?></h4></div>
            </div>
            <button class="btn btn-success form-control mb-1">PROCEED TO PAY</button>
        </div>
    </div>
    <?php
        }
    }
    ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
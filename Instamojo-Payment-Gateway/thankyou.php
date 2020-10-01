<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>Thank You | eSend</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/styles.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">
                            <img src="assets/images/logo.png" width="150" height="30" alt="eSend" />
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">

        <?php

        include 'src/instamojo.php';

        $api = new Instamojo\Instamojo('YOUR-PRIVATE-API-KEY', 'YOUR-PRIVATE-AUTH-TOKEN', 'https://test.instamojo.com/api/1.1/');

        $payid = $_GET["payment_request_id"];


        try {
            $response = $api->paymentRequestStatus($payid);
        ?>

            <div class="col-12 col-sm-4">
                <div class="card" style="margin-top:100px; border-color: #000;">
                    <h3 class="card-header text-white" style="background-color: #ff589e;">Hey <?php echo $response['payments'][0]['buyer_name'] ?>,<br />
                        Thanks for the
                        Donation!
                    </h3>
                    <div class="card-body">
                        <h5 class="card-title text-center"><strong>Payment Details</strong></h5>
                        <dl class="row">
                            <dt class="col-5" style="padding-bottom: 4px;">Payment ID: </dt>
                            <dd class="col-7"><?php echo $response['payments'][0]['payment_id'] ?></dd>
                            <dt class="col-5" style="padding-bottom: 4px;">Name: </dt>
                            <dd class="col-7"><?php echo $response['payments'][0]['buyer_name'] ?></dd>
                            <dt class="col-5" style="padding-bottom: 4px;">Email: </dt>
                            <dd class="col-7"><?php echo $response['payments'][0]['buyer_email'] ?></dd>
                            <dt class="col-5" style="padding-bottom: 4px;">Phone: </dt>
                            <dd class="col-7"><?php echo $response['phone'] ?></dd>
                            <dt class="col-5" style="padding-bottom: 4px;">Amount Paid:</dt>
                            <dd class="col-7"><?php echo $response['amount'] ?></dd>
                        </dl>
                        <button class="btn main-button offset-sm-8" onclick="location.href='index.php'">Home Page</button>
                    </div>
                </div>
            </div>
    </div>

<?php

            $servername = "localhost";
            $username = "id14960544_root";
            $password = "RootAdmin@99";
            $dbname = "id14960544_grippayment";

            //Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            //Checking for connection failure
            if ($conn->connect_error) {
                die("Connection to DB failed: " . $conn->connect_error);
            }

            function insert_data($table_name, $data)
            {
                $key = array_keys($data);
                $value = array_values($data);

                $query = "INSERT INTO $table_name ( " . implode(',', $key) . ") VALUES('" . implode("','", $value) . "')";

                return $query;
            }

            $data = array(
                "Payment_ID" => $response['payments'][0]['payment_id'],
                "Name" => $response['payments'][0]['buyer_name'],
                "Email" => $response['payments'][0]['buyer_email'],
                "Phone" => $response['phone'], "Amount" => $response['amount']
            );
            $table_name = "donationinfo";

            $sql = insert_data($table_name, $data);

            if ($conn->query($sql) === TRUE) {
            } else {
                echo "<script>alert('Error!')</script>";
            }
        } catch (Exception $e) {
            print('Error: ' . $e->getMessage());
        }
?>
<!-- ***** Welcome Area End ***** -->



<!-- ***** Footer Start ***** -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <ul class="social">
                    <li><a target="_blank" href="https://www.facebook.com/thesparksfoundation.info/"><i class="fa fa-facebook"></i></a></li>
                    <li><a target="_blank" href="https://twitter.com/tsfsingapore?lang=en"><i class="fa fa-twitter"></i></a></li>
                    <li><a target="_blank" href="https://www.linkedin.com/company/the-sparks-foundation/"><i class="fa fa-linkedin"></i></a></li>
                    <li><a target="_blank" href="https://www.thesparksfoundationsingapore.org/"><i class="fa fa-globe"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p class="copyright">Made in <span style="color: #ff589e;">
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                    </span> | <a href="https://www.thesparksfoundationsingapore.org/" class="footerLink">The Sparks
                        Foundation</a>
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src="assets/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/imgfix.min.js"></script>

<!-- Global Init -->
<script src="assets/js/custom.js"></script>

</body>

</html>
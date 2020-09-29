<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">

    <title>Home | CMS</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity=""></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js" integrity=""></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity=""></script>

    <link rel="icon" href="favicon.ico">
</head>

<body>

    <!-- Modal-> Create User -->
    <div id="createUserModal" class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Create User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="createUser.php" method="post" name="crUser" id="createUser">
                        <div class="form-group row">
                            <label class="col-12 col-sm-2 col-form-label" for="nameL">Name</label>
                            <div class="col-12 col-sm">
                                <input type="text" id="name" class="form-control" placeholder="Enter Name" name="name" value="" onchange="return onlyAlphabets()" required="true" />
                                <div id="notification"></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 col-sm-2 col-form-label" for="emailL">Email</label>
                            <div class="col-12 col-sm">
                                <input type="email" id="email" class="form-control" placeholder="Enter Email" name="email" value="" required="true" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 col-sm-2 col-form-label" for="credsL">Credits</label>
                            <div class="col-12 col-sm">
                                <input type="number" id="creds" class="form-control" placeholder="Enter Credits" name="creds" min="0" value="" required="true" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12 col-sm-4 offset-sm-4">
                                <button type="submit" class="btn btn-secondary" style="font-weight: bold;"><span class="fa fa-user fa-sm"></span> Create User</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Navbar -->
    <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand" href="index.php">
                <img class="site-logo" src="https://media-exp1.licdn.com/dms/image/C560BAQFgHU3sTF4LfQ/company-logo_200_200/0?e=2159024400&v=beta&t=t-cy2njTNbqc_h3kW92SYNTec2pIhYMW6WtzJ9WDd-I" alt="TSF Logo" />
            </a>
            <div class="navbar-collapse collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto nav-options">
                    <li class="nav-item active">
                        <a class="nav-link" href="#"><span class="fa fa-home fa-lg"></span> Home &nbsp;</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="users.php"><span class="fa fa-eye fa-lg"></span> View Users &nbsp;</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="transHistory.php"><span class="fa fa-history fa-lg"></span> Transaction History &nbsp;</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" align="center">
        <div class="row row-content">
            <!-- Header Quote -->
            <div class="quote" align="center" style=" margin-top: 100px;">
                <quote style="font-style: italic; font-size: 20px; color: #d982b5;">“I’ll tell you the secret to getting rich on Wall Street. You try to be greedy when others are fearful. And you try to be fearful when others are greedy.”</quote>
            </div>
        </div>

        <!-- Home Page Content -->
        <h1 class="cover-heading" style="margin-top: 140px;">Credit Management System</h1>
        <p id="functionality">Create User, View other User's details, Transfer Credits among user's, View Transaction History;</p>

        <br /><br />

        <button data-toggle="modal" data-target="#createUserModal" class="btn btn-secondary" style="font-weight: bold; width: 150px"><span class="fa fa-user fa-sm"></span> Create a User</button>

        <br />

        <div class="quote" align="center" style=" margin-top: 180px; margin-bottom: 50px;">
            <span style="font-style: italic; font-size: 20px; color: #FF7F50">“Wallet is like an onion, Opening it makes us cry</span><span>😢</span>!!” <span>😂😂</span>
        </div>
    </div>


    <!-- Footer -->
    <footer class="footer mt-auto">
        <div class="footerText">
            <p>Made in <span style="color: #d982b5;">
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                </span> | <a href="https://www.thesparksfoundationsingapore.org/" class="footerLink">The Sparks Foundation</a>
            </p>
        </div>
    </footer>

    <script>
        /* To check whether entered name contains Alphabets only. */
        function onlyAlphabets() {
            var regex = /^[a-zA-Z]*$/;
            if (regex.test(document.crUser.name.value)) {
                return true;
            } else {
                document.getElementById("nameL").style.borderColor = "red";
                document.getElementById("notification").innerHTML = "Alphabets Only *";
                document.getElementById("notification").style.color = "red";
                alert("Plz enter Name in correct format.");
                return false;
            }
        }
    </script>

    <script>
        let validateForm = () => {

            let credits = document.forms['crUser']['creds'].value;
            let isvalid = /^\d*$/.test(credits);
            if (!isValid) {
                alert('Invalid Credits!');
                document.getElementById('credsL').style.borderColor = "red";
                return false;
            }
            return true;
        }
    </script>

</body>

</html>
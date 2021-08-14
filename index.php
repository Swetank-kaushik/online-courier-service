<!DOCTYPE html>
<html>

<head>
    <title>Online Courier Software</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="new1.css" rel="stylesheet">
    <style type="text/css">
        .navbar-toggler-icon {
            color: black;
        }

        #primary-button {
            position: relative;
            top: -330px;
            left: 47%;
            background-color: #0f3f5e;
            color: whitesmoke;
            border-radius: 3px;
            border: 2px solid black;
            height: 45px;
            width: 140px;
        }

        #primary-button a {
            color: white;
        }

        #primary-button a:hover {
            color: whitesmoke;
        }

        #primary-button:hover {
            background-color: #042e4a;
        }

        .lead {
            text-align: center;
        }

        .center {
            margin: 0 auto;
        }

        #about {
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <div class="navbar-shadow">
        <nav class="navbar navbar-expand-md sticky-top nav_bg">
            <div class="container-fluid">
                <a class="navbar-brand" href="/courier%20service/index.php"><img src="images/logo1.png" height=40px width=40px> Swift Courier Service </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#connect">Connect</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Admin Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div style="width: 100%;">
        <img src="images/indexx.svg" style="width: 100%; position: relative;">
        <button type="button" id="primary-button">
            <a href="track-status.php">Check Status</a>
        </button>
    </div>
    <br>
    <br>


    <!--- About -->
    <div class="jumbotron" id="about">
        <div class="container-fluid padding">
            <div class="row welcome text-center">
                <div class="col-12">
                    <h1 class="display-4">About</h1>
                </div>
                <hr>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10 center">
            <p class="lead">
                Mail + Time + Delivery = trust ! <br>
                SWIFT COURIER SYSTEM is one of the most reputed and fast growing courier services to the clients. Our services are widely acknowledge for their features like time saving and very efficient in use.Sending the courier across the internet and no need to visit anywhere.The system is used for daily activities such as booking a courier and track courier etc.
                <br>
                A Courier company is one which delivers messages, packages and mail and is known for their speed, security, tracking service and specialisation. Courier services became increasingly popular with the arrival of Internet shopping. Being able to order large and multiple items from online sellers required specialist delivery services that would enable customers to not only receive their items but also enable online sellers to offer things such as next day delivery. Something that is only possible with a courier service.
            </p>
        </div>
    </div>


    <!--- Connect -->
    <footer class="connect">
        <div class="container-fluid padding">
            <div class="row text-center">
                <div class="col-md-4">
                    <a class="navbar-brand" href="#"><img src="images/logo.png"></a>
                    <hr class="light">
                    <p>9958-092-802</p>
                    <p>swiftcourier@gmail.com</p>
                    <p>Baker Street</p>
                    <p>Delhi, Delhi-110085</p>
                </div>
                <div class="col-md-4">
                    <hr class="light">
                    <h5>Our hours</h5>
                    <hr class="light">
                    <p>Monday: 9am to 5pm</p>
                    <p>Saturday: 10am to 6pm</p>
                    <p>Sunday closed</p>
                </div>
                <div class="col-md-4">
                    <hr class="light">
                    <h5>Service Area</h5>
                    <hr class="light">
                    <p>New Delhi, Delhi, 110085</p>
                    <p>Gurugram, Haryana, 120987</p>
                    <p>Vellore, Tamil Nadu, 632014</p>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
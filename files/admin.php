<?php
session_start();
require_once('library.php');
isUser();
?>
<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
  <title>Admin</title>
  <link href="css/mystyle.css" rel="stylesheet" type="text/css">
  <link href="css/style.css" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link href="new1.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-md sticky-top nav_bg">
    <div class="container-fluid">
      <a class="navbar-brand" href="http://localhost/index.php#"><img src="images/logo1.png" height= 40px width= 40px>   Swift Courier Service </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Admin Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <?php
  include("header.php");
  ?>

  </td>
  </tr>

  <tr>
    <td bgcolor="#FFFFFF">
      <div align="center"> <br>
        <br>
        <table bgcolor="#ECECEC" border="0" cellpadding="2" cellspacing="2" align="center" width="50%">
          <tbody>
            <tr>
              <td class="Partext1" bgcolor="#EEEEEE">
                <div align="left"><strong class="h3">Courier Management System </strong></div>
              </td>
            </tr>
            <tr>
              <td class="newtext" bgcolor="#FFFFFF">
                <div align="left"><img src="images/arrow_white.gif" border="0" height="8" width="7">&nbsp;<a href="add-courier.php" class="REDLink h6">Add Shipment</a></div>
              </td>
            </tr>
            <tr>
              <td class="newtext" bgcolor="#FFFFFF">
                <div align="left"><img src="images/arrow_white.gif" border="0" height="8" width="7">&nbsp;<a href="courier-list.php" class="REDLink h6">List Shipment</a></div>
              </td>
            </tr>
            <tr>
              <td class="newtext" bgcolor="#FFFFFF">
                <div align="left"><img src="images/arrow_white.gif" border="0" height="8" width="7">&nbsp;<a href="report.php" class="REDLink h6">Report</a></div>
              </td>
            </tr>
            <tr>
              <td class="newtext" bgcolor="#FFFFFF">
                <div align="left"><img src="images/arrow_white.gif" border="0" height="8" width="7">&nbsp;<a href="process.php?action=logOut" class="REDLink h6">Logout</a></div>
              </td>
            </tr>
          </tbody>
        </table>
        <br>
        <br>
        <br>
        <br>
      </div>
    </td>
  </tr>
  <tr>
    <td>
      <table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
        <tbody>
          <tr>
            <td bgcolor="" height="40" width="476">&nbsp;</td>
            <td bgcolor="" width="304">
            </td>
          </tr>
        </tbody>
      </table>
    </td>
  </tr>
  </tbody>
  </table>

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
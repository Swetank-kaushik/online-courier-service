<?php
session_start();
require_once('database.php');
require_once('library.php');
$error = "";
if (isset($_POST['txtusername'])) {
  $error = checkUser($_POST['txtusername'], $_POST['txtpassword'], $_POST['OfficeName']);
} //if

require_once('database.php');
$sql = "SELECT DISTINCT(off_name)
		FROM tbl_offices";
$result = dbQuery($sql);

?>
<html>

<head>
  <title>Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link href="new1.css" rel="stylesheet">

    <script language="javascript">
    function memloginvalidate() {
      if (document.form1.txtusername.value == "") {
        alert("Please enter admin UserName.");
        document.form1.txtusername.focus();
        return false;
      }
      if (document.form1.txtpassword.value == "") {
        alert("Please enter admin Password.");
        document.form1.txtpassword.focus();
        return false;
      }
    }
  </script>
  <style>
    .main{
      position: relative;
      top: 15%;
      left: 60%;
    }
    .connect{
      position: relative;
      top: 30%;
    }
    .image{
      position: fixed;
      bottom: 30%;
      width: 50%;
    }
    @media(max-width: 40rem){
      .main{
        width: 100%;
        position: relative;
        left:20%;
      }
      .image{
        display: none;
      }
    }
  </style>

</head>


<body onLoad="document.form1.txtusername.focus();">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-md sticky-top nav_bg">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img src="images/logo1.png" height=40px width=40px> Swift Courier Service </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <div>
    <img src="images/login.svg" class="image">
  </div>
  <div style="width: 35%;" class="main">
  <form name="form1" id="form1" method="post" onSubmit="return memloginvalidate()">
    <table id="Outer" bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" style="width:100%">
      <tbody>
        <tr>
          <td colspan="3" class="smalltextgrey">
            <div class="headtext13" align="center" style="margin-bottom:20px;"><strong class="h4">Administrator Login Area </strong></div>
          </td>
        </tr>
        <tr>
          <td colspan="3" height="10">
            <font color="#FF0000" style="font-size:12px;">
              <?php echo $error; ?>
            </font>
          </td>
        </tr>
        <tr>
          <td width="115">&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:20px;">Username</font>
          </td>
          <td width="3">:</td>
          <td width="160">
            <input name="txtusername" class="forminput form-control" id="txtusername" maxlength="20" type="text"></td>
        </tr>
        <tr>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:20px;">Password</font>
          </td>
          <td>:</td>
          <td><input name="txtpassword" class="forminput form-control" id="txtpassword" maxlength="20" type="password"></td>
        </tr>
        <tr>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:20px;">Office</font>
          </td>
          <td>:</td>
          <td>
            <select name="OfficeName" class="btn btn-light dropdown-toggle">
              <?php
              while ($data = dbFetchAssoc($result)) {
              ?>
                <option value="<?php echo $data['off_name']; ?>"><?php echo $data['off_name']; ?></option>
              <?php
              } //while
              ?>
            </select>
          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><input name="Submit" class="green-button btn btn-info" value="Login Now" type="submit" style="padding:5px 10px;font-weight:bold; margin-top:10px;"></td>
      </tbody>
    </table>
  </form>
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
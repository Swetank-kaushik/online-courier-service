<?php
//session_start();
?>
<table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody>
    <tr>
      <td>
        <style type="text/css">
          
        </style>

        <table border="0" cellpadding="0" cellspacing="0" width="900">
          <tbody>
            <tr bgcolor="#5FBDDE">
              <td height="30" width="110">
                <div align="center"><span class="headtext13 style2 h6"><strong>SHIPMENT:</strong></span></div>
              </td>
              <td height="30" width="43">
                <div class="lowerstyle" align="center"> <a href="add-courier.php">Add</a></div>
              </td>
              
              <td height="30" width="43">
                <div class="lowerstyle" align="center"><a href="courier-list.php">Update </a></div>
              </td>
              
              <td width="89">
                <div class="lowerstyle" align="center">
                  <div align="center"><a href="search-edit.php">Search </a></div>
                </div>
              </td>
              <td width="3">
                <div align="left">|</div>
              </td>
              <td height="30" width="96">
                <div align="center"><span class="headtext13 style2 h6"><strong>REPORTS : </strong></span><span class="heading"></span></div>
              </td>
              <td height="30" width="43">
                <div class="lowerstyle" align="center"><a href="delivered-list.php">Delivered </a> </div>
              </td>
              
              <td width="76">
                <div class="lowerstyle" align="center"><a href="datewise-list.php">Datewise </a> </div>
              </td>
              <td width="3">&nbsp;</td>
              <td width="71">
                <div class="lowerstyle" align="center"><a href="http://tracking4web.com/admin/report_statuswise.php?status=all"></a> </div>
              </td>
              <td width="3"></td>
              
              <td height="30" width="30">
              <div align="left">|</div>
              <td height="30" width="70">
              
                <div align="center"><span class="headtext13 style2 h6"><strong>STATISTICS : </strong></span><span class="heading"></span></div>
              </td>
              <td height="30" width="43">
                <div class="lowerstyle" align="center"><a href="MonthwiseReport.php">Graph</a> </div>
              </td>
              
              </td>
            </tr>

          </tbody>
        </table>

        <?php
        if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'admin-role') {
          ?>
          <table border="0" cellpadding="0" cellspacing="0" width="900">
            <tbody>
              <tr style="height:25px;">
                <td bgcolor="#E2E2E2" width="4">&nbsp;</td>
                <td bgcolor="#E2E2E2" width="240">&nbsp;<b>Admin Menu</b></td>
                <td bgcolor="#E2E2E2" width="130">
                  <div align="center"><a href="offices-list.php" class="headtext13">Office Details</a></div>
                </td>
                <td bgcolor="#E2E2E2" width="10">|</td>

                <td bgcolor="#E2E2E2" width="100">
                  <div align="center"><a href="add-office.php" class="headtext13">Add New Office</a></div>
                </td>
                <td bgcolor="#E2E2E2" width="10">|</td>
                <td bgcolor="#E2E2E2" width="162">
                  <div align="center"><a href="manager-list.php" class="headtext13">Manager Details</a> </div>
                </td>
                <td bgcolor="#E2E2E2" width="7">|</td>
                <td bgcolor="#E2E2E2" width="125">
                  <div align="center"><a href="add-new-officer.php" class="headtext13">Add New Manager</a></div>
                </td>
              </tr>
            </tbody>
          </table>
        <?php
        }
        ?>
        <table border="0" cellpadding="0" cellspacing="0" width="900">
          <tbody>
            <tr style="height:25px;">
              <td bgcolor="#5FBDDE" width="4">&nbsp;</td>
              <td bgcolor="#5FBDDE" width="350">&nbsp;</td>
              <td bgcolor="#5FBDDE" width="130">
                <div align="center"><a href="admin.php" class="headtext13"></a></div>
              </td>
              <td bgcolor="#5FBDDE" width="10"></td>
              <td bgcolor="#5FBDDE" width="162">
                <div align="center"><a href="admin.php" class="headtext13">Home</a> </div>
              </td>
              <td bgcolor="#5FBDDE" width="7">|</td>
              <td bgcolor="#5FBDDE" width="125">
                <div align="center"><a href="process.php?action=logOut" class="headtext13">Logout</a></div>
              </td>
            </tr>
          </tbody>
        </table>
<?php session_start();
  if(!isset($_SESSION['adminid']))
  {
          header("location: /university/index.php");
  }
  ?>
  <header class="header" id="header">
    <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
    <div class="mx-auto">
        <a class="p-1" href="transport.php">Home</a>&nbsp;
        <a class="p-1" href="timeroute.php">Timing and Route</a>
        <a class="p-1" href="mess.php">Mess</a>
        <a class="p-1" href="payfine.php">Notices</a>

    </div>
    <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
</header>

<?php session_start();
  if(!isset($_SESSION['adminid']))
  {
          header("location: /university/index.php");
  }
  ?><header class="header" id="header">
    <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
    <div class="mx-auto">
        <a class="p-1" href="attendance.php">Home</a>&nbsp;
        <a class="p-1" href="students.php">Students Attendance</a>
        <!-- <a class="p-1" href="_accounts/printinvoice.php">Print Invoices</a>
        <a class="p-1" href="_accounts/payfine.php">Notices</a> -->

    </div>
    <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
</header>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
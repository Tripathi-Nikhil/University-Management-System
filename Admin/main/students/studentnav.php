<?php session_start();
  if(!isset($_SESSION['adminid']))
  {
          header("location: /university/index.php");
  }
  ?>
  <header class="header" id="header">
    <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
    <div class="mx-auto">
        <a class="p-1" href="student.php">Home</a>&nbsp;
        <a class="p-1" href="student.php">Admission</a>
        <a class="p-1" href="viewstudent.php">View Students</a>
        <a class="p-1" href="updatestudent.php">Manage Students</a>
        <a class="p-1" href="#"></a>

    </div>
    <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
</header>
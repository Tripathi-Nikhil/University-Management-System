<?php session_start();
  if(!isset($_SESSION['adminid']))
  {
          header("location: /university/index.php");
  }
  ?>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<header class="header" id="header">
    <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
    <div class="mx-auto">
        <a class="p-1" href="teacher.php">Home</a>&nbsp;
        <a class="p-1" href="classassign.php">Assign Class</a>
        <a class="p-1" href="#"></a>
        <a class="p-1" href="#">TeacherNav</a>
        <a class="p-1" href="#">TeacherNav</a>

    </div>
    <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
</header>
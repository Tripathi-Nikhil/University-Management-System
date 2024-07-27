<?php session_start();
  if(!isset($_SESSION['adminid']))
  {
          header("location: /university/index.php");
  }
  ?>
  <header class="header" id="header">
    <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
    <div class="mx-auto">
        <a class="p-1" href="#">Home</a>&nbsp;
        <a class="p-1" href="issuebook.php">Issue Book</a>
        <a class="p-1" href="returnbook.php">Return Book</a>
        <a class="p-1" href="payfine.php">Pay Fine</a>
        <a class="p-1" href="elibrary.php">E-Library</a>

    </div>
    <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
</header>


<!--- Create adm_no_search.php --->
<?php
  
  // include database connection file

  include_once "../../../includes/dbconn.php";

  // autocomplete textbox jquery ajax in PHP
  
  if (isset($_POST['searchid'])) {

      $output = "";
      $searchid = $_POST['searchid'];
      $query = "select * FROM studentdetails WHERE regid LIKE '%$searchid%'";
      $result = $db->query($query);

      $output = '<ul class="list-unstyled list-group">';   
      if ($result !== false && $result->num_rows > 0) {
        while ($row = $result->fetch_array()) {
          $output .= '<li class="card bg-light text-center ">'.ucwords($row['regid']).'</li>';
        }
      }else{
          $output .= '';
      }
      
      $output .= '</ul>';
      echo $output;
  }

?>
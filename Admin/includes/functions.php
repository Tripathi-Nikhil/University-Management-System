<?php 
include 'dbconn.php';
function countdays($date1, $date2) 
{
    $diff = strtotime($date2) - strtotime($date1);
    return abs(round($diff / 86400));
}
function countmin($date1, $date2) 
{
    $diff = strtotime($date2) - strtotime($date1);
    $hours = floor($diff / 3600);
    $minutes = floor(($diff / 60) % 60);
    $seconds = $diff % 60;
    $time = $hours." Hours ".$minutes." Minutes ".$seconds." Seconds";
    return $time;
}

function countfine($n){
    if($n>15){
        $n = $n-15;
        $fine = 5*$n;
    }
    else{
        $fine = 0;
    }
    return $fine;
}
function out($studid){
$db=mysqli_connect('localhost', 'root', '', 'ums')or die("DataBase didn't not Conected!");
    $query1 =mysqli_query($db, "SELECT * FROM hostelregister WHERE studentid = '$studid' ORDER BY id DESC LIMIT 1");
    $run1 = mysqli_fetch_array($query1);
    $out = $run1['intime'];
    $olen = strlen($out);
    return $olen;
}
?>
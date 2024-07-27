
<?php
// include '../dbconn.php';
// session_start();
// if(!isset($_SESSION['teacherid']))
// {
//         // header("location: ../index.php");
// }else{
//     $teacher_id = $_SESSION['teacherid'];
// }
date_default_timezone_set('Asia/Kolkata');
$timestamp = date("Y-m-d H:i:s");


if(isset($_POST['assign'])){
    $id = $_POST['id'];
    $type = $_POST['assign_type'];
    $num = $_POST['assign_no'];
    $date = $_POST['assign_date'];
    $content = $_POST['content'];
    
    if($type == 'assignment'){
        if($num == 1){
            $sql = "UPDATE subteacher SET assign1 ='$content', assigndate = '$timestamp' WHERE id = '$id'";
            $result = mysqli_query($db, $sql);
            if($result){
                echo '<script>
swal("Work Assigned!", " Refresh Page to see Changes", "success");
</script>';
            }
        }
        elseif($num == 2){
            $sql = "UPDATE subteacher SET assign2 ='$content', assigndate = '$timestamp' WHERE id = '$id'";
            $result = mysqli_query($db, $sql);
            if($result){
                echo '<script>
swal("Work Assigned!", " Refresh Page to see Changes", "success");
</script>';
            }
        }
        elseif($num == 3){
            $sql = "UPDATE subteacher SET assign3 ='$content', assigndate = '$timestamp' WHERE id = '$id'";
            $result = mysqli_query($db, $sql);
            if($result){
                echo '<script>
swal("Work Assigned!", " Refresh Page to see Changes", "success");
</script>';
            }
        }
        elseif($num == 4){
            $sql = "UPDATE subteacher SET assign4 ='$content', assigndate = '$timestamp' WHERE id = '$id'";
            $result = mysqli_query($db, $sql);
            if($result){
                echo '<script>
swal("Work Assigned!", " Refresh Page to see Changes", "success");
</script>';
            }
        }
        elseif($num == 5){
            $sql = "UPDATE subteacher SET assign5 ='$content', assigndate = '$timestamp' WHERE id = '$id'";
            $result = mysqli_query($db, $sql);
            if($result){
                echo '<script>
swal("Work Assigned!", " Refresh Page to see Changes", "success");
</script>';
            }
        }
    }
    elseif($type == 'homework'){
        if($num == 1){
            $sql = "UPDATE subteacher SET hw1 ='$content', hwdate = '$timestamp' WHERE id = '$id'";
            $result = mysqli_query($db, $sql);
            if($result){
                echo '<script>
swal("Work Assigned!", " Refresh Page to see Changes", "success");
</script>';
            }
        }
        elseif($num == 2){
            $sql = "UPDATE subteacher SET hw2 ='$content', hwdate = '$timestamp' WHERE id = '$id'";
            $result = mysqli_query($db, $sql);
            if($result){
                echo '<script>
swal("Work Assigned!", " Refresh Page to see Changes", "success");
</script>';
            }
        }
        elseif($num == 3){
            $sql = "UPDATE subteacher SET hw3 ='$content', hwdate = '$timestamp' WHERE id = '$id'";
            $result = mysqli_query($db, $sql);
            if($result){
                echo '<script>
swal("Work Assigned!", " Refresh Page to see Changes", "success");
</script>';
            }
        }
        elseif($num == 4){
            $sql = "UPDATE subteacher SET hw4 ='$content', hwdate = '$timestamp' WHERE id = '$id'";
            $result = mysqli_query($db, $sql);
            if($result){
                echo '<script>
swal("Work Assigned!", " Refresh Page to see Changes", "success");
</script>';
            }
        }
        elseif($num == 5){
            $sql = "UPDATE subteacher SET hw5 ='$content', hwdate = '$timestamp' WHERE id = '$id'";
            $result = mysqli_query($db, $sql);
            if($result){
                echo '<script>
swal("Work Assigned!", " Refresh Page to see Changes", "success");
</script>';
            }
        }
    }
    elseif($type == 'classtest'){
        if($num == 1){
            $sql = "UPDATE subteacher SET ct1 ='$content', ctdate = '$timestamp' WHERE id = '$id'";
            $result = mysqli_query($db, $sql);
            if($result){
                echo '<script>
swal("Work Assigned!", " Refresh Page to see Changes", "success");
</script>';
            }
        }
        elseif($num == 2){
            $sql = "UPDATE subteacher SET ct2 ='$content', ctdate = '$timestamp' WHERE id = '$id'";
            $result = mysqli_query($db, $sql);
            if($result){
                echo '<script>
swal("Work Assigned!", " Refresh Page to see Changes", "success");
</script>';
            }
        }
        elseif($num == 3){
            $sql = "UPDATE subteacher SET ct3 ='$content', ctdate = '$timestamp' WHERE id = '$id'";
            $result = mysqli_query($db, $sql);
            if($result){
                echo '<script>
swal("Work Assigned!", " Refresh Page to see Changes", "success");
</script>';
            }
        }
        elseif($num == 4){
            $sql = "UPDATE subteacher SET ct4 ='$content', ctdate = '$timestamp' WHERE id = '$id'";
            $result = mysqli_query($db, $sql);
            if($result){
                echo '<script>
swal("Work Assigned!", " Refresh Page to see Changes", "success");
</script>';
            }
        }
        elseif($num == 5){
            $sql = "UPDATE subteacher SET ct5 ='$content', ctdate = '$timestamp' WHERE id = '$id'";
            $result = mysqli_query($db, $sql);
            if($result){
                echo '<script>
swal("Work Assigned!", " Refresh Page to see Changes", "success");
</script>';
            }
        }
    }
    elseif($type == 'modelpaper'){
        if($num == 1){
            $sql = "UPDATE subteacher SET mp1 ='$content', mpdate = '$timestamp'  WHERE id = '$id'";
            $result = mysqli_query($db, $sql);
            if($result){
                echo '<script>
swal("Work Assigned!", " Refresh Page to see Changes", "success");
</script>';
            }
        }
        elseif($num == 2){
            $sql = "UPDATE subteacher SET mp2 ='$content', mpdate = '$timestamp'  WHERE id = '$id'";
            $result = mysqli_query($db, $sql);
            if($result){
                echo '<script>
swal("Work Assigned!", " Refresh Page to see Changes", "success");
</script>';
            }
        }
        elseif($num == 3){
            $sql = "UPDATE subteacher SET mp3 ='$content', mpdate = '$timestamp'  WHERE id = '$id'";
            $result = mysqli_query($db, $sql);
            if($result){
                echo '<script>
swal("Work Assigned!", " Refresh Page to see Changes", "success");
</script>';
            }
        }
        elseif($num == 4){
            $sql = "UPDATE subteacher SET mp4 ='$content', mpdate = '$timestamp'  WHERE id = '$id'";
            $result = mysqli_query($db, $sql);
            if($result){
                echo '<script>
                swal("Work Assigned!", " Refresh Page to see Changes", "success");
                </script>';
            }
        }
        elseif($num == 5){
            $sql = "UPDATE subteacher SET mp5 ='$content', mpdate = '$timestamp'  WHERE id = '$id'";
            $result = mysqli_query($db, $sql);
            if($result){
                echo '<script>
                swal("Work Assigned!", " Refresh Page to see Changes", "success");
                </script>';
            }
        }
    }
    else{
        echo '<script>
        swal("ERROR!", " You Choosed Something Worng!", "error");
        </script>';
    }
}

?>
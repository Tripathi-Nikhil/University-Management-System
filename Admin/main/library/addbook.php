<style>
img {
    width: 100%;
    height: 100%;
}

.form-group input {
    margin: 3px;
}

.form-group .btn {
    border-radius: 30px;
    width: 20%;

}

.imgbg {
    background-image: url('img/1bg.jpg');
    background-repeat: no-repeat;
    border-radius: 5px;
    background-size: cover;
}

.change-content:after {
    content: '';
    animation: changetext 20s infinite linear;
    font-size: 30px;

}

@keyframes changetext {
    0% {
        content: 'Welcome to Books Club!';
    }

    30% {
        content: 'Open a Book to Open Your Mind!';
    }

    60% {
        content: 'Aquiring Knowledge is Most Fruitfull Effort.';
    }

    75% {
        content: 'Today a Reader Tomorrow a Leader';
    }
    100% {
        content: 'Get Lost!';
    }
}
</style>

<div class="row">
    <div class="col-md-6 imgbg text-center">
        <h2 style="margin-top:50%;font-size:40px" class="animated text-warning fw-bolder infinite flash">" <span
                class="change-content text-white"></span> "</h2>
    </div>
    <div class="col-md-6 text-center">
        <section class="p-2">
            <img src="img/2bg.jpg" alt="" class="rounded-circle mt-2 mb-3" style="width: 180px; height: 180px;">


            <form action="" method="post">
                <div class="form-group d-flex  p-2">
                    <input type="text" name="bookid" class="form-control" value="<?=rand(1001,9999)?>" readonly>
                    <select name="bookedition" class="form-control" style="width: 550px;">
                        <option value="">Select Book Edition</option>
                        <option value="1st Edition">1st Edition</option>
                        <option value="2nd Edition">2nd Edition</option>
                        <option value="3rd Edition">3rd Edition</option>
                        <option value="4th Edition">4th Edition</option>
                        <option value="5th Edition">5th Edition</option>
                        <option value="6th Edition">6th Edition</option>
                        <option value="7th Edition">7th Edition</option>
                    </select>
                </div>
                <div class="form-group  p-2">
                    <input type="text" name="bookname" class="form-control" placeholder="Book Name">
                </div>
                <div class="form-group  p-2">
                    <input type="text" name="author" class="form-control" placeholder="Book Author Name">
                </div>
                <div class="form-group d-flex p-2">
                    <input type="text" name="pages" class="form-control" placeholder="Total Pages">
                    <input type="text" name="quantity" class="form-control" placeholder="Books Quantity">
                </div>

                <div class="form-group  p-2">
                    <input type="text" name="category" class="form-control" placeholder=" Book Category">
                </div>
                <div class="form-group p-2">
                    <input type="text" name="branch" class="form-control" placeholder="Branch">
                </div>

                <div class="form-group text-center">
                    <input type="submit" value="Submit" name="submit" class="btn btn-primary ">
                    <input type="reset" value="Reset" class="btn btn-danger ">
                </div>
            </form>
        </section>
    </div>
</div>

<?php
include '../../includes/dbconn.php';

if (isset($_POST['submit'])) {
    
    $bookedition = $_POST['bookedition'];
    $bookname = $_POST['bookname'];
    $bookid = strtoupper(substr($bookname, 0,4)).$_POST['bookid'];
    $author = $_POST['author'];
    $page = $_POST['pages'];
    $quantity = $_POST['quantity'];
    $category = $_POST['category'];
    $branch = $_POST['branch'];


    $query = "INSERT INTO library(bookid, bookname, edition, author, pages, quantity, category, branch)
     VALUES ('$bookid','$bookname','$bookedition','$author','$page','$quantity','$category','$branch')";
    $run = mysqli_query($db, $query);

    if($run)
    {
        echo '<script type="text/javascript">alert("Added Successful")</script>';
    }

    else{
        echo "not ok";
    }
}
?>
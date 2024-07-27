<?php include '../../includes/dbconn.php'?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>University Management System</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../../utility/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="../../utility/css/adminlte.min.css">
    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css"
        rel="stylesheet" type="text/css" />
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
</head>
<style>
.col-md-3 a {
    text-decoration: none;
    color: black;
    font-weight: bold;
}

.btn {
    width: 45%;
    margin-top: 8px;
    border-radius: 30px;
    flex: auto;
}

.form-control {
    border-radius: 30px;
}
</style>

<body id="body-pd">
    <?php include '_library/librarynav.php' ?>
    <?php include '_library/librarymenu.php' ?>



    <div class="row">
        <div class="col-md-9 card bg-">
            <h1 class="text-primary fw-bold text-center p-2">E-Library</h1>
            <div class="row p-1">
                <div class="col-8 card p-2 d-flex">
                    <p class="text-center fw-bold">Ask a Question<span class="text-primary fw-bolder">...</span>
                    </p>
                    <form action="_library/addques.php" method="post">
                       
                        <label class="mb-2 fw-bold"for="">Type Question</label>
                       <textarea id="editor" name="ques" rows="2" class="w-100 p-1 mt-1 " required
                            placeholder="Type a Question..."></textarea>
                            <label class="mb-2 fw-bold mt-2" for="">Type Sub Ques</label>
                        <textarea id="editor1" name="exques" rows="2" class="w-100 p-1 mb-1"
                            placeholder="More About Question..."></textarea> 
                            <label class="mb-2 fw-bold mt-2" for="">Type Answer</label>
                            <textarea id="editor2" name="Ans" rows="2" class="w-100 p-1 mb-1"
                            placeholder="More About Question..."></textarea> 
                            
                        <div class="form-group">
                            <input type="submit" name="Ask" value="Ask" class="btn btn-primary">
                            <input type="reset" name="reset" value="Reset" class="btn btn-danger">
                        </div>
                    </form>
                </div>
                <div class="card col-4" >
                    <div id="result"></div>
                    <div style="clear:both"></div>
                </div>
            </div>
        </div>
        <!-- style="overflow-y: auto; height:650px;" -->
        <div class="col-md-3 card text-center bg- p-2 stick" >
        <div class="card-header bg-primary mb-3" style="margin-top: 58px;">
        <span class="fw-bold text-white">Available Books To Read!</span>
        </div>
            <a href="e-books/1.pdf" target="blank" class="p-2">Books to Read</a>
            <a href="e-books/1.pdf" target="blank" class="p-2">Books to Read</a>
            <a href="e-books/1.pdf" target="blank" class="p-2">Books to Read</a>
            <a href="e-books/1.pdf" target="blank" class="p-2">Books to Read</a>
            <a href="e-books/1.pdf" target="blank" class="p-2">Books to Read</a>
            <a href="e-books/1.pdf" target="blank" class="p-2">Books to Read</a>
            <a href="e-books/1.pdf" target="blank" class="p-2">Books to Read</a>
            <a href="e-books/1.pdf" target="blank" class="p-2">Books to Read</a>
            <a href="e-books/1.pdf" target="blank" class="p-2">Books to Read</a>
            <a href="e-books/1.pdf" target="blank" class="p-2">Books to Read</a>
            <a href="e-books/1.pdf" target="blank" class="p-2">Books to Read</a>
            <a href="e-books/1.pdf" target="blank" class="p-2">Books to Read</a>
            <a href="e-books/1.pdf" target="blank" class="p-2">Books to Read</a>
            <a href="e-books/1.pdf" target="blank" class="p-2">Books to Read</a>
            <a href="e-books/1.pdf" target="blank" class="p-2">Books to Read</a>
            <a href="e-books/1.pdf" target="blank" class="p-2">Books to Read</a>
            <a href="e-books/1.pdf" target="blank" class="p-2">Books to Read</a>
            <a href="e-books/1.pdf" target="blank" class="p-2">Books to Read</a>
            <a href="e-books/1.pdf" target="blank" class="p-2">Books to Read</a>
        </div>
    </div>



    <script>
    $(document).ready(function() {
        load_data();

        function load_data(query) {
            $.ajax({
                url: "_library/addques.php",
                method: "post",
                data: {
                    query: query
                },
                success: function(data) {
                    $('#result').html(data);
                }
            });
        }

        $('#search_text').keyup(function() {
            var search = $(this).val();
            if (search != '') {
                load_data(search);
            } else {
                load_data();
            }
        });
    });
    </script>
    <script>
    CKEDITOR.replace( 'editor' );
    CKEDITOR.replace( 'editor1' );
                        CKEDITOR.replace( 'editor2' );
                </script>
    <script src="../../utility/js/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../utility/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../utility/js/adminlte.min.js"></script>
</body>

</html>
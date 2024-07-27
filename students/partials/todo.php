<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<style>
#todo1 ul {
    list-style: none;
    margin: 0;
    padding: 0
}

#todo1 .fa-plus {
    float: right
}

#todo1 li {
    padding-left: 4px;
    padding-top: 10px;
    background: #fff;
    min-height: 35px;
    min-height: 40px;
    color: #666
}

#todo1 li:nth-child(2n) {
    background: #f7f7f7
}

#todo {
    border-radius: 30px;
    color: white;
    width: 0;
    display: inline-block;
    transition: 0.2s linear;
    opacity: 0
}


#todo1 li:hover #todo {

    text-align: center;
    width: fit-content;
    opacity: 1.0
}
</style>
<div class="card shadow mb-4 " id="todo1" style="height: 362px; overflow-x: hidden">
    <div class="sticky-top">
        <div class="form-group card-header d-flex">
            <input type="text" class="form-control " id="work" name="addwork" required placeholder="Add New Todo">
            <button name="add" id="add-btn" class="border-0 btn-transition btn btnl-success btn-outline-success"> <i
                    class="text-white fa fa-plus"></i></button>
        </div>
    </div>
    <ul id="tasks">

    </ul>
    <div id="reply" style="height: 35px;" class="mt-auto text-center small card-footer">
        <span class="mr-2">
            <i class="fas fa-circle text-success"></i> Recent
        </span>
        <span class="mr-2">
            <i class="fas fa-circle text-warning"></i> Pending
        </span>
        <span class="mr-2">
            <i class="fas fa-circle text-danger"></i> Expired!
        </span>
    </div>
</div>




<script>
$(document).ready(function() {
    // Show Tasks
    function loadTasks() {
        $.ajax({
            url: "partials/todolist.php",
            type: "POST",
            success: function(data) {
                $("#tasks").html(data);
            }
        });
    }

    loadTasks();

    // Add Task
    $("#add-btn").on("click", function(e) {
        e.preventDefault();

        var task = $("#work").val();

        $.ajax({
            url: "partials/insert.php",
            type: "POST",
            data: {
                task: task
            },
            success: function(data) {
                $("#reply").html(data);
                loadTasks();
                $("#work").val('');
            }
        });
    });

    // Remove Task
    $(document).on("click", ".del-btn", function(e) {
        e.preventDefault();
        var id = $(this).data("id");
        var element = this;

        $.ajax({
            url: "partials/del.php",
            type: "POST",
            data: {
                id: id
            },
            success: function(data) {
                loadTasks();
                if (data == 1) {
                    $(element).closest("li").fadeOut();
                }
            }
        });
    });

    $(document).on("click", ".strbtn", function(d) {
        // e.preventDefault();
        var id = $(this).data("id");
        // var element = this;
        var element = document.getElementById(id);
        element.classList.add("text-decoration-line-through");
    });
});
</script>
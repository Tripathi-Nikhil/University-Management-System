<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<style>
ul {
    list-style: none;
    margin: 0;
    padding: 0
}

.fa-plus {
    float: right
}

li {
    padding-left: 4px;
    padding-top: 10px;
    background: #fff;
    min-height: 35px;
    min-height: 40px;
    color: #666
}

li:nth-child(2n) {
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


li:hover #todo {

    text-align: center;
    width: fit-content;
    opacity: 1.0
}
</style>
<div class="card shadow mt-4 rounded" style="height: 535px; overflow-x: hidden">
    <div class="sticky-top bg-primary rounded">
        <div class="form-group card-header d-flex">
            <input type="text" class="form-control " id="work" name="addwork" required placeholder="Add New Todo">
            <button name="add" id="add-btn" class="border-0 btn-transition btn btn-outline-success"> <i
                    class="text-white fa fa-plus"></i></button>
        </div>
    </div>
    <ul id="tasks">

    </ul>
    <div id="reply" style="height: 35px;" class="mt-auto card-footer">

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
});
</script>
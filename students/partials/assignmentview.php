<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>

<div class="" style="display:none">
    <?php
$var_id = $_GET['id'];
$var_action = $_GET['action'];
$var_work = $_GET['work'];
$var_type = $_GET['ty'];


?>
</div>
<div class="container p-3">
    <div class="card shadow">
        <div class="row mt-4">
            <div class="col-1"></div>
            <div class="col-3 p-2">
                <h3 class="fw-bold text-dark"><?=$var_type?></h3>
            </div>
            <div class="col-5"></div>
            <div class="col-3 p-2">
                <button id="print" class="btn btn-white" onclick="PrintDiv()" ><i class="fas text-danger fa-print">Print</i></button>
                <button id="download" onclick="DownloadDiv()" class="btn btn-white"><i
                        class="fas text-primary fa-download">Download</i></button>
            </div>
        </div>
        <?php
        date_default_timezone_set('Asia/Kolkata');
$c = mysqli_query($db,"SELECT $var_work FROM subteacher WHERE id = $var_id");
    $f = mysqli_fetch_assoc($c);
?>


        <hr class="p-2 text-dark mb-4">
        <div class="card border-0">
            <div class="card-body" id="view">
                <?=$f["$var_work"]?>
            </div>
        </div>
    </div>

    <script type="text/javascript">  
    function PrintDiv() 
   {  
       var divContents = document.getElementById("view").innerHTML;  
       var printWindow = window.open('', '', '');  
       printWindow.document.write('<html><head><title>Print DIV Content</title>');  
       printWindow.document.write('</head><body >');  
       printWindow.document.write(divContents);  
       printWindow.document.write('</body></html>');  
       printWindow.document.close();  
       printWindow.print(); 
       printwindow.close(); 
    }  

    function DownloadDiv() {
        const invoice = this.document.getElementById("view");
        console.log(invoice);
        console.log(window);
        var file = '<?php echo $var_type.'.pdf'; ?>';
        var opt = {
            margin: 8,
            filename: file
        };
        html2pdf().from(invoice).set(opt).save();
    }
    </script>
</script> 
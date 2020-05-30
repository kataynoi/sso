<div class="panel panel-info">
    <div class="panel-heading">
       อำนาจหน้าที่ สาธารณสุขอำเภอ
    </div>
    <div class="panel-body">
        <?php
        echo $authority->name;
        if($authority->file !=''){
            echo "<span class='center'><img src='".base_url('assets/uploads/').$authority->file."' width='100%></span>";
        }
        ?>
    </div>
</div>
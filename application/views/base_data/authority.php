﻿<div class="panel panel-info">
    <div class="panel-heading">
       อำนาจหน้าที่ สาธารณสุขอำเภอ
    </div>
    <div class="panel-body">
        <?php
        echo $authority->name;
        if (!empty($authority->file)) {
            $type = explode(".", $authority->file);
            if ($type[1] == 'jpg' || $type[1] == 'jpeg' || $type[1] == 'png' || $type[1] == 'gif') {
                echo "<span class='center'><img src='" . base_url('assets/uploads/') . $authority->file . "' width='100%'></span>";

            }elseif($type[1] == 'xlsx' || $type[1] == 'pdf' || $type[1] == 'xls' || $type[1] == 'doc' || $type[1] == 'docx'){
                header("refresh:1;url=".base_url('assets/uploads/').$authority->file ."" );
            }
        }
        ?>
    </div>
    </div>
</div>
﻿<div class="panel panel-info">
    <div class="panel-heading">
        ทำเนียบผู้บริหารหน่วยงาน
    </div>
    <div class="panel-body">
        <?php
        echo $boss_list->name;
        if (!empty($boss_list->file)) {
            $type = explode(".", $boss_list->file);
            if ($type[1] == 'jpg' || $type[1] == 'jpeg' || $type[1] == 'png' || $type[1] == 'gif') {
                echo "<span class='center'><img src='" . base_url('assets/uploads/') . $boss_list->file . "' width='100%'></span>";

            }elseif($type[1] == 'xlsx' || $type[1] == 'pdf' || $type[1] == 'xls' || $type[1] == 'doc' || $type[1] == 'docx'){
                header("refresh:1;url=".base_url('assets/uploads/').$boss_list->file ."" );
            }
        }
        ?>
    </div>
    </div>
</div>
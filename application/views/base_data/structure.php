<div class="panel panel-info">
    <div class="panel-heading">
        โครงสร้างหน่วยงาน
    </div>
    <div class="panel-body">
        <?php
        echo $structure->name;
        if($structure->file !=''){
            echo "<span class='center'><img src='".base_url('assets/uploads/').$structure->file."'></span>";
        }
        ?>
    </div>
</div>
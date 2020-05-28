<div class="panel panel-info">
    <div class="panel-heading">
        ผู้บริหารหน่วยงาน
    </div>
    <div class="panel-body">
        <?php
        echo $boss->name;
        if($boss->file !=''){
            echo "<span class='center'><img src='".base_url('assets/uploads/').$boss->file."'></span>";
        }
        ?>
    </div>
</div>
<div class="panel panel-info">
    <div class="panel-heading">
        ทำเนียบผู้บริหารหน่วยงาน
    </div>
    <div class="panel-body">
        <?php
        echo $boss_list->name;
        if($boss_list->file !=''){
            echo "<span class='center'><img src='".base_url('assets/uploads/').$boss_list->file."' width='100%></span>";
        }
        ?>
    </div>
</div>
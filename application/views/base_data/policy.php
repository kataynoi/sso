<div class="panel panel-info">
    <div class="panel-heading">
        นโยบายผู้บริหาร
    </div>
    <div class="panel-body">
        <?php
        echo $policy->name;
        if($policy->file !=''){
            echo "<span class='center'><img src='".base_url('assets/uploads/').$policy->file."' width='100%></span>";
        }
        ?>
    </div>
</div>
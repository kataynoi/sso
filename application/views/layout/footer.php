<?php
$link = $this->db->get('link')->result();
?>
<div class="row" style="height: 100px">.</div>
<div class="fixed-bottom" style="position: fixed;
    bottom: 0;
    width: 100%;
    border:0px solid black;
    background: #f8f8f8;
    padding-left: 320px;
    padding-right: 10%;
    padding-top:20px;">
    <div class="row topic"> ลิงก์ที่เกี่ยวข้อง </div>
    <div class="row ">
        <hr class="hr_news1">
    </div>
    <div class="row">
        <?php
        foreach ($link as $l) {
            echo "<div class='col-md-3 '><a href='".$l->link."' target='_blank'>" . $l->name . "</div>";
        }

        ?>
    </div>
    <div class="row ">
        <hr class="hr_news1">
    </div>
    <div class="row topic">
    </div>


</div>

<script src="<?php echo base_url() ?>assets/vendor/js/jquery.dataTables.min.js" charset="utf-8"></script>
<script src="<?php echo base_url() ?>assets/vendor/js/dataTables.bootstrap4.min.js" charset="utf-8"></script>
<link href="<?php echo base_url() ?>assets/vendor/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<html>
<body>
<br>

<div class="row">
    <div class="panel panel-info ">
        <div class="panel-heading w3-theme">
            <i class="fa fa-user fa-2x "></i> ข่าว/ประกาศ
             <button class="btn btn-success pull-right" id="add_data" data-toggle="modal" data-target="#frmModal"><i class="fa fa-plus-circle"></i> Add</button>
</span>

        </div>
        <div class="panel-body">

            <table id="table_data" class="table table-responsive">
                <thead>
                <tr>
                    <th>ID</th><th>หัวข้อ</th><th>รายละเอียด</th><th>วันที่ส่ง</th><th>ผู้ส่ง</th><th>หมวดหมู่</th><th>จำนวนการอ่าน</th><th>ไฟลล์</th>
                    <th>#</th>
                </tr>
                </thead>

            </table>
        </div>

    </div>

</div>


<div class="modal fade" id="frmModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">เพิ่มข่าว/ประกาศ</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <input type="hidden" id="action" value="insert">
        <input type="hidden" class="form-control" id="row_id" placeholder="ROWID" value=""><div class="form-group">
                    <label for="id">ID</label>
                    <input type="text" class="form-control" id="id" placeholder="ID" value=""></div><div class="form-group">
                    <label for="topic">หัวข้อ</label>
                    <input type="text" class="form-control" id="topic" placeholder="หัวข้อ" value=""></div><div class="form-group">
                    <label for="detail">รายละเอียด</label>
                    <input type="text" class="form-control" id="detail" placeholder="รายละเอียด" value=""></div><div class="form-group">
                    <label for="date_sent">วันที่ส่ง</label>
                    <input type="text" class="form-control" id="date_sent" placeholder="วันที่ส่ง" value=""></div><div class="form-group">
                    <label for="user_id">ผู้ส่ง</label>
                    <select  class="form-control" id="user_id" placeholder="ผู้ส่ง" value="">
                        <option>-------</option>
                        <?php
                        foreach ($users as $r) {
                                echo "<option value=$r->id > $r->name </option>";} ?>
                    </select></div><div class="form-group">
                    <label for="cat_id">หมวดหมู่</label>
                    <select  class="form-control" id="cat_id" placeholder="หมวดหมู่" value="">
                        <option>-------</option>
                        <?php
                        foreach ($news_category as $r) {
                                echo "<option value=$r->id > $r->name </option>";} ?>
                    </select></div><div class="form-group">
                    <label for="read">จำนวนการอ่าน</label>
                    <input type="text" class="form-control" id="read" placeholder="จำนวนการอ่าน" value=""></div><div class="form-group">
                    <label for="files">ไฟลล์</label>
                    <input type="text" class="form-control" id="files" placeholder="ไฟลล์" value=""></div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-success" id="btn_save">Save</button><button type="button" class="btn btn-danger" id="btn_close" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


<script src="<?php echo base_url() ?>assets/apps/js/news.js" charset="utf-8"></script>

<!--         foreach ($invit_type as $r) {
                                if ($outsite["invit_type"] == $r->id) {
                                    $s = "selected";
                                } else {
                                    $s = "";
                                }
                                echo "<option value=" $r->id" $s > $r->name </option>";

}
-->
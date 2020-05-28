
<!--<div class="col col-lg-12" style="padding-top: 20px;margin: 2px">
    <div class="col-lg-3 ">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-user-md fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge" id="percent_audit"><?php /*echo $all_employee */?></div>
                        <div>บุคลากร</div>
                    </div>
                </div>
            </div>
            <a href="<?php /**/?>">
                <div class="panel-footer">
                    <span class="pull-left">รายละเอียด</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-desktop fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge" id="percent_audit_true"><?php /*echo $all_pc */?></div>
                        <div>จำนวน PC</div>
                    </div>
                </div>
            </div>
            <a href="<?php /*echo site_url('com_survey'); */?>">
                <div class="panel-footer">
                    <span class="pull-left">รายละเอียด</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-laptop fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php /*echo $all_nb */?></div>
                        <div>NoteBook</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">รายละเอียดเพิ่มเติม</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-print fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php /*echo $all_printer */?></div>
                        <div>Printer</div>
                    </div>
                </div>
            </div>
            <a href="<?php /*echo site_url('printer_survey');*/?>">
                <div class="panel-footer">
                    <span class="pull-left">รายละเอียดเพิ่มเติม</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>-->
<div class="row">
    <div class="col-lg-12">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: 15px">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="desc">..</div>
                    <img src="<?php echo base_url()?>assets/images/banner/1.jpg" alt="Los Angeles" style="width:100%;">
                </div>

                <div class="item">
                    <div class="desc">..</div>
                    <img src="<?php echo base_url()?>assets/images/banner/2.jpg" alt="Chicago" style="width:100%;">
                </div>

                <div class="item">
                    <div class="desc">..</div>
                    <img src="<?php echo base_url()?>assets/images/banner/3.jpg" alt="New york" style="width:100%;">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

</div>
<br>
<div class='row'>
    <div class='col col-lg-12'>
        <div class="panel  panel-default">
            <div class="panel-heading w3-theme-l1">
                ข่าวประชาสัมพันธ์
            </div>
            <div class="panel-body">
            <div class="row">
                <tbody>
                <?php
                $line = 0;
                foreach($news1 as $row){
                    $line++;
                    echo '<div class="row" style="">
                                <div class=" col-md-1 text-center " style="margin-left: 50px;color: white;background-image: url(assets/img/topic_bg.png); background-repeat: no-repeat;background-position: center;position: relative;height: 100px;">
                                <span class="highlight2">'
                                    . substr(to_thai_date_short($row->date_sent),0,-5) . '</span></div>
                                <div class="col-md-10 pull-right topic " style="height:60px;">
                                <a href="'.site_url('news/news_detail/').$row->id.'">
                                            '. $row->topic .'
                                            </a>
                                            </div>
                                <div class="col-xs-6 col-md-10 pull-right" style="border">
                                    <i class="fa fa-eye" aria-hidden="true"> &nbsp;</i><span >'. $row->read . ' view</span>&nbsp;&nbsp;&nbsp;
                                    <i class="fa fa-calendar" aria-hidden="true"> </i><span > ' . to_thai_date_short($row->date_sent) . '</span>
                                    <span class="pull-right w3-text-color" style="padding-right:30px;" ><i class="fa fa-user" aria-hidden="true"> </i> ' . get_user_name($row->user_id) . '</span>
                                </div>
                            </div> <hr class="hr_news1">';
                }
                ?>
                </tbody>
            </div>
            </div>
        </div>
    </div>
    <div class='col col-lg-12'>
        <div class="panel  panel-default">
            <div class="panel-heading w3-theme-l1">
                ข่าวจัดซื้อจัดจ้าง
            </div>
            <div class="panel-body">
                <div class="row">
                    <tbody>
                    <?php
                    $line = 0;
                    foreach($news2 as $row){
                        $line++;
                        echo '<div class="row" style="">
                                <div class=" col-md-1 text-center " style="margin-left: 50px;color: white;background-image: url(assets/img/topic_bg.png); background-repeat: no-repeat;background-position: center;position: relative;height: 100px;">
                                <span class="highlight2">'
                            . substr(to_thai_date_short($row->date_sent),0,-5) . '</span></div>
                                <div class="col-md-10 pull-right topic " style="height:60px;">
                                <a href="'.site_url('news/news_detail/').$row->id.'">
                                            '. $row->topic .'
                                            </a>
                                            </div>
                                <div class="col-xs-6 col-md-10 pull-right" style="border">
                                    <i class="fa fa-eye" aria-hidden="true"> &nbsp;</i><span >'. $row->read . ' view</span>&nbsp;&nbsp;&nbsp;
                                    <i class="fa fa-calendar" aria-hidden="true"> </i><span > ' . to_thai_date_short($row->date_sent) . '</span>
                                    <span class="pull-right w3-text-color" style="padding-right:30px;" ><i class="fa fa-user" aria-hidden="true"> </i> ' . get_user_name($row->user_id) . '</span>
                                </div>
                            </div> <hr class="hr_news1">';
                    }
                    ?>
                    </tbody>
                </div>
            </div>
        </div>
    </div>
    <div class='col col-lg-12'>
        <div class="panel  panel-default">
            <div class="panel-heading w3-theme-l1">
                เอกสารวิชาการคู่มือ
            </div>
            <div class="panel-body">
                <div class="row">
                    <tbody>
                    <?php
                    $line = 0;
                    foreach($news3 as $row){
                        $line++;
                        echo '<div class="row" style="">
                                <div class=" col-md-1 text-center " style="margin-left: 50px;color: white;background-image: url(assets/img/topic_bg.png); background-repeat: no-repeat;background-position: center;position: relative;height: 100px;">
                                <span class="highlight2">'
                            . substr(to_thai_date_short($row->date_sent),0,-5) . '</span></div>
                                <div class="col-md-10 pull-right topic " style="height:60px;">
                                <a href="'.site_url('news/news_detail/').$row->id.'">
                                            '. $row->topic .'
                                            </a>
                                            </div>
                                <div class="col-xs-6 col-md-10 pull-right" style="border">
                                    <i class="fa fa-eye" aria-hidden="true"> &nbsp;</i><span >'. $row->read . ' view</span>&nbsp;&nbsp;&nbsp;
                                    <i class="fa fa-calendar" aria-hidden="true"> </i><span > ' . to_thai_date_short($row->date_sent) . '</span>
                                    <span class="pull-right w3-text-color" style="padding-right:30px;" ><i class="fa fa-user" aria-hidden="true"> </i> ' . get_user_name($row->user_id) . '</span>
                                </div>
                            </div> <hr class="hr_news1">';
                    }
                    ?>
                    </tbody>
                </div>
            </div>
        </div>
    </div>

    <div class='col col-lg-12'>
        <div class="panel panel-default ">
            <div class="panel-heading w3-theme-l2">
                การประเมินคุณธรรมและความโปร่งใสในการดำเนินงานของหน่วยงานภาครัฐ (Integrity & Transparency Assessment : ITA)
            </div>
            <div class="panel-body">
                <table class=" table table-responsive" id="tbl_ita">
                    <thead>
                    <th>#</th>
                    <th>EBIT</th>
                    <th>items</th>
                    </thead>
                    <tbody>

                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <div class='col col-lg-12'>
        <div class="panel  panel-default">
            <div class="panel-heading w3-theme-l3">
                ผลการดำเนินงาน
            </div>
            <div class="panel-body">
                <ul class="list-group">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url() ?>assets/apps/js/dashboard.js" charset="utf-8"></script>
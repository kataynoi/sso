
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
                    <div class="desc">This Is Description</div>
                    <img src="<?php echo base_url()?>assets/images/banner/la.jpg" alt="Los Angeles" style="width:100%;">
                </div>

                <div class="item">
                    <div class="desc">This Is Description</div>
                    <img src="<?php echo base_url()?>assets/images/banner/chicago.jpg" alt="Chicago" style="width:100%;">
                </div>

                <div class="item">
                    <div class="desc">This Is Description</div>
                    <img src="<?php echo base_url()?>assets/images/banner/ny.jpg" alt="New york" style="width:100%;">
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
        <div class="panel  panel-default w3-theme-l1">
            <div class="panel-heading ">
                ข่าวประชาสัมพันธ์
            </div>
            <div class="panel-body">

            </div>
        </div>
    </div>
    <div class='col col-lg-12'>
        <div class="panel panel-default ">
            <div class="panel-heading w3-theme-l1">
                การประเมินคุณธรรมและความโปร่งใสในการดำเนินงานของหน่วยงานภาครัฐ (Integrity & Transparency Assessment : ITA)
            </div>
            <div class="panel-body">
                <table class=" table table-responsive">
                    <thead>
                    <th>#</th>
                    <th>EBIT</th>
                    <th>items</th>
                    </thead>
                    <tbody>
                        <?php
                        foreach($ita_ebit as $r){
                            echo "<tr><td>$r->id</td><td>$r->name</td><td><i class='fa fa-arrow-circle-down'></i></td></tr>";
                        }
                        ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <div class='col col-lg-12'>
        <div class="panel  panel-default">
            <div class="panel-heading w3-theme-l1">
                ผลการดำเนินงาน
            </div>
            <div class="panel-body">

            </div>
        </div>
    </div>
</div>
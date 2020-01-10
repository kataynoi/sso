<div class="sidebar w3-theme-l5" role="navigation" style="padding-top: 15px;">
    <div class="panel panel-default">

        <div class="panel-body text-center">
            <img src="<?php echo base_url() . 'assets/images/users/' . $boss->boss . '.jpg'; ?>"
                 class="img-responsive img-rounded" style="width:204px;height:auto;">
            <br> <?php echo $boss->name . "<br>" . $boss->position; ?>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="sidebar-nav navbar-collapse" id="left_slide">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="<?php echo site_url(); ?>"><i class="fas fa-chart-line"></i> Home</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('outsite') ?>"><i class="fa fa-bus fa-fw"></i>
                            ผู้บริหารหน่วยงาน<span
                                class="fa arrow"></span></a></li>

                    <li>
                        <a href="<?php echo site_url('com_survey') ?>"><i class="fas fa-chart-line"></i> นโยบายผู้บริหาร</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('printer_survey') ?>"><i class="fas fa-chart-line"></i> โครงส้รางหน่วยงาน </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('switch_survey') ?>"><i class="fas fa-chart-line"></i> อำนาจหน้าที่ สาธารณสุขอำเภอ</a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('scanner') ?>"><i class="fas fa-chart-line"></i> กฏหมายสาธารณสุข</a>
                    </li>

                    <!--            <li>
                <a href="<?php /*echo site_url('signin/')*/ ?>"><i class="far fa-calendar-check"></i> แจ้งซ่อม</a>
            </li>-->
                    <li>
                        <a href="<?php echo site_url('admin') ?>"><i class="far fa-calendar-check">
                                Administrator</i></a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            รพ.สต.
        </div>
        <div class="panel-body ">
            <ul class="list-group list-group-flush" id="side-menu">

                <?php
                foreach ($office as $r) {
                    echo '<li class="list-group-item"><a href="http://gishealth.moph.go.th/healthmap/info.php?maincode=' . $r['id'] . '" target="_bank">' . str_replace('โรงพยาบาลส่งเสริมสุขภาพตำบล', 'รพ.สต.', $r['name']) . '</a></li>';
                }
                ?>

            </ul>
        </div>
    </div>

    <!-- /.sidebar-collapse -->
</div>

<script src="<?php echo base_url() ?>assets/apps/js/search.js" charset="utf-8"></script>

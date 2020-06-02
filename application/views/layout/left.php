<div class="sidebar w3-theme-l5" role="navigation" style="padding-top: 15px;">
    <div class="panel panel-default">

        <div class="panel-body text-center">
            <img src="<?php echo base_url() . 'assets/images/users/' . $this->config->item('boss_id') . '.jpg'; ?>"
                 class="img-responsive img-rounded" style="width:204px;height:auto;">
            <br> <?php echo $this->config->item('boss_name') . "<br>" . $this->config->item('boss_position'); ?>
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
                        <a href="<?php echo site_url('base_data/boss') ?>"><i class="fa fa-bus fa-fw"></i>
                            ผู้บริหารหน่วยงาน</a></li>

                    <li>
                        <a href="<?php echo site_url('base_data/policy') ?>"><i class="fas fa-chart-line"></i> นโยบายผู้บริหาร</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('base_data/vision') ?>"><i class="fas fa-chart-line"></i> วิสัยทัศน์ พันธกิจ ค่านิยม</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('base_data/structure') ?>"><i class="fas fa-chart-line"></i>
                            โครงส้รางหน่วยงาน </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('base_data/authority') ?>"><i class="fas fa-chart-line"></i> อำนาจหน้าที่ </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('scanner') ?>"><i class="fas fa-chart-line"></i>
                            กฏหมายสาธารณสุข</a>
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
        <div class="panel-heading"> <i class="fa fa-neuter"></i> ข่าวประชาสัมพันธ์ </div>
        <div class="panel-body">
            <div class="sidebar-nav navbar-collapse" id="left_slide">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="<?php echo site_url('news') ?>"><i class="fas fa-chart-line"></i>
                            ข่าวประชาสัมพันธ์ทั้งหมด </a>
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
<!--
            <ul class="list-group list-group-flush" id="side-menu">

                <li class="list-group-item"><a href="http://gishealth.moph.go.th/healthmap/info.php?maincode=05013"
                                               target="_bank">รพ.สต.บ้านดอนติ้ว</a></li>
                <li class="list-group-item"><a href="http://gishealth.moph.go.th/healthmap/info.php?maincode=05014"
                                               target="_bank">รพ.สต.บ้านดงยางน้อย</a></li>
                <li class="list-group-item"><a href="http://gishealth.moph.go.th/healthmap/info.php?maincode=05015"
                                               target="_bank">รพ.สต.บ้านดอนหมี</a></li>
                <li class="list-group-item"><a href="http://gishealth.moph.go.th/healthmap/info.php?maincode=05016"
                                               target="_bank">รพ.สต.บ้านเม็กคำ</a></li>
                <li class="list-group-item"><a href="http://gishealth.moph.go.th/healthmap/info.php?maincode=05017"
                                               target="_bank">รพ.สต.บ้านแก่นท้าว</a></li>
                <li class="list-group-item"><a href="http://gishealth.moph.go.th/healthmap/info.php?maincode=05018"
                                               target="_bank">รพ.สต.บ้านสำโรง</a></li>
                <li class="list-group-item"><a href="http://gishealth.moph.go.th/healthmap/info.php?maincode=05019"
                                               target="_bank">รพ.สต.บ้านนาสีนวล</a></li>
                <li class="list-group-item"><a href="http://gishealth.moph.go.th/healthmap/info.php?maincode=05020"
                                               target="_bank">รพ.สต.บ้านหนองบะ</a></li>
                <li class="list-group-item"><a href="http://gishealth.moph.go.th/healthmap/info.php?maincode=05021"
                                               target="_bank">รพ.สต.บ้านโนนม่วง</a></li>
                <li class="list-group-item"><a href="http://gishealth.moph.go.th/healthmap/info.php?maincode=05022"
                                               target="_bank">รพ.สต.บ้านดอนหลี่</a></li>
                <li class="list-group-item"><a href="http://gishealth.moph.go.th/healthmap/info.php?maincode=05023"
                                               target="_bank">รพ.สต.บ้านโนนจาน</a></li>
                <li class="list-group-item"><a href="http://gishealth.moph.go.th/healthmap/info.php?maincode=05024"
                                               target="_bank">รพ.สต.บ้านเมืองเตา</a></li>
                <li class="list-group-item"><a href="http://gishealth.moph.go.th/healthmap/info.php?maincode=05025"
                                               target="_bank">รพ.สต.บ้านหนองแก</a></li>
                <li class="list-group-item"><a href="http://gishealth.moph.go.th/healthmap/info.php?maincode=05026"
                                               target="_bank">รพ.สต.บ้านมะโบ่</a></li>
                <li class="list-group-item"><a href="http://gishealth.moph.go.th/healthmap/info.php?maincode=05027"
                                               target="_bank">รพ.สต.บ้านหนองระเวียง</a></li>
                <li class="list-group-item"><a href="http://gishealth.moph.go.th/healthmap/info.php?maincode=05028"
                                               target="_bank">รพ.สต.บ้านหนองหว้าเฒ่า</a></li>
                <li class="list-group-item"><a href="http://gishealth.moph.go.th/healthmap/info.php?maincode=05029"
                                               target="_bank">รพ.สต.บ้านสระแคน</a></li>
                <li class="list-group-item"><a href="http://gishealth.moph.go.th/healthmap/info.php?maincode=05030"
                                               target="_bank">รพ.สต.บ้านสระบาก</a></li>
                <li class="list-group-item"><a href="http://gishealth.moph.go.th/healthmap/info.php?maincode=05031"
                                               target="_bank">รพ.สต.บ้านเมืองเสือ</a></li>
                <li class="list-group-item"><a href="http://gishealth.moph.go.th/healthmap/info.php?maincode=13937"
                                               target="_bank">รพ.สต.บ้านเขวาทุ่ง</a></li>
            </ul>-->
        </div>
    </div>

    <!-- /.sidebar-collapse -->
</div>

<script src="<?php echo base_url() ?>assets/apps/js/search.js" charset="utf-8"></script>

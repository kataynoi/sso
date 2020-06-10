<div class="navbar-header w3-theme" style="padding: 10px">
    <a class="navbar-brand w3-theme" href="<?php echo base_url() ?>"><?php echo version(); ?>  </a>
    <a class="navbar-brand w3-theme"><?php echo $this->session->userdata('hosname') ?>
    <?php echo " " . $this->session->userdata('fullname') ?></div></a>
<!-- /.navbar-header -->
<ul class="nav navbar-top-links navbar-right w3-theme">
    <li class="dropdown">

        <?php
        if ($this->session->userdata('id') != '') {
            echo "
<a class='dropdown-toggle' data-toggle='dropdown'' href='#'>
            <i class='fa fa-user fa-fw'></i> <i class='fa fa-caret-down'></i></a>
            <ul class='dropdown-menu dropdown-user'>
            <li><a href=" . site_url('user/user_profile/') . $this->session->userdata('id') . "><i class='fa fa-user fa-fw'></i> User Profile</a>
            </li>
             <li><a href=" . site_url('admin/') . $this->session->userdata('id') . "><i class='fa fa-user fa-fw'></i>Admin</a>
            </li>
            <li class='divider'></li>
            <li><a href=" . site_url('user/logout') . "><i class='fa fa-sign-out fa-fw'></i> Logout</a>
            </li>
        </ul> ";
        } else {
            echo "<a class=' btn navbar-brand btn-outline' style='margin-top:10px;' href='" . site_url('user/login') . "'><i class='fa fa-sign-in' fa-2x></i>  Login </a>";
        }
        ?>
    </li>
</ul>

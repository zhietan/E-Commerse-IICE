<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>assets/gambar/iice-logo.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('username'); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <div class="user-panel">
        <div class="pull-left">
          <a href="#" class="label label-primary" style="color:#ffffff;"><i class="fa fa-user"></i> Profil</a>
        </div>
        <div class="pull-right">
          <a href="<?php echo base_url(); ?>admin/login_admin/keluar" onclick="javascript:return confirm('lanjut untuk keluar dari sistem?');" oncontextmenu="return false" class="label label-danger" style="color:#ffffff;"><i class="fa fa-sign-out"></i> Keluar</a>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header text-center" style="color: #ffffff;"><b>MAIN MENU</b></li>
        <li>
          <a href="<?php echo base_url(); ?>admin/a_dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <!-- <small class="label pull-right bg-green">new</small> -->
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-id-card-o"></i> <span>Library</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="#"><i class="fa fa-user"></i> User Account</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
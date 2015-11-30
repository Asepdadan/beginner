<!--script select -->
<?php
         $username = $this->session->userdata('username');
          

        $req = $this->db->query("select username,nama_depan,nama,email from daftar where username='$username' ");

        foreach ($req->result_array() as $key) {
        
        ?>
<!--end -->

    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="<?php echo base_url().'index.php/dashbord/';?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>D-</b>L</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>D-LEARNING</b></span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <!-- Menu toggle button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">1</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 1 messages</li>
                  <li>
                    <!-- inner menu: contains the messages -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <!-- User Image -->
                            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
                          </div>
                          <!-- Message title and timestamp -->
                          <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <!-- The message -->
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li><!-- end message -->
                    </ul><!-- /.menu -->
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li><!-- /.messages-menu -->

              <!-- Notifications Menu -->
              <li class="dropdown notifications-menu">
                <!-- Menu toggle button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">7</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- Inner Menu: contains the notifications -->
                    <ul class="menu">
                      <li><!-- start notification -->
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li><!-- end notification -->
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              <!-- Tasks Menu -->
              <li class="dropdown tasks-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">9</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 9 tasks</li>
                  <li>
                    <!-- Inner menu: contains the tasks -->
                    <ul class="menu">
                      <li><!-- Task item -->
                        <a href="#">
                          <!-- Task title and progress text -->
                          <h3>
                            Design some buttons
                            <small class="pull-right">20%</small>
                          </h3>
                          <!-- The progress bar -->
                          <div class="progress xs">
                            <!-- Change the css width attribute to simulate progress -->
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">20% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                    </ul>
                  </li>
                  <li class="footer">
                    <a href="#">View all tasks</a>
                  </li>
                </ul>
              </li>
              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src="<?php echo base_url()?>images/test.jpg" class="user-image" alt=""/>
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  
                    
                  
                  <span class="hidden-xs"><?php echo $key['nama']; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="<?php echo base_url()?>images/test.jpg" class="img-circle" alt="" />
                    <p>
                    <?php echo $key['nama_depan']; ?> 
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo base_url().'index.php/c_login/logout/';?>" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>

              
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class=""></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url()?>images/test.jpg" class="img-circle" alt=" <?php echo $this->session->userdata('username'); ?>" />
            </div>
            <div class="pull-left info">
              <?php echo $key['nama_depan']; ?>  
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i>Online</a>
            </div>
          </div>
          
          <!-- search form (Optional) -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Cari..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">SIDEBAR</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active">
              <a href="<?php echo base_url().'index.php/dashbord/';?>">
                <i class="fa fa-fw fa-graduation-cap"></i></i> <span>Beranda</span>
              </a>
            </li>

            <li>
              <a href="<?php echo base_url().'index.php/message/';?>">
               <i  class="fa fa-fw fa-envelope-o"></i> <span>Pesan</span><i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i  class="fa fa-fw fa-inbox"></i>Pesan Masuk</a></li> 
                <li><a href="#"><i  class="fa fa-fw fa-history"></i>Pesan Keluar</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="">
                <i class="fa fa-fw fa-edit"></i></i> <span>Input Soal</span>
              </a>
                <ul class="treeview-menu">
                <li><a href="<?php echo base_url().'index.php/c_soal/input_soal1/';?>"><i  class="fa fa-fw fa-pencil"></i>Input Soal Pemula</a></li> 
                <li><a href="#"><i  class="fa fa-fw fa-pencil"></i>#</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
               <i class="fa fa-fw fa-user"></i> <span>Profile</span><i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i  class="fa fa-fw fa-photo"></i>Galery Foto</a></li> 
                <li><a href="#"><i  class="fa fa-fw fa-plus-square"></i>Sekor Akhir</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
               <i  class="fa fa-fw fa-book"></i> <span>Belajar</span><i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li ><a href="<?php echo base_url().'index.php/c_soal/';?>"><i  class="fa fa-fw fa-book"></i>Soal Pemula<i ></i></a>
                   
                </li>
                <li><a href="#"><i  class="fa fa-fw fa-book"></i>Soal Menengah</a></li>
                <li><a href="#"><i  class="fa fa-fw fa-book"></i>Soal Master</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#"><i class="fa fa-share"></i> <span>Setting</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Setting Lainnya</a></li>
                <li><a href="<?php echo base_url().'index.php/data_akun/';?>">daftar akun</a></li>
                <li><a href="<?php echo base_url().'index.php/c_login/logout/';?>">Logout</a></li>
              </ul>
            </li>
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

     <!--script foreach end -->

     <?php } ?>
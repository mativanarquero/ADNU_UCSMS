<div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                <a href="index.html"><img src="<?php echo base_url()?>/assets/images/icon/logo.png" alt="logo"></a>
                    <br><br>
                    <h5 class="text-style"><?php echo $this->session->userdata('first_name');?>
                                           <?php echo $this->session->userdata('last_name');?>
                                           <?php echo $this->session->userdata('middle_name');?>
                                        
                    </h5>
                    <h6 class="text-style"><?php echo $this->session->userdata('faculty_type');?></h6>
                    <h6 class="text-style"><?php echo $this->session->userdata('department_name');?></h6>
                </div>
          
            </div>
            <div class="main-menu">
                    <div class="menu-inner">
                        <nav>
                            <ul class="metismenu" id="menu">
                                <li class>
                                        <a href="<?php echo base_url('chairperson_dashboard')?>"><i class="ti-dashboard"></i><span>dashboard</span></a>
       
                                </li>
                  
                                <li class="active">
                                    <a href="javascript:void(0)" aria-expanded="true"><i class="ti-timer"></i><span>Manage Schedule</span></a>
                                    <ul class="collapse">
                                        <li><a href="<?php echo base_url('add_schedule')?>">Add Schedule</a></li>
                                        <li class="active"><a href=="<?php echo base_url('')?>">View My Schedule</a></li>
                                        

                                    </ul>
                                </li>
                                <li>
                                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-users"></i><span>Manage Faculty</span></a>
                                        <ul class="collapse">
                                        <li><a href="<?php echo base_url('view_faculty')?>">View Faculty</a></li>                    
                                                <li><a href="<?php echo base_url('view_subject')?>">View Subject</a></li>                 
    
                                        </ul>
                                    </li>
                                    <li>
                                            <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-calendar"></i><span>My Schedule</span></a>
                                            <ul class="collapse">
                                                <li><a href="<?php echo base_url('my_schedule.php')?>">View Schedule</a></li>
                                            </ul>
                                        </li>
                                <li>
                                    <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-book"></i><span>Subject Request</span></a>
                                    <ul class="collapse">
                                        <li><a href="<?php echo base_url('my_request')?>">My Request</a></li>
                                        <li><a href="<?php echo base_url('chair_request')?>">Other Request</a></li>
                                    </ul>
                                </li>
                                <li>
                                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-clipboard"></i>
                                            <span>Reports</span></a>
                                        <ul class="collapse">
                                            <li><a href="table-basic.html">basic table</a></li>
                                            <li><a href="table-layout.html">table layout</a></li>
                                            <li><a href="datatable.html">datatable</a></li>
                                        </ul>
                                        </li>
                            </ul>
                        </nav>
                    </div>
                </div>
        </div>
        <!-- sidebar menu area end -->
            <!-- main content area start -->
            <div class="main-content">
                <!-- header area start -->
                <div class="header-area">
                    <div class="row align-items-center">
                        <!-- nav and search button -->
                        <div class="col-md-6 col-sm-8 clearfix">
                            <div class="nav-btn pull-left">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <!-- profile info & task notification -->
                        <div class="col-md-6 col-sm-4 clearfix">
                            <ul class="notification-area pull-right">
                                <li class="dropdown">
                                    <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
                                        <span>2</span>
                                    </i>
                                    <div class="dropdown-menu bell-notify-box notify-box">
                                        <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
                                        <div class="nofity-list">
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                                <div class="notify-text">
                                                    <p>You have Changed Your Password</p>
                                                    <span>Just Now</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                                <div class="notify-text">
                                                    <p>New Commetns On Post</p>
                                                    <span>30 Seconds ago</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                                                <div class="notify-text">
                                                    <p>Some special like you</p>
                                                    <span>Just Now</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                                <div class="notify-text">
                                                    <p>New Commetns On Post</p>
                                                    <span>30 Seconds ago</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                                                <div class="notify-text">
                                                    <p>Some special like you</p>
                                                    <span>Just Now</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                                <div class="notify-text">
                                                    <p>You have Changed Your Password</p>
                                                    <span>Just Now</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                                <div class="notify-text">
                                                    <p>You have Changed Your Password</p>
                                                    <span>Just Now</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
            
                                <li>
                                                <h5 data-toggle="dropdown">  <i class="ti-settings"></i></h5>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="<?php echo site_url('teacher_profile');?>">Settings</a>
                                                    <a class="dropdown-item" href="<?php echo site_url('teacher_login');?>">Log Out</a>
                                                
                                            </div>
                                    
                                    </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- header area end -->
                <!-- page title area start -->
                <div class="page-title-area">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="breadcrumbs-area clearfix">
                                <h4 class="page-title pull-left">My Schedule</h4>
                                <ul class="breadcrumbs pull-left">
                                    <li><a href="<?php echo site_url('teacher_dashboard');?>">Home</a></li>
                                    <li><span>View Preferred Schedule</span></li>
                                </ul>
                            </div>
                    </div>
                </div>

                <div class="main-content-inner">
                        <div class="card">
                                <div class="card-body">
                                        <div class="col col-8">
                                                <div class="row">
                                                <div class="col col-6">
                                                <table class="table">
                                                        <thead class="thead-light"> 
                                                        
                                                            <tr>
                                                                <th scope="col">Loading Scheme</th>
                                                                <th scope="col">No. of Units</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1st Semester</td>
                                                                <td>18 units</td>
                                                            </tr>
                                                            <tr>
                                                                    <td>2nd Semester</td>
                                                                    <td>18 units</td>
                                                            </tr>
                                                            <tr>
                                                                    <td>Summer</td>
                                                                    <td>9 units</td>
                                                            </tr>
                                                        
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col col-6">
                                                        <table class="table">
                                                                <thead class="thead-light"> 
                                                                
                                                                    <tr>
                                                                        <th scope="col">Days</th>
                                                                        <th scope="col">Time</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>M-W-F</td>
                                                                        <td>9:00AM - 4:30PM</td>
                                                                    </tr>
                                                            
                                                                
                                                                </tbody>
                                                            </table>
                                                        </div>
                                            </div>
                                                <div class="row">
                                                    <div class="col col-12">
                                                            <table class="table">
                                                                    <thead class="thead-light"> 
                                                                    
                                                                        <tr>
                                                                            <th scope="col">Course Code</th>
                                                                            <th scope="col">Course Title</th>
                                                                        
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                            <tr>
                                                                                    <td>ICST101</td>
                                                                                    <td>Computer Programming I</td>
                                                                            
                                                                                </tr>
                                                                        <tr>
                                                                            <td>ICST212</td>
                                                                            <td>Database Management Systems 2</td>
                                                                    
                                                                        </tr>
                                                                        <tr>
                                                                                <td>ICST214</td>
                                                                                <td>Object Oriented Programming</td>
                                                                            
                                                                        </tr>
                                                                        <tr>
                                                                                <td>ICST107</td>
                                                                                <td>Technopreneurship	</td>
                                                                            
                                                                        </tr>
                                                                
                                                                    
                                                                    </tbody>
                                                                </table>
                                                    </div>
                                                </div>
                                                <br>
                                            </div>
                                                    </div>
                                </div>
                            </div>
                    </div>

            
        <!-- offset area end -->
        <!-- jquery latest version -->
        <script src="<?php echo base_url(); ?>assets/js/vendor/jquery-2.2.4.min.js"></script>
        <!-- bootstrap 4 js -->
        <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/metisMenu.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.slicknav.min.js"></script>

        <!-- Start datatable js -->
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
        <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
        <!-- others plugins -->
        <script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
    </body>

    </html>
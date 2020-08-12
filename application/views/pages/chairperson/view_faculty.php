

<div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                <a href="index.html"><img src="<?php echo base_url()?>/assets/images/icon/logo.png" alt="logo"></a>
                    <br><br>
                    <h5 class="text-style"><?php echo $this->session->userdata('faculty_name');?></h5>
                    <h6 class="text-style"><?php echo $this->session->userdata('faculty_type');?></h6>
                    <h6 class="text-style"><?php echo $this->session->userdata('department_name');?></h6>
                </div>
          
            </div>
            <div class="main-menu">
                    <div class="menu-inner">
                        <nav>
                        <ul class="metismenu" id="menu">
                        <li>
                                        <a href="<?php echo base_url('chairperson_dashboard')?>"><i class="ti-dashboard"></i><span>Dashboard</span></a>
                                </li>

                                <li>
                                    <a href="javascript:void(0)" aria-expanded="true"><i class="ti-timer"></i><span>Manage Schedule</span></a>
                                    <ul class="collapse">
                                        <li><a href="<?php echo base_url('pages/addSchedule')?>">Add Schedule</a></li>
                                        <li><a href="<?php echo base_url('view_preferred_schedule')?>">View Preferred Schedule</a></li>
                                        <li><a href="<?php echo base_url('view_preferred_schedule')?>">View My Schedule</a></li>
                                
                                    </ul>
                                </li>

                                <li class="active">
                                        <a href="<?php echo base_url("javascrip:void(0)")?>"><i class="ti-dashboard"></i><span>Manage Faculty</span></a>
       
                                </li>
                                <li>
                                        <a href="<?php echo base_url('view_subject')?>"><i class="ti-dashboard"></i><span>Manage Subject</span></a>
                                </li>
                                <li>
                                        <a href="<?php echo base_url('chairperson_setting')?>"><i class="ti-dashboard"></i><span>MyProfile</span></a>

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
                                                <p>New Comments On Post</p>
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
                                                <p>New Comments On Post</p>
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
                                                    <a class="dropdown-item" href="<?php echo base_url('chairperson_setting')?>">Settings</a>
                                                <a class="dropdown-item" href="<?php echo base_url('logout')?>">Log Out</a>
                                            
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
                            <h4 class="page-title pull-left">Manage Faculty</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.html">Home</a></li>
                                <li><span>View Faculty</span></li>
                            </ul>
                        </div>
                </div>
            </div>

            <div class="main-content-inner">
                    <div class="card">
                            <div class="card-body">
                                    <div class="row">
                                            <div class="col-md-6">
                                        <p class="text-primary"><?php echo $this->session->userdata('department_name');?></p>
                                        </div>
                                        <div class="col-md-6" style="text-align:right">
                                            
                                                <a href="javascript:void(0);" class="btn btn-primary btn-xs mb-3" data-target="#Modal_Add" data-toggle="modal"><i class="fa fa-user-plus"></i> Add</a>
                                              
                                              
                                            </div>
                                </div>
                                <div class="row">
        <div class="col-12">
            <div class="col-md-12">
                                    <table class="table table-striped" id="mydata">
                                        <thead>
                                            <tr style="text-align:center">
                        
                                                <th>FACULTY NAME</th>         
                                                <th>FACULTY TYPE</th>
                                                <th>ACTION      </th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody id="show_data" style="text-align:center">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>
    
                </div>

                <!-- START MODAL INSERT-->
                <form>

                <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Faculty</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label"><b>Faculty Name</b></label>
                            <div class="col-md-8">
                              <input type="text" name="faculty_name" id="faculty_name" class="form-control" placeholder="Name">
                            </div>
                            
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label"><b>Email Address</b></label>
                            <div class="col-md-8">
                              <input type="text" name="email_address" id="email_address" class="form-control" placeholder="Email Address">
                            </div>
                           
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label"><b>Password</b></label>
                            <div class="col-md-8">
                              <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                            </div>
                           
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_add" class="btn btn-primary">Add</button>
                  </div>
                </div>
              </div>
            </div>
</form>
<!-- END MODAL INSERT -->


<!-- START MODAL DELETE-->
<form>
            <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Faculty Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <strong>Are you sure to delete this faculty record?</strong>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="faculty_name_delete" id="faculty_name_delete" class="form-control">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
<!-- END MODAL DELETE-->


<!-- START MODAL UPDATE-->
<form>
            <div class="modal fade" id="Modal_Update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Faculty Position</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <strong>Are you sure to swap position?</strong>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="faculty_name_update" id="faculty_name_update" class="form-control">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" type="submit" id="btn_update" class="btn btn-primary">Yes</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
<!-- END MODAL UPDATE-->

<!-- START MODAL RELOGIN-->
<form>
            <div class="modal fade" id="Modal_relogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Faculty Position Change Successfuly</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <strong>Please Login Again</strong>
                  </div>
                  <div class="modal-footer">
                    <button type="button" type="submit" id="btn_relogin" class="btn btn-primary">Login</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
<!-- END MODAL RELOGIN-->
    
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

    <script type="text/javascript">
  $(document).ready(function(){
        show_faculty();

        $('#mydata').dataTable();

        function show_faculty(){
            $.ajax({
                type     : 'ajax',
                url      : '<?php echo site_url('pages/faculty_data')?>',
                async    : false,
                dataType : 'json',
                success  : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        if(data[i].faculty_type == 'Teacher'){
                        html += '<tr>' + 

                               '<td>'+data[i].faculty_name+'</td>'+
                               '<td>'+data[i].faculty_type+'</td>'+
                               '<td style="text-align:center;">'+
                               '<a href="javascript:void(0);" class="btn btn-info btn-sm item_update" data-faculty_name="'+data[i].faculty_name+'">Assign as Chair</a>'+'  '+
                               '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-faculty_name="'+data[i].faculty_name+'">Delete</a>'+
                               '</td>' +
                               '</tr>';
                        }
                        else
                        {
                            html += '<tr>' + 

                               '<td>'+data[i].faculty_name+'</td>'+
                               '<td>'+data[i].faculty_type+'</td>'+
                               '<td style="text-align:right;">'+
                
                               '</tr>';
                        }
                      
                    }
                    $('#show_data').html(html); 
            }
        });
      
        }

        $('#btn_add').on('click',function(){
            var faculty_name = $('#faculty_name').val();
            var email_address = $('#email_address').val();
            var password = $('#password').val();
            $.ajax({
                type     : "POST",
                url      : "<?php echo site_url('pages/insert_faculty')?>",
                dataType : "JSON",
                data     : {faculty_name:faculty_name, email_address:email_address, password:password},
                success  : function(data){
                    $('[name="faculty_name"]').val("");
                    $('[name="email_address"]').val("");
                    $('[name="password"]').val("");
                    $('#Modal_Add').modal('hide');
                    show_faculty(); 
                } 
                
            });
            
            return false;
    });
    $('#show_data').on('click','.item_delete',function(){
            var faculty_name = $(this).data('faculty_name');
            
            $('#Modal_Delete').modal('show');
            $('[name="faculty_name_delete"]').val(faculty_name);
        });


    $('#btn_delete').on('click',function(){
            var faculty_name = $('#faculty_name_delete').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('pages/delete_faculty')?>",
                dataType : "JSON",
                data : {faculty_name:faculty_name},
                success: function(data){
                    $('[name="faculty_name_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_faculty();
                }
            });
            return false;
        });

        $('#show_data').on('click','.item_update',function(){
            var faculty_name = $(this).data('faculty_name');
            
            $('#Modal_Update').modal('show');
            $('[name="faculty_name_update"]').val(faculty_name);
        });

        $('#btn_update').on('click',function(){
            var faculty_name = $('#faculty_name_update').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('pages/update_faculty')?>",
                dataType : "JSON",
                data : {faculty_name:faculty_name},
                success: function(data){
                    $('[name="faculty_name_update"]').val("");
                    $('#Modal_Update').modal('hide');
                    show_faculty();
                    $('#Modal_relogin').modal('show');
                }
            });
            return false;
        });

        $('#btn_relogin').on('click',function(){
            $(location).attr('href', '<?php echo base_url('logout')?>');
        });
     
    });

    </script>
    
</body>

</html>
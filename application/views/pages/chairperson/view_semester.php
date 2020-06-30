
    <!-- preloader area end -->
    <!-- page container area start -->
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
                                        <a href="<?php echo base_url("view_faculty")?>"><i class="ti-dashboard"></i><span>Manage Faculty</span></a>
       
                                </li>
                                <li>
                                        <a href="<?php echo base_url('view_subject')?>"><i class="ti-dashboard"></i><span>Manage Subject</span></a>
                                </li>
                                <li>
                                        <a href="<?php echo base_url('chairperson_setting')?>"><i class="ti-dashboard"></i><span>MyProfile</span></a>

                                </li>
                                <li class="active">
                                        <a href="javascript:void(0)"><i class="ti-dashboard"></i><span>Semester</span></a>

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
                                                <a class="dropdown-item" href="profile.html">Settings</a>
                                                <a class="dropdown-item" href="<?php echo site_url('logout');?>">Log Out</a>
                                            
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
                            <h4 class="page-title pull-left">Setting</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.html">Home</a></li>
                                <li><span>Setting</span></li>
                            </ul>
                        </div>
                </div>
            </div>
        
            <div class="main-content-inner">
                <br><br>
             
            <div class="card" style="width: 35rem;">
            <span class="border border-secondary"> 
            <div class="card-header p-3 mb-2 bg-dark text-white text-align:center">
   
             </div>
             <div class="card-body">
             <ul class="list-group list-group-flush">
             <li class="list-group-item">
             School Year&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;  <b>----</b></li>
             <li class="list-group-item">
             Semester&nbsp;&nbsp;:</b>&nbsp;&nbsp;<b>----</b></li>
             <li class="list-group-item">
             Status&nbsp;&nbsp;&nbsp;:</b>&nbsp;&nbsp;<b>----</b></li>
             </ul>
</div>
             </span>
             <br>
            <div class="row">
            <div class="col md-4">
            <a href="javascript:void(0);" class="btn btn-primary btn-xs mb-3" data-target="#Modal_update_info" data-toggle="modal"><i class="fa fa-book"></i> Update Semester</a>
            </div>
            <div class="col md-4" style="text-align:right">
            <a href="javascript:void(0);" class="btn btn-primary btn-xs mb-3" data-target="#Modal_password" data-toggle="modal"><i class="fa fa-book"></i>   Set New Semester</a>
            </div>
            
            </div>
            
</div>

 <!-- START MODAL UPDATE-->
          <form>

<div class="modal fade" id="Modal_update_info" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-md" role="document">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Update Semester</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
        <div class="form-group row">
            <label class="col-md-6 col-form-label"><b>Semester</b></label>

            <div class="col-md-6">
             <select class="form-control">
             <?php 
             foreach($setting as $row)  
             {
                echo '<option_value="'.$row->Setting_id.'">'.$row->school_year.'</option>';
             }
             ?>
             </select>
            </div>

        </div>
    

     
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="button" type="submit" id="btn_edit" class="btn btn-primary">Update</button>
  </div>
</div>
</div>
</div>
</form>
<!-- END MODAL UPDATE-->



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
      
    function show_profile(){
        $.ajax({
        type     : 'ajax',
        url      : '<?php echo site_url('pages/profile_data')?>',
        async    : false,
        dataType : 'json',
        success  : function(data){
            var html = '';
            var i;
            for(i=0; i<data.length; i++){
           
                html += '<tr>' + 

                       '<th>'+'School Year   :  '+ '</th>' + '<td>' + data[i].faculty_name+'</td>'+ '</tr>' + '<tr>' + 
                       '<th>'+'Semester   :  '+ '</th>' + '<td>' + data[i].faculty_type+'</td>'+ '</tr>' + '<tr>' + 
                       '<th>'+'Email Address  :  '+ '</th>' + '<td>' + data[i].email_address+'</td>'+ '</tr>' ;
                
             
                  //     '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit"'">Edit</a>'+' '+
                 //      '<th>'+'<a href="javascript:void(0);" class="btn btn-info btn-sm item_update" data-faculty_name="'+data[i].faculty_name+'" data-faculty_type="'+data[i].faculty_type+'"data-email_address="'+data[i].email_address+'"data-department_name="' + data[i].department_name+ '">Update</a>' + '</th>' + '</tr>';      
            }
            $('#show_data').html(html); 
    }
});
      }

        
        $('#Modal_set_semester').on('click',function(){
            $('#Modal_set_semester').modal('show');
        });

        $('#btn_edit').on('click',function(){
            var subject_code = $('#subject_code_edit').val();
            var subject_name = $('#subject_name_edit').val();
            var subject_year = $('#subject_year_edit').val();
            var credit_units = $('#credit_units_edit').val();
            var lec_units    = $('#lec_units_edit').val();
            var lab_units    = $('#lab_units_edit').val();

            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('pages/update_subject')?>",
                dataType : "JSON",
                data : {subject_code:subject_code,  subject_name:subject_name,  subject_year:subject_year,  credit_units:credit_units,  lec_units:lec_units,  lab_units:lab_units},
                success: function(data){
                   $('[name="subject_code_edit"]').val("");
                   $('[name="subject_name_edit"]').val("");
                   $('[name="subject_year_edit"]').val("");
                   $('[name="credit_units_edit"]').val("");
                   $('[name="lec_units_edit"]').val("");
                   $('[name="lab_units_edit"]').val("");
                   $('#Modal_Edit').modal('hide');
                   show_subject();
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
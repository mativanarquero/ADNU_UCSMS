
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
                                <li class="active">
                                        <a href="<?php echo base_url('javascript:void(0)')?>"><i class="ti-dashboard"></i><span>MyProfile</span></a>

                                </li>
                                <li>
                                        <a href="<?php echo base_url('view_semester')?>"><i class="ti-dashboard"></i><span>Semester</span></a>

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
                <div class="col-md-6">
                    <br>

                    <!-- <table class="table table-striped" id="mydata">
             <tbody id="show_data1" style="text-align:left">
             </tbody>
             </table> -->

            <div id="show_data1"> </div> 
                 </div>
                                        <br>
            <div class="card" style="width: 35rem;">
           
            <span class="border border-secondary"> 
            <div class="card-header p-3 mb-2 bg-dark text-white text-align:center">
            <div class="row">
                <div class ="col md-8" style="text-align:left">  Profile </div>
                <div class ="col md-2" style="text-align:right"></div>
                <div class ="col md-2" style="text-align:right"> <i class="fa fa-edit" data-toggle="modal" data-target="#edit_profile">  </i>   <i class="fa fa-lock" data-toggle="modal" data-target="#change_password"></i></div>
            </div>
             </div>
             <div class="card-body">
             <table class="table table-striped" id="mydata">
             <tbody id="show_data" style="text-align:left">
             </tbody>
             </table>
        </div>


</div>

             </span>
             <br>  
             <div class="row">
            <div class="col md-2" style="text-align:left">
            <a href="javascript:void(0);" class="btn btn-primary btn-xs mb-3" data-target="#Modal_Semester" data-toggle="modal"> <i class="fa fa-plus"></i> Set Semester</a>
            </div>
            <div class="col md-2" style="text-align:left">
            <a href="javascript:void(0);" class="btn btn-primary btn-xs mb-3" data-target="#Modal_password" data-toggle="modal"><i class="fa fa-book"></i> Update Semester</a>
            </div>  
            <div class="col md-6" style="text-align:left">
           
            </div>  
</div>

<!-- START UPDATE PROFILE MODAL -->

<form>

<div class="modal fade" id="edit_profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-md" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Update User Information</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div class="form-group row">
  <label class="col-md-6 col-form-label"><b>Faculty Name</b></label>

  <div class="col-md-6">
    <input type="text" name="faculty_name_edit" placeholder="faculty_name" id="faculty_name_edit" class="form-control">
  </div>

</div>
<div class="form-group row">
  <label class="col-md-6 col-form-label"><b>Faculty Type</b></label>
  <div class="col-md-6">
  <input type="text" name="faculty_type_edit" id="faculty_type_edit" class="form-control" placeholder="faculty_type" readonly>
  </select>
  </div>
</div>
<div class="form-group row">
  <label class="col-md-6 col-form-label"><b>Department</b></label>

  <div class="col-md-6">
    <input type="text" name="department_name_edit" id="department_name_edit" class="form-control" placeholder="department_name" readonly>
  </div>

</div>
<div class="form-group row">
  <label class="col-md-6 col-form-label"><b>Email</b></label>
  <div class="col-md-6">
  <input type="text" name="email_address_edit" id="email_address_edit" class="form-control" placeholder="email_address" required="email ">
  </select>
  </div>
</div>


</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" id="btn_update" class="btn btn-primary">Update</button>
</div>
</div>
</div>
</div>
</form>

<!--  END UPDATE PROFILE MODAL-->

<!--  ADD NEW SEMESTER MODAL-->
<form>

<div class="modal fade" id="Modal_Semester" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-md" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Add new school year and semester</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div class="form-group row">
  <label class="col-md-6 col-form-label"><b>School Year</b></label>

  <div class="col-md-6">
    <input type="text" name="school_year" placeholder="school_year" id="school_year_add" class="form-control">
  </div>

</div>
<div class="form-group row">
  <label class="col-md-6 col-form-label"><b>Semester</b></label>
  <div class="col-md-6">
  <select name="semester" id="semester_add" class="form-control">
      
            <option value="1st Semester">1st Semester </option>
            <option value="2nd Semester">2nd Semester</option>
            <option value="Summer">Summer</option>
</select>
  </div>
</div>


</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" id="btn_semester" class="btn btn-primary">Add</button>
</div>
</div>
</div>
</div>
</form>



 <!-- START MODAL UPDATE-->
          <form>

          <div class="modal fade" id="change_password" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-md" role="document">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
        <div class="form-group row">
            <label class="col-md-6 col-form-label"><b>Faculty Name</b></label>

            <div class="col-md-6">
              <input type="text" name="faculty_name_edit" placeholder="faculty_name" id="faculty_name_edit" class="form-control">
            </div>

        </div>
        <div class="form-group row">
            <label class="col-md-6 col-form-label"><b>Faculty Type</b></label>
            <div class="col-md-6">
            <input type="text" name="faculty_type_edit" id="faculty_type_edit" class="form-control" placeholder="faculty_type" readonly>
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-6 col-form-label"><b>Department</b></label>

            <div class="col-md-6">
              <input type="text" name="department_name_edit" id="department_name_edit" class="form-control" placeholder="department_name" readonly>
            </div>

        </div>
        <div class="form-group row">
            <label class="col-md-6 col-form-label"><b>Email</b></label>
            <div class="col-md-6">
            <input type="text" name="email_address_edit" id="email_address_edit" class="form-control" placeholder="email_address" required="email ">
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
      
    show_profile();
        $('#mydata').dataTable();  
     

        function show_profile(){
        $.ajax({
        type     : 'ajax',
        url      : '<?php echo site_url('pages/profile_data')?>',
        async    : false,
        dataType : 'json',
        success  : function(data){
            var html = '';
            var i;
            // for(i=0; i<data.length; i++){
           
            //     html += '<tr>' + 

            //            '<th>'+'Faculty Name   :  '+ '</th>' + '<td>' + data[i].faculty_name+'</td>'+ '</tr>' + '<tr>' + 
            //            '<th>'+'Faculty Type   :  '+ '</th>' + '<td>' + data[i].faculty_type+'</td>'+ '</tr>' + '<tr>' + 
            //            '<th>'+'Email Address  :  '+ '</th>' + '<td>' + data[i].email_address+'</td>'+ '</tr>' + '<tr>' + 
            //            '<th>'+'Department Name:  '+ '</th>' + '<td>' + data[i].department_name+'</td>'+ '</tr>' + '<tr>';
                     
                        
            // }

            html += '<tr>' + 

                       '<th>'+'Faculty Name   :  '+ '</th>' + '<td>' + data[0].faculty_name+'</td>'+ '</tr>' + '<tr>' + 
                       '<th>'+'Faculty Type   :  '+ '</th>' + '<td>' + data[0].faculty_type+'</td>'+ '</tr>' + '<tr>' + 
                       '<th>'+'Email Address  :  '+ '</th>' + '<td>' + data[0].email_address+'</td>'+ '</tr>' + '<tr>' + 
                       '<th>'+'Department Name:  '+ '</th>' + '<td>' + data[0].department_name+'</td>'+ '</tr>' + '<tr>';
                    
            $('#show_data').html(html); 
            show_semester();

            $('#faculty_name_edit').val(data[0].faculty_name);
            $('#faculty_type_edit').val(data[0].faculty_type);
            $('#email_address_edit').val(data[0].email_address);
            $('#department_name_edit').val(data[0].department_name);
            

    }
});
      }
      
      function show_semester(){
            $.ajax({
              type      : 'ajax',
              url       : '<?php echo site_url('pages/active_semester')?>',
              async     : false,
              dataType  : 'json',
              success   : function(data){
                  
                 // var html = "";
            //      var i;
            //  for(i=0; i<data.length; i++){
            //          html += '<tr>' + '<th>' +  data[i].school_year + ' - ' + data[i].semester + '</th>' + 
            //          '</tr>';

               var  html = '<p class="text-primary">'  + data[0].school_year + ' - ' + data[0].semester + '</p>';
             $('#show_data1').html(html);
                  
              } 
             
          });
        

      }

      $('#btn_semester').on('click',function(){
                var school_year = $('#school_year_add').val();
                var semester = $('#semester_add').val();
                $.ajax({
                    type   : "POST",
                    url    : "<?php echo site_url('pages/insert_semester')?>",
                    dataType : "JSON",
                    data     : {school_year:school_year, semester:semester},
                    success  : function(data){
                    $('[name="school_year_add"]').val("");
                    $('[name="semester_add"]').val("");
                    $('#Modal_Semester').add('hide');
                    show_faculty();     
                }
            
            });
                return false;
            });
    

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

          

           $('#btn_update').on('click',function(){
            
            var faculty_name = $('#faculty_name_edit').val();
            var faculty_type = $('#faculty_type_edit').val();
            var department_name = $('#department_name_edit').val();
            var email_address = $('#email_address_edit').val();

             $.ajax({
                 type : "POST",
                 url  : "<?php echo site_url('pages/update_profile')?>",
                 dataType : "JSON",
                data : {faculty_name:faculty_name, faculty_type:faculty_type, department_name:department_name, email_address:email_address},
                 success: function(data){
                    $(location).attr('href', '<?php echo base_url('logout')?>');
                  
                   
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
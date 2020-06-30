
<div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                <a href="index.html"><img src="<?php echo base_url()?>/assets/images/icon/logo.png" alt="logo"></a>
                    <br><br>
                    <h5 class="text-style"><?php echo $this->session->userdata('faculty_name');?></h5>
                    <h6 class="text-style"><?php echo $this->session->userdata('subject_name');?></h6>
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
                                <li class="active">
                                        <a href="javascript:void(0)"><i class="ti-dashboard"></i><span>Manage Subject</span></a>
                                </li>
                                <li>
                                        <a href="<?php echo base_url('chairperson_setting')?>"><i class="ti-dashboard"></i><span>MyProfile</span></a>

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
                                            
                                                <a href="javascript:void(0);" class="btn btn-primary btn-xs mb-3" data-target="#Modal_Add" data-toggle="modal"><i class="fa fa-book"></i> Add</a>
                                              
                                              
                                            </div>
                                </div>
                                <div class="row">
        <div class="col-12">
            <div class="col-md-12">
                                    <table class="table table-striped" id="mydata">
                                        <thead>
                                            <tr style="text-align:center">
                        
                                                <th>SUBJECT CODE</th>         
                                                <th>SUBJECT NAME</th>
                                                <th>SUBJECT YEAR</th>
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
                    <h5 class="modal-title" id="exampleModalLabel">Add New Subject</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-6 col-form-label"><b>Subject Code</b></label>
                            <label class="col-md-6 col-form-label"><b>Subject Name</b></label>
                            <div class="col-md-6">
                              <input type="text" name="subject_code" id="subject_code" class="form-control" placeholder="Subject Code">
                            </div>
                          
                            <div class="col-md-6">
                              <input type="text" name="subject_name" id="subject_name" class="form-control" placeholder="Subject Name">
                            </div>
                            
                        </div>
                        <div class="form-group row">
                            <label class="col-md-6 col-form-label"><b>Subject Year</b></label>
                            <label class="col-md-6 col-form-label"><b>Credit Units</b></label>
                            <div class="col-md-6">
                            <select name="subject_year" id="subject_year" class="form-control">
                            <option value="1st">1st year </option>
                            <option value="2nd">2nd year</option>
                            <option value="3rd">3rd year</option>
                            <option value="4th">4th year</option>
                            </select>
                            </div>
                            <div class="col-md-6">
                            <select name="credit_units" id="credit_units" class="form-control">
                            <option value="2">2 units</option>
                            <option value="3">3 units</option>
                            <option value="6">6 units</option>
                            </select>
                            </div>
                        </div>

                        <div class="form-group row">
                          
                            <label class="col-md-6 col-form-label"><b>Lec Units</b></label>
                            <label class="col-md-6 col-form-label"><b>Lab Units</b></label>
                            <div class="col-md-6">
                            <select name="lec_units" id="lec_units" class="form-control">
                            <option value="2">2 units</option>
                            <option value="3">3 units</option>
                            </select>
                            </div>
                            <div class="col-md-6">
                            <select name="lab_units" id="lab_units" class="form-control">
                            <option value="0">0 units</option>
                            <option value="1">1 units</option>
                            </select>
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
                    <h5 class="modal-title" id="exampleModalLabel">Delete Subject</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <strong>Are you sure to delete this subject?</strong>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="subject_code_delete" id="subject_code_delete" class="form-control">
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

<div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-md" role="document">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Update Subject</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
        <div class="form-group row">
            <label class="col-md-6 col-form-label"><b>Subject Code</b></label>
            <label class="col-md-6 col-form-label"><b>Subject Name</b></label>
            <div class="col-md-6">
              <input type="text" name="subject_code_edit" id="subject_code_edit" class="form-control" placeholder="Subject Code" readonly>
            </div>
          
            <div class="col-md-6">
              <input type="text" name="subject_name_edit" id="subject_name_edit" class="form-control" placeholder="Subject Name">
            </div>
            
        </div>
        <div class="form-group row">
            <label class="col-md-6 col-form-label"><b>Subject Year</b></label>
            <label class="col-md-6 col-form-label"><b>Credit Units</b></label>
            <div class="col-md-6">
            <select name="subject_year_edit" id="subject_year_edit" class="form-control">
            <option value="1st">1st year </option>
            <option value="2nd">2nd year</option>
            <option value="3rd">3rd year</option>
            <option value="4th">4th year</option>
            </select>
            </div>
            <div class="col-md-6">
            <select name="credit_units_edit" id="credit_units_edit" class="form-control">
            <option value="2">2 units</option>
            <option value="3">3 units</option>
            <option value="6">6 units</option>
            </select>
            </div>
        </div>

        <div class="form-group row">
          
            <label class="col-md-6 col-form-label"><b>Lec Units</b></label>
            <label class="col-md-6 col-form-label"><b>Lab Units</b></label>
            <div class="col-md-6">
            <select name="lec_units_edit" id="lec_units_edit" class="form-control">
            <option value="2">2 units</option>
            <option value="3">3 units</option>
            </select>
            </div>
            <div class="col-md-6">
            <select name="lab_units_edit" id="lab_units_edit" class="form-control">
            <option value="0">0 units</option>
            <option value="1">1 units</option>
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
       show_subject();
        $('#mydata').dataTable();

        function show_subject(){
            $.ajax({
                type     : 'ajax',
                url      : '<?php echo site_url('pages/subject_data')?>',
                async    : false,
                dataType : 'json',
                success  : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                   
                        html += '<tr>' + 

                               '<td>'+data[i].subject_code+'</td>'+
                               '<td>'+data[i].subject_name+'</td>'+
                               '<td>'+data[i].subject_year+'</td>'+
                               '<td style="text-align:center;">'+

                               '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-subject_code="'+data[i].subject_code+'" data-subject_name="'+data[i].subject_name+'" data-subject_year="'+data[i].subject_year+'" data-credit_units="'+data[i].credit_units+'" data-lab_units="'+data[i].lab_units+'" data-lec_units="'+data[i].lec_units +'">Edit</a>'+' '+
                               '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-subject_code="'+data[i].subject_code+'">Delete</a>'+
                               '</td>' +
                               '</tr>';
                    }
                    $('#show_data').html(html); 
            }
        });
      
        }

        $('#btn_add').on('click',function(){
            var subject_code = $('#subject_code').val();
            var subject_name = $('#subject_name').val();
            var subject_year = $('#subject_year').val();
            var credit_units = $('#credit_units').val();
            var lec_units    = $('#lec_units').val();
            var lab_units    = $('#lab_units').val();
            $.ajax({
                type     : "POST",
                url      : "<?php echo site_url('pages/insert_subject')?>",
                dataType : "JSON",
                data     : {subject_code:subject_code, subject_name:subject_name, subject_year:subject_year, credit_units:credit_units, lec_units:lec_units, lab_units:lab_units},
                success  : function(data){
                    $('[name="subject_code"]').val("");
                    $('[name="subject_name"]').val("");
                    $('[name="subject_year"]').val("");
                    $('[name="credit_units"]').val("");
                    $('[name="lec_units"]').val("");
                    $('[name="lab_units"]').val("");
                    $('#in').modal('hide');
                    show_subject(); 
                } 
    });
            
            return false;
    });

    //get the data for the subject to be deleted 
    $('#show_data').on('click','.item_delete',function(){
            var subject_code = $(this).data('subject_code');
            
            $('#Modal_Delete').modal('show');
            $('[name="subject_code_delete"]').val(subject_code);
        });


    $('#btn_delete').on('click',function(){
            var subject_code = $('#subject_code_delete').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('pages/delete_subject')?>",
                dataType : "JSON",
                data : {subject_code:subject_code},
                success: function(data){
                    $('[name="subject_code_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_subject();
                }
            });
            return false;
        });

        $('#show_data').on('click','.item_edit',function(){
            var subject_code = $(this).data('subject_code');
            var subject_name = $(this).data('subject_name');
            var subject_year = $(this).data('subject_year');
            var credit_units = $(this).data('credit_units');
            var lec_units    = $(this).data('lec_units');
            var lab_units    = $(this).data('lab_units');

            $('#Modal_Edit').modal('show');
            $('[name="subject_code_edit"]').val(subject_code);
            $('[name="subject_name_edit"]').val(subject_name);
            $('[name="subject_year_edit"]').val(subject_year);
            $('[name="credit_units_edit"]').val(credit_units);
            $('[name="lec_units_edit"]').val(lec_units);
            $('[name="lab_units_edit"]').val(lab_units);
    
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
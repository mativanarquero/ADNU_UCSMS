
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
                                    <a href="javascript:void(0)" aria-expanded="true"><i class="ti-timer"></i><span>Manage Schedule</span></a>
                                    <ul class="collapse">
                                        <li><a href="<?php echo base_url('pages/addSchedule')?>">Add Schedule</a></li>
                                        <li><a href="<?php echo base_url('view_preferred_schedule')?>">View Preferred Schedule</a></li>
                                        <li><a href="<?php echo base_url('view_preferred_schedule')?>">View My Schedule</a></li>
                                
                                    </ul>
                                </li>
                    
                                <li>
                                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-users"></i><span>Manage Faculty</span></a>
                                        <ul class="collapse">
                                        <li><a href="<?php echo base_url('view_faculty')?>">View Faculty</a></li>                    
                                                <li><a href="<?php echo base_url('view_subject')?>">View Subject</a></li>                 
    
                                        </ul>
                                    </li>

                                    <li class="active">
                            <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-calendar"></i><span>Schedules</span></a>
                            <ul class="collapse">
                            <li><a href="<?php echo base_url('my_schedule.php') ?>"> My Schedule</a></li>
                                <li><a href="<?php echo base_url('all_schedules.php') ?>">View All Schedules</a></li>
                            </ul>
                        </li>

                                    <li>
                                        <a href="<?php echo base_url('view_subject')?>"><i class="ti-dashboard"></i><span>Manage Subject</span></a>
                                </li>

                                
                              
                                <li>
                                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-clipboard"></i>
                                            <span>Reports</span></a>
                                        <ul class="collapse">
                                            <li><a href="table-basic.html">My Schedule</a></li>
                                            <li><a href="table-layout.html">All Schedules</a></li>
                                            <li><a href="datatable.html">datatable</a></li>
                                        </ul>
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
        
                                                <a class="dropdown-item" href="<?php echo site_url('chairperson_setting')?>">Settings</a>
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
                            <h4 class="page-title pull-left">All Schedules</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.html">Home</a></li>
                                <li><span>Schedule</span></li>
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
                                                <th>START TIME</th>
                                                <th>END TIME</th>
                                                <th>ROOM</th>
                                                <th>DAY</th>
                                                <th>TEACHER</th>
                                                <th>ACTION</th>
                                               
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
    <h5 class="modal-title" id="exampleModalLabel">Add New Subject Offering</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
        <div class="form-group row">
            <label class="col-md-6 col-form-label"><b>Subject Code</b></label>
            <label class="col-md-6 col-form-label"><b>Subject Name</b></label>
            <div class="col-md-6">
              <input type="text" name="subject_code" id="subject_code" class="form-control" placeholder="Subject Code" >
            </div>
          
            <div class="col-md-6">
              <input type="text" name="subject_name" id="subject_name" class="form-control" placeholder="Subject Name" >
            </div>
            
        </div>
        <div class="form-group row">
            <label class="col-md-6 col-form-label"><b>Start Time</b></label>
            <label class="col-md-6 col-form-label"><b>End Time</b></label>
            <div class="col-md-6">
            <select name="time_start" id="time_start" class="form-control">
            <option value="1">7:30 AM </option>
            <option value="2">8:00 AM</option>
            <option value="3">8:30 AM</option>
            <option value="4">9:00 AM</option>
            </select>
            </div>
            <div class="col-md-6">
            <select name="time_end" id="time_end" class="form-control">
            <option value="1">8:30 AM </option>
            <option value="2">9:00 AM</option>
            <option value="3">9:30 AM</option>
            <option value="4">10:00 AM</option>
            </select>
            </div>
        </div>

        <div class="form-group row">
          
            <label class="col-md-6 col-form-label"><b>Room</b></label>
            <label class="col-md-6 col-form-label"><b>Day</b></label>

            <div class="col-md-6">
            <select name="room_id" id="room_id" class="form-control">
            <option value="1">AL213</option>
            <option value="2">AL214</option>
            </select>
            </div>
            <div class="col-md-6">
            <select name="day" id="day" class="form-control">
            <option value="MWF">MWF</option>
            <option value="TTH">TTH</option>
            <option value="SAT">SAT</option>
            </select>
            </div>
        </div>

        <div class="form-group row">
          <label class="col-md-7 col-form-label"><b>Teacher</b></label>   

          <div class="col-md-6">
            <select name="faculty_id" id="faculty_id" class="form-control">
            <option value="2">John G. Sixto</option>
            <option value="3">Marianne P. Ang</option>
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
                    <h5 class="modal-title" id="exampleModalLabel">Delete Subject Offering</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <strong>Are you sure to delete this Subject Offering Record?</strong>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="offering_id_delete" id="offering_id_delete" class="form-control">
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
    <h5 class="modal-title" id="exampleModalLabel">Update Subject Offering</h5>
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
              <input type="text" name="subject_name_edit" id="subject_name_edit" class="form-control" placeholder="Subject Name" readonly>
            </div>
            
        </div>
        <div class="form-group row">
                  <label class="col-md-6 col-form-label"><b>Start Time</b></label>
            <label class="col-md-6 col-form-label"><b>End Time</b></label>
            <div class="col-md-6">
            <select name="time_start_edit" id="time_start_edit" class="form-control">
            <option value="1">7:30 AM </option>
            <option value="2">8:00 AM</option>
            <option value="3">8:30 AM</option>
            <option value="4">9:00 AM</option>
            <option value="5">9:30 AM</option>
            <option value="6">10:00 AM</option>
            <option value="7">10:30 AM</option>
            <option value="8">11:00 AM</option>
            <option value="9">11:30 AM</option>
            <option value="10">12:00 PM</option>
            <option value="11">12:30 PM</option>
            <option value="12">1:00 PM</option>
            </select>
            </div>
            <div class="col-md-6">
            <select name="time_end_edit" id="time_end_edit" class="form-control">
            <option value="1">8:30 AM </option>
            <option value="2">9:00 AM</option>
            <option value="3">9:30 AM</option>
            <option value="4">10:00 AM</option>
            <option value="5">10:30 AM</option>
            <option value="6">11:00 AM</option>
            <option value="7">11:30 AM</option>
            <option value="8">12:00 PM</option>
            <option value="9">12:30 PM</option>
            <option value="10">1:00 PM</option>
            <option value="11">1:30 PM</option>
            </select>
            </div>
        </div>

        <div class="form-group row">
          
            <label class="col-md-6 col-form-label"><b>Room</b></label>
            <label class="col-md-6 col-form-label"><b>Day</b></label>

            <div class="col-md-6">
            <select name="room_id_edit" id="room_id_edit" class="form-control">
            <option value="1">AL213</option>
            <option value="2">AL214</option>
            <option value="3">AL215</option>
            <option value="4">AL216</option>
            <option value="5">AL217</option>
            </select>
            </div>
            <div class="col-md-6">
            <select name="day_edit" id="day_edit" class="form-control">
            <option value="MWF">MWF</option>
            <option value="TTH">TTH</option>
            <option value="SAT">SAT</option>
            </select>
            </div>
        </div>

        <div class="form-group row">
          <label class="col-md-7 col-form-label"><b>Teacher</b></label>   

          <div class="col-md-6">
            <select name="faculty_id_edit" id="faculty_id_edit" class="form-control">
            <option value="2">John G. Sixto</option>
            <option value="3">Marianne P. Ang</option>
            <option value="68">Jelly P. Aureus</option>
            <option value="79">Mat Ivan Arquero</option>
            </select>
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

    <script>

    
$(document).ready(function(){
   load_all_schedules();
        $('#mydata').dataTable();

        function load_all_schedules(){
            $.ajax({
                type     : 'ajax',
                url      : '<?php echo site_url('pages/load_all_schedules')?>',
                async    : false,
                dataType : 'json',
                success  : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                      
                        html += '<tr>' + 

                               '<td>'+data[i].subject_code+'</td>'+
                               '<td>'+data[i].subject_name+'</td>'+
                               '<td>'+data[i].time_start_name+'</td>'+
                               '<td>'+data[i].time_end_name+'</td>'+
                               '<td>'+data[i].room_name+'</td>'+
                               '<td>'+data[i].Day+'</td>'+
                               '<td>'+data[i].faculty_name+'</td>'+
                               '<td style="text-align:center;">'+
                               //'<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-offering_id="'+data[i].offering_id+'"data-subject_code="'+data[i].subject_code+'" data-subject_name="'+data[i].subject_name+'" data-time_start="'+data[i].time_start+'" data-time_end_name="'+data[i].time_end_name+'" data-room_name="'+data[i].room_name+'" data-Day="'+data[i].Day +'" data-faculty_name="'+data[i].faculty_name +'">Edit</a>'+' '+
                               '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-subject_code="'+data[i].subject_code+'" data-subject_name="'+data[i].subject_name+'" data-time_start="'+data[i].time_start+'" data-time_end="'+data[i].time_end+ '" data-offering_id="'+data[i].offering_id+'" data-faculty_id="'+data[i].faculty_id+'" data-day="'+data[i].day+'" data-subject_id="'+data[i].subject_id+'" data-room_id="'+data[i].room_id+'" >Edit</a>'+' '+
                               '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-offering_id="'+data[i].offering_id+'">Delete</a>'+
                               '</td>' +
                               '</tr>';
   
                    }
                    $('#show_data').html(html); 
            }
        });
        $('#btn_add').on('click',function(){
            var offering_id = $('#offering_id').val();
            var faculty_id = $('#faculty_id').val();
            var day = $('#day').val();
            var subject_id = $('#subject_id').val();
            var room_id    = $('#room_id').val();
            var time_start    = $('#time_start').val();
            var time_end    = $('#time_end').val();
            $.ajax({
                type     : "POST",
                url      : "<?php echo site_url('pages/insert_subjectoffering')?>",
                dataType : "JSON",
                data     : {offering_id:offering_id, faculty_id:faculty_id, day:day, subject_id:subject_id, room_id:room_id, time_start:time_start, time_end:time_end},
                success  : function(data){
                    $('[name="offering_id"]').val("");
                    $('[name="faculty_id"]').val("");
                    $('[name="day"]').val("");
                    $('[name="subject_id"]').val("");
                    $('[name="room_id"]').val("");
                    $('[name="time_start"]').val("");
                    $('[name="time_end"]').val("");
                    $('#in').modal('hide');
                    load_all_schedules(); 
                } 
    });
            
            return false;
    });


        $('#show_data').on('click','.item_delete',function(){
            var offering_id = $(this).data('offering_id');
            
            $('#Modal_Delete').modal('show');
            $('[name="offering_id_delete"]').val(offering_id);
        });

        $('#btn_delete').on('click',function(){
            var offering_id = $('#offering_id_delete').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('pages/delete_subject_offering')?>",
                dataType : "JSON",
                data : {offering_id:offering_id},
                success: function(data){
                    $('[name="offering_id_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    load_all_schedules();
                }
            });
            return false;
        });

        $('#show_data').on('click','.item_edit',function(){
            var offering_id = $(this).data('offering_id');
            
            //$('#Modal_Edit').modal('show');
            //$('[name="offering_id_delete"]').val(offering_id);
        });

        $('#show_data').on('click','.item_edit',function(){
            var subject_code = $(this).data('subject_code');
            var subject_name = $(this).data('subject_name');
            var time_start = $(this).data('time_start');
            var time_end = $(this).data('time_end');
            var room_id    = $(this).data('room');
            var day    = $(this).data('day');
            var faculty_id    = $(this).data('faculty_id');

            $('#Modal_Edit').modal('show');
            $('[name="subject_code_edit"]').val(subject_code);
            $('[name="subject_name_edit"]').val(subject_name);
            $('[name="time_start_edit"]').val(time_start);
            $('[name="time_end_edit"]').val(time_end);
            $('[name="room_id"]').val(room_id);
            $('[name="day_edit"]').val(day);
            $('[name="faculty_id_edit"]').val(faculty_id);
    
        });

        $('#btn_edit').on('click',function(){
            var offering_id = $('#offering_id_edit').val();
            var subject_id = $('#subject_id_edit').val();
            var time_start = $('#time_start_edit').val();
            var time_end = $('#time_end_edit').val();
            var room_id = $('#room_id_edit').val();
            var day    = $('#day_edit').val();
            var faculty_id    = $('#faculty_id_edit').val();
            //var faculty_name    = $('#faculty_name_edit').val();
            
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('pages/update_subjectoffering')?>",
                dataType : "JSON",
                data : {subject_id:subject_id,  time_start:time_start,  time_end:time_end,  room_id:room_id, day:day, faculty_id:faculty_id},
                success: function(data){
                $('[name="offering_id_edit"]').val("");
                   $('[name="subject_id_edit"]').val("");
                   $('[name="time_start_edit"]').val("");
                   $('[name="time_end_edit"]').val("");
                   $('[name="room_id_edit"]').val("");
                   $('[name="day_edit"]').val("");
                   $('[name="faculty_id_edit"]').val("");
                   $('#Modal_Edit').modal('hide');
                   load_all_schedules();
                }
            });
            return false;
        });

/*
        $('#import_csv').on('submit', function(event){
		event.preventDefault();
		$.ajax({
			url:"<?php echo base_url(); ?>pages/import",
			method:"POST",
			data:new FormData(this),
			contentType:false,
			cache:false,
			processData:false,
			beforeSend:function(){
				$('#import_csv_btn').html('Importing...');
			},
			success:function(data)
			{
				$('#import_csv')[0].reset();
				$('#import_csv_btn').attr('disabled', false);
				$('#import_csv_btn').html('Import Done');
				load_all_schedules();
			}
		})
	});
  */    
        }




});
</script>
    

    </body>

</html>


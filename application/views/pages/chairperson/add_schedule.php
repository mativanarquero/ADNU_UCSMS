

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
                                    <li class="active"><a href=="<?php echo base_url('')?>">Add Schedule</a></li>
                                    <li><a href="<?php echo base_url('view_preferred_schedule')?>">View Preferred Schedule</a></li>
                                        
                                       
                                
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
                                                    <a class="dropdown-item" href="profile.html">Settings</a>
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
                            <h4 class="page-title pull-left">Manage Schedule</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="chairperson_dashboard.html">Home</a></li>
                                <li><span>Add Schedule</span></li>
                            </ul>
                        </div>
                </div>
            </div>
            </div><br><br>
            <div class="container-fluid">
            <div class="row">
            <div class="col col-4">

                              <div class="container-fluid ">
                           <div class="add-module ">
                             <div class="row">
                                <div  class="col col-7">
                                <h1>Course Code</h1>
                                  <select class="custom-select" name="advisement" id="advisement">
                                        <option value="">Select Course</option>
                                        <?php 
                                        foreach($advisement as $row)
                                        {
                                        echo '<option value="'.$row->id.'">'.$row->subject_code.'</option>';
                                        }
                                        ?>  
                
                                    </select>
                                    
                                </div>

                                <div class="col col-5">
                                        <h1>No. of Section</h1>
                                        <input class="text-center" type="text" id="no_section" name="no_section" value="2" readonly="readonly">
                                         </div>  
                                    </div>
                                
                                

                                <h1>Course Title</h1>
                                <input type="text" id="subject_name" name="subject_name" value="" readonly="readonly">
                                <div style="text-align: center"> <h1>LECTURE</h1> </div>
                             
                                <h1>Day Scheme</h1>
                                <select class="custom-select" name="day" id="day">
                                        <option value="">Select Day Scheme</option>
                                        <?php 
                                        foreach($day as $row)
                                        {
                                        echo '<option value="'.$row->day_id.'">'.$row->day_name.'</option>';
                                        }
                                        ?>  
                
                                    </select>



                                <div class="half">
                                <h1>Select Time Start</h1>
                                <select class="custom-select" name="time_start" id="time_start">
                                        <option value="">Select Time Start</option>
                                        <?php 
                                        foreach($time_start as $row)
                                        {
                                        echo '<option value="'.$row->time_start_id.'">'.$row->time_start_name.'</option>';
                                        }
                                        ?>  
                
                                    </select>


                                </div>  

                                <div class="half">
                                  <h1>Start Time End</h1>
                                  <select class="custom-select" name="time_end" id="time_end">
                                        <option value="">Select Time End</option>
                                        <?php 
                                        foreach($time_end as $row)
                                        {
                                        echo '<option value="'.$row->time_end_id.'">'.$row->time_end_name.'</option>';
                                        }
                                        ?>  
                
                                    </select>
 
                                </div>  
                                 
                                <h1>Room</h1>
                                  <select class="custom-select" name="room" id="room">
                                        <option value="">Select Room</option>
                                        <?php 
                                        foreach($room as $row)
                                        {
                                        echo '<option value="'.$row->room_id.'">'.$row->room_name.'</option>';
                                        }
                                        ?>  
                
                                    </select> 
                                    
                            
                    
                                <h1>Professsor</h1>
                                <select class="custom-select" name="faculty" id="faculty">
                                        <option value="">Select Professor</option>
                                        <?php 
                                        foreach($faculty as $row)
                                        {
                                        echo '<option value="'.$row->faculty_id.'">'.$row->faculty_name.'</option>';
                                        }
                                        ?>  
                
                                    </select>
                                    

                                <h1>Legend</h1>
                                <ul class="color-picker">
                                  <li class="blue"></li>
                                  <li class="red color-selected"></li>
                                  <li class="yellow"></li>
                                  <li class="purple"></li>
                                  <li class="green"></li>
                                  <li class="orange"></li>
                                  <li class="gray"></li>
                                  <button type="button" type="submit" id="btn_create" class="btn btn-primary">Create Schedule Temp</button>
                                  
                                </ul>
                                <form>
                                        <input type="button" data-toggle="modal" value="Create Schedule" data-target="#exampleModalCenter"> </input>                                      

                                  <div class="modal fade color-blue" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title dark" id="exampleModalLongTitle">Successfuly Created</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body" style="text-align:center" >
                                            <p>Programming 1</p> 
                                            <p><b>Lec</b></p> 
                                            <p>Monday - Wednesday</p>
                                            <p>7:30 AM - 8:30 AM</p> 
                                            <p>AL213</p> 
                                            <p><b>Lab</b></p> 
                                            <p>Tuesday - Thursday</p>
                                            <p>8:00 AM - 9:30 AM</p> 
                                            <p>AL213</p> 
                                            <p>Sixto, John G.</p> 
                                     
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                </form>
                              </div> 
                              </div>             
            </div>
            <div class="col col-8">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Teacher View</a>
                            </li>
                          </ul>
                          <div class="tab-content" id="myTabContent">
                        
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                    <div class="content" id="display1">
                                    <?php if (!empty($teacher)) { foreach ($teacher as $teacher) { ?>      
                                              <div class="card card-blue-dark">
                                              <h3> <i class="fa fa-user"></i> </h3>
                                                <h6><?php echo $teacher['faculty_name']?></h6>
                                                <div class="pad-top"><a href="view_schedule.php">View Schedule <i class="fa fa-chevron-right"></i></a></div>
                                        </div>

                                        <?php }
                                    } ?>
                                    </div>

                     
                                             
              


                          </div>
                        </div>
                    
                

                    
                    
    
            </div>
            </div>
            </div>
            </div>
         
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

$('#btn_create').on('click',function(){
            var faculty_id = $('#faculty').val();
            var day = $('#day').val();
            var subject_id = $('#advisement').val();
            //var schedule_id = $('#schedule_id').val();
            var room_id = $('#room').val();
            var time_start = $('#time_start').val();
            var time_end = $('#time_end').val();
            $.ajax({
                type     : "POST",
                url      : "<?php echo site_url('pages/insert_subject_offering')?>",
                dataType : "JSON",
                data     : {faculty_id:faculty_id, day:day, subject_id:subject_id, room_id:room_id, time_start:time_start, time_end:time_end},
                success  : function(data){
                    $('[name="faculty_id"]').val("");
                    $('[name="day"]').val("");
                    $('[name="subject_id"]').val("");
                    $('[name="schedule_id"]').val("");
                    $('[name="room_id"]').val("");
                    $('[name="time_start"]').val("");
                    $('[name="time_end"]').val("");
                    $('#Modal_Add').modal('hide');
                    //show_faculty(); 
                } 
                
            });
            
            return false;
    });

</script>


    <script type="text/javascript">
  $(document).ready(function(){
    var advisements = <?php json_encode($advisement); ?>;
    $("advisement").change(function() { 
        
        alert($("advisement").val());
    });
});

  </script>


 <script>
      $(document).ready(function() {
    $('#select').css('color','blue');
    $('#select').change(function() {
       var current = $('#select').val();
       if (current != 'null') {
           $('#select').css('color','red');
       } else {
           $('#select').css('color','blue');
       }
    }); 
});
  </script>
  <script>
        (function(){
      $('ul.day-picker li').on('click', function(){
          $(this).toggleClass('day-selected');
      });
    
      $('ul.color-picker li').on('click', function(){
          $('.color-selected').removeClass('color-selected');
          $(this).addClass('color-selected');
      });
  }(jQuery));
    </script>   

    <script>
    $(function() {
    $('#subject').on('change', function() {
       $('#lab_1').prop('disabled', this.value != 'Computer Programming I');
       $('#lab_2').prop('disabled', this.value != 'Computer Programming I');
       $('#lab_3').prop('disabled', this.value != 'Computer Programming I');
    
       
    })
    .change();
}(jQuery));
    </script>

    
<script>

$(document).ready(function() {

    $("#subject").filter(function() {
        return $(this).val() == $("#subject_name").val();
    }).attr('selected', true);

    $("#subject").on("change", function() {

        $("#subject_name").val($(this).find("option:selected").attr("value"));
    });
});
</script>

<script>

$(document).ready(function() {

    $("#advisement").filter(function() {
        return $(this).val() == $("#subject_name").val();
    }).attr('selected', true);

    $("#advisement").on("change", function() {

        $("#subject_name").val($(this).find("option:selected").attr("value"));
    });
});
</script>

<script>
$(document).ready(function() {

$("#advisement").filter(function() {
    return $(this).val() == $("#suggested_section").val();
}).attr('selected', true);

$("#advisement").on("change", function() {

    $("#suggested_section").val($(this).find("option:selected").attr("value"));
});
});
</script>



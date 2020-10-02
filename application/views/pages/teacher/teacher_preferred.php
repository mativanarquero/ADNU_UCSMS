<div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                <a href="index.html"><img src="<?php echo base_url(); ?>assets/images/icon/logo.png" alt="logo"></a>
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
                                <li >
                                    <a href="<?php echo base_url('teacher_dashboard');?>" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                                </li>          
                                <li class="active">
                                    <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-book"></i><span>Preferred Schedule</span></a>
                                    <ul class="collapse">
                                        <li class="active"><a href="<?php echo base_url('teacher_preferred')?>">Add Preferred Schedule</a></li>
                                        <li><a href="<?php echo base_url('view_preferred')?>">View Preferred Schedule</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-calendar"></i><span>My Schedule</span></a>
                                    <ul class="collapse">
                                            <li><a href="<?php echo base_url('my_schedule')?>">View Schedule</a></li>
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
                        <h4 class="page-title pull-left">Input Preferred Schedule</h4>
                        <ul class="breadcrumbs pull-left">
                            <li><a href="chairperson_dashboard.html">Home</a></li>
                            <li><span>Preferred Schedule</span></li>
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
                                <div class="col col-12">
                                <div class="half">
                                  <h1>Loading Scheme</h1>
                                  <select class="custom-select" name="loading" id="loading">
                                        <option selected="selected">Select Loading Scheme</option>          
                                        <option value="1">3 Units</option>
                                        <option value="3">6 Units</option>
                                        <option value="5">9 Units</option>
                                        <option value="7">12 Units</option>
                                        <option value="9">15 Units</option>
                                        <option value="11">18 Units</option>
                                        <option value="1">24 Units</option>
                                    </select> 
                    </div>

                                </div>

                                <div class="col col-5">
                                    
                                </div>
                            </div>


                            

                            <h1>Preferred Day</h1>
                            <select class="custom-select" name="day" id="day">
                                <option value="1">Mon, Wed, Fri</option>
                                <option value="2">Tue, Thurs</option>
                                <option value="5">Saturdays</option>
                                
                                

                            </select>



                            <div class="half">
                                  <h1>Start Time</h1>
                                  <select class="custom-select" name="time_start" id="time_start">
                                        <option selected="selected">Select Time Start</option>          
                                        <option value="1">7:30</option>
                                        <option value="2">8:00</option>
                                        <option value="3">8:30</option>
                                        <option value="4">9:00</option>
                                        <option value="5">9:30</option>
                                        <option value="6">10:00</option>
                                        <option value="7">10:30</option>
                                        <option value="8">11:00</option>
                                        <option value="9">11:30</option>
                                        <option value="10">12:00</option>
                                    </select> 


                                </div>  

                                <div class="half">
                                  <h1>Start End</h1>
                                  <select class="custom-select" name="time_end" id="time_end">
                                        <option selected="selected">Select Time End</option>          
                                        <option value="1">8:30</option>
                                        <option value="2">9:00</option>
                                        <option value="3">9:30</option>
                                        <option value="4">10:00</option>
                                        <option value="5">10:30</option>
                                        <option value="6">11:00</option>
                                        <option value="7">11:30</option>
                                        <option value="8">12:00</option>
                                    </select> 
                               

                            </div>
                            <div>
                            </div>
                            

                            

                            </br> </br>
                                

                            </ul>
                            <form>
                                <input type="button" type="submit" id="btn_submit" class="btn btn-primary" data-toggle="modal" value="Submit Preferred Schedule"> </input>

                                <div class="modal fade color-blue" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title dark" id="exampleModalLongTitle">Successfuly Submitted</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body" style="text-align:center">
                                                <p>Preferred Schedule Submitted</p>
                                                <p><b></b></p>
                                                <p></p>

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

                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                <p class="text-primary">Subject Offering for 2nd Semester 2020-2021</p>
                        </div>
                        <div class="row">
                                <div class="col-12">
                                <div class="col-md-12">
                                    <table class="table table-striped" id="mydata">
                                        <thead>
                                            <tr style="text-align:center">
                     
                                                <th>SUBJECT CODE</th>
                                                <th>SUBJECT NAME</th>
                                                <th>ADVISEMENT COUNT</th>
                                                <th>SECTIONS</th>
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
$(document).ready(function(){
   load_data();
        $('#mydata').dataTable();

        function load_data(){
            $.ajax({
                type     : 'ajax',
                url      : '<?php echo site_url('pages/load_data')?>',
                async    : false,
                dataType : 'json',
                success  : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                      
                        html += '<tr>' + 

                               '<td>'+data[i].subject_code+'</td>'+
                               '<td>'+data[i].subject_name+'</td>'+
                               '<td>'+data[i].advisement_count+'</td>'+
                               '<Td>'+data[i].suggested_section+'</td'+
                               '</tr>';
   
                    }
                    $('#show_data').html(html); 
            }
        });

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
				load_data();
			}
		})
	});
      
        }






});




   
        $('#btn_submit').on('click', function() {

            var loading_id = $('#loading').val();
            var day = $('#day').val();
            var time_start = $('#time_start').val();
            //var schedule_id = $('#schedule_id').val();
            var time_end = $('#time_end').val();
            //var class_code = $('#class_code').val();
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('pages/insert_teacher_preferred') ?>",
                dataType: "JSON",
                data: {
                    loading: loading,
                    day: day,
                    time_start: time_start,
                    time_end: time_end,
                    
                },
                success: function(data) {
 
                    $('[name="loading"]').val("");
                    $('[name="day"]').val("");
                    $('[name="time_start"]').val("");
                    //$('[name="schedule_id"]').val("");
                    $('[name="time_end"]').val("");
                    
                    $('#Modal_Add').modal('hide');
                    $('#exampleModalCenter').modal('show');
                }

                
            });

            return false;
        });
    </script>

   

    
 
    

    </body>

</html>
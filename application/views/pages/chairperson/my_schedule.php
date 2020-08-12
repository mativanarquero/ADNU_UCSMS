
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
                                <li><a href="<?php echo base_url('my_schedule.php') ?>">View Schedule</a></li>
                            </ul>
                        </li>

                                    <li>
                                        <a href="<?php echo base_url('view_subject')?>"><i class="ti-dashboard"></i><span>Manage Subject</span></a>
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
                                            <span>Overload</span></a>
                                        <ul class="collapse">
                                            <li><a href="table-basic.html">Overload subject</a></li>

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
                            <h4 class="page-title pull-left">My Schedule</h4>
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

                                        <?php if ($this->session->flashdata('import')) { ?>
                                       <div class="alert alert-success"> <?= $this->session->flashdata('import') ?> </div>
                                        <?php } ?>

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
   load_my_schedule();
        $('#mydata').dataTable();

        function load_my_schedule(){
            $.ajax({
                type     : 'ajax',
                url      : '<?php echo site_url('pages/load_my_schedule')?>',
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
                               '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-offering_id="'+data[i].offering_id+'">Delete</a>'+
                               '</td>' +
                               '</tr>';
   
                    }
                    $('#show_data').html(html); 
            }
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
                    load_my_schedule();
                }
            });
            return false;
        });

        $('#show_data').on('click','.item_delete',function(){
            var offering_id = $(this).data('offering_id');
            
            $('#Modal_Delete').modal('show');
            $('[name="offering_id_delete"]').val(offering_id);
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
				load_my_schedule();
			}
		})
	});
      
        }




});
</script>
    

    </body>

</html>


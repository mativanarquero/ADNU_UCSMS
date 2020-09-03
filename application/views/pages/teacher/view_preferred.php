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
                                <li>
                                    <a href="<?php echo base_url('teacher_dashboard');?>" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                                </li>          
                                <li class="active">
                                    <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-book"></i><span>Preferred Schedule</span></a>
                                    <ul class="collapse">
                                        <li><a href="<?php echo base_url('teacher_preferred')?>">Add Preferred Schedule</a></li>
                                        <li class="active"><a href="<?php echo base_url('view_preferred')?>">View Preferred Schedule</a></li>
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
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.html">Home</a></li>
                                <li><span>Dashboard</span></li>
                            </ul>
                        </div>
                </div>
            </div>

            <div class="main-content-inner">
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

   <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="<?php echo base_url()?>assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/timetable.js"></script> 
    
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
    $(document).ready(function() {

        $("#subject option").filter(function() {
            return $(this).val() == $("#subject_name").val();
        }).attr('selected', true);
    
        $("#subject").on("change", function() {
    
            $("#subject_name").val($(this).find("option:selected").attr("value"));
        });
    });
    </script>
    <!-- bootstrap 4 js -->
    <script src="<?php echo base_url()?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/metisMenu.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.slicknav.min.js"></script>

    <!-- others plugins -->
    <script src="<?php echo base_url()?>assets/js/plugins.js"></script>
    <script src="<?php echo base_url()?>assets/js/scripts.js"></script>


    
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
                               '</tr>';
   
                    }
                    $('#show_data').html(html); 
            }
        });

        
      
        }






});
</script>
    

    </body>

</html>
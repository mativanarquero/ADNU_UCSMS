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
                                            <li><a href="<?php echo base_url('view_preferred')?>">View Schedule</a></li>
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


                    <div class="card">
                            <div class="card-body">
                                <div class="row">
                                <p class="text-primary">Input Preferred Schedule</p>
                                </div>
            
                                <div class="container-fluid">
            <div class="row">
            <div class="col col-4">

                              <div class="container-fluid ">

                           <div class="add-module ">
                               <br>
                                <div style="text-align:center">  <h1>LOADING SCHEME</h1></div>
                              <div class="half">
                               
                                
                                <h1>Semester</h1>
                                         <select class="custom-select"  id="semester" name="semester" onchange="populate(this.id,'units')">
                                         <option></option>
                                         <option>First Semester </option>
                                         <option>Second Semester </option>
                                         <option>Intercession </option>
                                    
                                    </select>
                                    </div>
                                    <div class="half">
                                        <h1>Units</h1>
                                        <select class="custom-select" id ="units" name="units">
                                      
                                    
                                     
                                    </select>
                                    </div>
                                    <div  style="text-align:center">
                                            <br>
                                            <button id ="add_semester" class="btn btn-primary btn-xs mb-3"> Add Semester </button>
                                      
                                              </div>
                                              <br>

                        

                                              
                                    <h1>Course Code</h1>
                                    <select class="custom-select" id="subject_code" name="subject">
                                            <option selected="selected" value="">Please Select...</option>
                                            <?php
                                            foreach($subject_list as $row)
                                            {
                                            echo '<option value="'.$row->advisement_id.'">'.$row->subject_code.'</option>';
                                            }
                                            ?>
                                        </select>
                                        <h1>Course Title</h1>
                                        <input type="text" id="subject_name" name="subject_name" value="" readonly="readonly">
                                <div style="text-align:right">
                                        <br>
                                        <button id ="add_subject" class="btn btn-primary btn-xs mb-3"> Add Subject </button>
           
                                          </div>
    

           
                
                              </div> 
                              </div>             
            </div>
            <div class="col col-8">
           
            <div class="row">
            <div class="container-fluid">
            <table class="table table-striped" id="mydata">
                                        <thead>
                                            <tr style="text-align:center">
                     
                                                <th>Semester</th>
                                                <th>Units</th>
                                            </tr>
                                        </thead>
                                        <tbody style="text-align:center">
                                            <td> </td>
                                            <td> </td>
                                        </tbody>
                                    </table>
            </div>
</div>
    <br><br><br>
<div class="row">
            <div class="container-fluid">
            <table class="table table-striped" id="mydata2">
                                        <thead>
                                            <tr style="text-align:center">
                     
                                                <th>Subject Code</th>
                                                <th>Subject Name</th>
                                            </tr>
                                        </thead>
                                        <tbody style="text-align:center">
                                            <td> </td>
                                            <td> </td>
                                        </tbody>
                                    </table>
            </div>
</div>
<div  style="text-align:center">
                                            <br>
                                            <button id ="add_semester" class="btn btn-primary btn-xs mb-3"> Send </button>
                                      
                                              </div>



    
         

            
            </div>
            

                        
                        </div>
                            </div>
                       

               <!-- offset area end -->
    <!-- jquery latest version -->
  
    <script src="<?php echo base_url(); ?>assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/timetable.js"></script> 
    <!-- bootstrap 4 js -->
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/metisMenu.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.slicknav.min.js"></script>

    <!-- others plugins -->
    <script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>      

    <script>
  jQuery(function($) {
    var units = {
        'First Semester': ['18 units', '19 units', '20 units','21 units','22 units','23 units', '24 units', '25 units', '26 units'],
        'Second Semester': ['18 units', '19 units', '20 units','21 units','22 units','23 units', '24 units', '25 units', '26 units'],
        'Intercession': ['3 units', '6 units', '9 units'],
    }
    
    var $units = $('#units');
    $('#semester').change(function () {
        var semester = $(this).val(), unts = units[semester] || [];
        
        var html = $.map(unts, function(utn){
            return '<option value="' + utn + '">' + utn + '</option>'
        }).join('');
        $units.html(html)
    });
});

        </script>
        

    <script>
$(document).ready(function(){

    $('#add_semester').click(function()
    {
       var semester = $('#semester').val();
       var units = $('#units').val();

       $('#mydata tbody:last-child').append(
           '<tr>'+
           '<td>'+ semester + '</td>' +
           '<td>'+ units + '</td>'+
           '</tr>'
       ); 
    });

    $('#subject_code').change(function(){
  var subject_code = $('#subject_code').val();
  if(subject_code != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>pages/fetchSubjectName",
    method:"POST",
    data:{subject_code:subject_code},
    success:function(data)
    {
     $('#subject_name').html(data);
    }
   });
  }
  else
  {
   $('#subject_name').html('<option value="">Select Subject Name</option>');
  }
 });


 $('#add_subject').click(function()
    {
       var subject_code = $('#subject_code').val();
       var subject_name = $('#subject_name').val();
    
       $('#mydata2 tbody:last-child').append(
           '<tr>'+
           '<td>'+ subject_code + '</td>' +
           '<td>'+ subject_name + '</td>'+
           '</tr>'
       ); 
    });
    


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
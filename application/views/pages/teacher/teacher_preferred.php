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
                                <li><a href="teacher_dashboard">Home</a></li>
                                <li><span>Add Preferred Schedule</span></li>
                            </ul>
                        </div>
                </div>
            </div>


            <div class="container-fluid ">
                        <div class="add-module ">
                            <div class="row">
                                <div class="col col-7">
                                    <form action="test.php" method="post">
    <input type="checkbox" name="subject[]" id="ICST101" value="ICST101">
    <label for="ICST101">ICST101</label> 
    <input type="checkbox" name="subject[]" id="ICST102" value="ICST102">
    <label for="ICST101">ICST102</label>
    <input type="checkbox" name="subject[]" id="CSDC101" value="CSDC101">
    <input type="checkbox" name="subject[]" id="ICST103" value="ICST103">
    <input type="checkbox" name="subject[]" id="ICST104" value="ICST104">
    <input type="submit" />
</form>
<?php
if(!empty($_POST['subject'])) {
    foreach($_POST['subject'] as $check) {
            echo $check; //echoes the value set in the HTML form for each checked checkbox.
                         //so, if I were to check 1, 3, and 5 it would echo value 1, value 3, value 5.
                         //in your case, it would echo whatever $row['Report ID'] is equivalent to.
    }
}
?>

                                </div>

                                <div class="col col-5">
                                    
                                </div>
                            </div>



                            <h1>Day Scheme</h1>
                            <select class="custom-select" name="day" id="day">
                                <option value="">Select Day Scheme</option>
                                <?php
                                foreach ($day as $row) {
                                    echo '<option value="' . $row->day_name . '">' . $row->day_name . '</option>';
                                }
                                ?>

                            </select>



                            <div class="half">
                                <h1>Preferred Time Start</h1>
                                <select class="custom-select" name="time_start" id="time_start">
                                    <option value="">Select Time Start</option>
                                    <?php
                                    foreach ($time_start as $row) {
                                        echo '<option value="' . $row->Time_Start_ID . '">' . $row->time_start_name . '</option>';
                                    }
                                    ?>

                                </select>


                            </div>

                            <div class="half">
                                <h1>Preferred Time End</h1>
                                <select class="custom-select" name="time_end" id="time_end">
                                    <option value="">Select Time End</option>
                                    <?php
                                
                                    foreach ($time_end as $row) {
                                        echo '<option value="' . $row->time_end_id . '">' . $row->time_end_name . '</option>';
                                    }
                                    ?>

                                </select>

                            </div>

                            <h1>Loading Scheme</h1>
                            <select class="custom-select" name="loading_scheme" id="loading_scheme">
                                <option value="">Select loading scheme</option>
                                <?php
                                foreach ($loading_scheme as $row) {
                                    echo '<option value="' . $row->loading_id . '">' . $row->loading_name . '</option>';
                                }
                                ?>

                            </select>
                                

                            </ul>
                            <form>
                                <input type="button" type="submit" id="btn_submit" class="btn btn-primary" data-toggle="modal" value="Create Schedule"> </input>

                                <div class="modal fade color-blue" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title dark" id="exampleModalLongTitle">Successfuly Created</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body" style="text-align:center">
                                                <p>Schedule Sucessfully Created</p>
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
        $('#btn_submit').on('click', function() {
            var faculty_id = $('#faculty').val();
            var day = $('#day').val();
            var subject_id = $('#advisement').val();
            //var schedule_id = $('#schedule_id').val();
            var loading_id = $('#loading_scheme').val();
            var time_start = $('#time_start').val();
            var time_end = $('#time_end').val();
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('pages/insert_subject_offering') ?>",
                dataType: "JSON",
                data: {
                    faculty_id: faculty_id,
                    day: day,
                    subject_id: subject_id,
                    loading_id: loading_id,
                    time_start: time_start,
                    time_end: time_end
                },
                success: function(data) {
 
                    $('[name="faculty_id"]').val("");
                    $('[name="day"]').val("");
                    $('[name="subject_id"]').val("");
                    $('[name="schedule_id"]').val("");
                    $('[name="loading_id"]').val("");
                    $('[name="time_start"]').val("");
                    $('[name="time_end"]').val("");
                    $('#Modal_Add').modal('hide');
                    $('#exampleModalCenter').modal('show');
                }

            });

            return false;
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#select').css('color', 'blue');
            $('#select').change(function() {
                var current = $('#select').val();
                if (current != 'null') {
                    $('#select').css('color', 'red');
                } else {
                    $('#select').css('color', 'blue');
                }
            });
        });
    </script>
    <script>
        (function() {
            $('ul.day-picker li').on('click', function() {
                $(this).toggleClass('day-selected');
            });

            $('ul.color-picker li').on('click', function() {
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
            $("#advisement").on("change", function() {
                $("#subject_name").val($("option:selected", this).attr('subject_name'));
            });
        });
    </script>
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



            

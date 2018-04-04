<!-- AUTHOR:
  -BACK END :
              - CHRISTIAN SHEVA ALEXANDER
              - VITO RADITYA FAUZAN
  -FRONT END : 
              -ALDIAN FEBRIYANTO
              -FARIZ AZHAR KHALIED
  
  -
  -
  SMK BAKTI IDHATA 
-->

<?php 
    require_once('login/config.php');
    session_start();
    
    if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
        echo "<script> alert('Harap Login Dahulu')</script>";
        header("Location: login/index.php");
        exit;
    }
?>

            <div class="container-fluid" style="width: 100%; height: 100%;">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h1 class="text-themecolor">Profile</h1>
                        
                    </div>
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <?php
                                        if($_SESSION['username'])
                                        { 
                                            $session = $_SESSION['username'];
                                           $count=$dbo->prepare("select * from plus_signup where username='$_SESSION[username]'");
                                            if(!($count->execute())){
                                            echo "Database Problem ";
                                            exit;
                                            }else{
                                            $show = $count->fetch(PDO::FETCH_OBJ);
                                            }
                                        }?>
                                <center class="m-t-30"> <img src="assets/images/users/login.png" class="img-circle" width="150" />
                                    <h4 class="card-title m-t-10"><?php echo $show->username; ?></h4><br>
                                    <h3 class="card-title m-t-10"><?php echo $show->division; ?></h3><br>
                                    <div class="row text-center justify-content-md-center">
                                    <!--<div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-medium"><?php //echo $show['mem_id']; ?></font></a></div>-->
                                    </div>
                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Tab panes -->
                            <div class="card-body">
                                <form class="form-horizontal form-material">
                                    <div class="form-group">
                                        
                                    <?php
                                        if($_SESSION['username'])
                                        { 
                                            $session = $_SESSION['username'];
                                           $count=$dbo->prepare("select * from plus_signup where username='$_SESSION[username]'");
                                            if(!($count->execute())){
                                            echo "Database Problem ";
                                            exit;
                                            }else{
                                            $show = $count->fetch(PDO::FETCH_OBJ);
                                            }
                                        }?> <!-- DIBAWAH INI -->

                                        <label class="col-md-12">Name :</label>
                                        <div class="col-md-12">
                                            <h4><?php echo $show->nama;?></h4>
                                        </div><br>
                                    </div>


                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email :</label>
                                        <div class="col-md-12">
                                            <h4><?php echo $show->email; ?></h4>
                                        </div><br>
                                    </div>

                                    
                                    <div class="form-group">
                                            <label class="col-md-12">Phone Number :</label>
                                            <div class="col-md-12">
                                                <h4><?php echo $show->phone; ?></h4>
                                        </div><br><br><br>

                                       <!--<a role="button" href="#" class='open_modal btn btn-sm btn-primary' id='<?php //echo  $row['nik']; ?>'> <i class="glyphicon glyphicon-pencil"></i> Edit</a>&nbsp;-->

                                    </div>

                                    <button class="btn btn-success" onclick="openPage('login/change-password.php')"> CHANGE PASSWORD</button><br><br>
                                    <button class="btn btn-success" onclick="openPage('login/update-profile.php')"> UPDATE</button>
                               

                                </div>

                                <!-- Modal Popup untuk Edit--> 
                                <div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
     <!-- Modal -->
    <div id="popupModal2" class="modal hide fade" tabindex="-1" role="dialog">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
            <h3>Title</h3>
    </div>
    <div class="modal-body">
      <iframe src="" style="zoom:0.60" frameborder="0" height="250" width="99.6%"></iframe>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal">OK</button>
    </div>
</div>
<!--modal end-->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <!-- <script src="../assets/js/jquery-1.12.4.min.js"></script>
    -->

    <script type="text/javascript">
   $(document).ready(function () {
   $(".open_modal").click(function(e) {
      var m = $(this).attr("id");
           $.ajax({
                   url: "edit_profile/modal_edit.php",
                   type: "GET",
                   data : {nik: m,},
                   success: function (ajaxData){
                   $("#ModalEdit").html(ajaxData);
                   $("#ModalEdit").modal('show',{backdrop: 'true'});

               },

               error: function (xhr, ajaxOptions, thrownError) { // Ketika terjadi error
                alert(xhr.responseText); // munculkan alert
                }

               });
        });
      });
</script>

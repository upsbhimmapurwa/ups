<?php
session_start();
include ('include.php');
if (!isset($_SESSION['username'])||!isset($_SESSION['role']))
 {
  header('location:index.php');
}
$name=$_SESSION['username'];
$role=$_SESSION['role'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>U.P.S. BHIMMAPURWA</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/dashboard/1-4-7/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/dashboard/1-4-7/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/dashboard/1-4-7/css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/dashboard/1-4-7/css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/dashboard/1-4-7/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/dashboard/1-4-7/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/dashboard/1-4-7/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="https://d19m59y37dris4.cloudfront.net/dashboard/1-4-7/img/favicon.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center" style="text-transform: capitalize;"><img src="../images/head1.jpg" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5" ><?= $_SESSION['username'];?></h2><span><?= $_SESSION['role'];?></span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.php" class="brand-small text-center"> <strong>M</strong><strong class="text-primary">V</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
       <div class="main-menu">
          <h5 class="sidenav-heading">DASHBOARD</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li ><a href="index.php"> <i class="icon-home"></i>Home  </a></li>
            <li  ><a href="teacher.php"> <i class="fa fa-chalkboard-teacher"></i>Teacher   </a></li>
        
            <li  ><a href="newstudent.php"> <i class="fas fa-user-tie"></i>New Student  </a></li>
            <li><a href="class.php"> <i class="fa fa-bar-chart"></i>Class  </a></li>
            <li ><a href="year.php"> <i class="icon-grid"></i>Year    </a></li>
            <li><a href="register.php"> <i class="icon-interface-windows"></i>Register Admin </a></li>
            <li class="active"><a href="subject.php"> <i class="icon-interface-windows"></i>Subject </a></li>
            <li><a href="exam.php"> <i class="icon-padnote"></i>Examination </a></li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Student Result</a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="result.php">Add Result</a></li>
                <li><a href="showresult.php">Show Result</a></li>
                <li><a href="#">Page</a></li>
              </ul>
            </li>
            <li><a href="search.php"> <i class='fas fa-search'></i>Search Data </a></li>
          </ul>
        </div>
    </nav>
    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="fa fa-outdent" style="font-size:20px;color:red"> </i></a><a href="index.html" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><strong class="text-success">U.P.S. BHIMMAPURWA</strong> <span>Aminabad Katri, Kannauj</span></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Log out-->
                <li class="nav-item"><a href="login.html" class="nav-link logout" style="font-size:15px;color:red"> <span class="d-none d-sm-inline-block">Logout</span><i class='fas fa-sign-out-alt' ></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Subject     </li>
          </ul>
        </div>
      </div>
      <section>
        <div class="container-fluid">
          <!-- Page Header-->
         <h2 class="text-primary text-uppercase text-center">
  SUBJECT RECORD FOR STUDENT
  </h2>
    <div class="d-flex justify-content-end">
  <!-- Button to Open the Modal -->
      <button type="button" class="btn btn-primary btn-success" data-toggle="modal" data-target="#myModal">Add Records </button>
    </div>
  <h3 class="text-primary" > All Records</h3>
  <div id="record_container">

    
  </div>
  <!-- The Modal -->
<div class="modal fade" id="myModal">>
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Subject</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="form-group">
          <label>Subject ID</label>
          <input type="text" name="sub_id" id="sub_id" class="form-control" placeholder="Enter Subject ID">
        
        </div>
        <div class="form-group">
          <label>Subject</label>
          <input type="text" name="sub" id="sub" class="form-control" placeholder="Enter Subject">
        
        </div>     

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button"  name="submit" class="btn btn-success" data-dismiss="modal" onclick="addsub()" >Save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<!-- /// update data modal
 --><!-- The Modal -->
<div class="modal fade" id="UpdateModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Update sub</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="form-group">
          <label>Subject ID</label>
          <input type="text" name="sub_id" id="updatesub_id" class="form-control" placeholder="Enter Subject ID">
        
        </div>
        <div class="form-group">
          <label>Subject</label>
          <input type="text" name="sub" id="updatesub" class="form-control" placeholder="Enter Subject">
        
        </div>     

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button"  name="submit" class="btn btn-success" data-dismiss="modal" onclick="update_sub()" >Update</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <input type="hidden" name="" id="hidden_sub_id">
      </div>

    </div>
  </div>
</div>

</div>
  

<script type="text/javascript">


  $(document).ready(function(){
     readRecord();
  });


function readRecord()
{
  var readrecord = "readrecord";
  $.ajax({
      url: "addsubject.php",
      type: "post",
      data: { readrecord : readrecord },
      success:function(data, status){
        $('#record_container').html(data);
      }
  });
}

  function addsub()
    {

      var sub_id = $('#sub_id').val();
      var sub = $('#sub').val();
      $.ajax({
        url:"addsubject.php",
        type:"post",
        data:{
          sub_id : sub_id,
          sub : sub
        },
        success:function(data, status)
        {
          readRecord();       }

      });
    }
    ///delete record
    function deleteData(deleteid){
      var conf= confirm("Are you sure to delete data");
      if(conf==true)
      {
        $.ajax({
          url:"addsubject.php",
            type:"post",
            data:{
          deleteid : deleteid
        
        },
        success:function(data, status)
        {
          readRecord();       }

      }); 
      }
    }
/// edit data
function editData(sub_id)
{
 $('#hidden_sub_id').val(sub_id);
 $.post("addsubject.php",{
  sub_id:sub_id
 },function(data , status){
  var user = JSON.parse(data);
  $('#updatesub_id').val(user.sub_id);
  $('#updatesub').val(user.subject);
 }
 );
 $('#UpdateModal').modal("show");

}
///save update
function update_sub()
{
  var editsub_id = $('#updatesub_id').val();
  var editsub=$('#updatesub').val();
  var edithidden_sub_id=$('#hidden_sub_id').val();
  $.post("addsubject.php",{
    editsub_id:editsub_id,
    editsub:editsub,
    edithidden_sub_id:edithidden_sub_id
  },
  function(data,status){
     $('#UpdateModal').modal("hide");
     readRecord();
  }
  );

}



    </script>
            </div>
          </div>
        </div> 
      </section>
      <!-- <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p>U.P.S.BHIMMAPURWA &copy; 2018-2020</p>
            </div>
            <div class="col-sm-6 text-right">
              <p>Design by <a href="" class="external">Tr. <div class="name"><?php //echo $name; ?>    </div></a></p>
              <Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions and it helps me to run Bootstrapious. Thank you for understanding :)-->
            <!-- </div>
          </div>
        </div>
      </footer> -->
    </div>
     
    <!-- JavaScript files-->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="../admin/dashboard/jquery/jquery.min.js"></script>
    <script src="../admin/dashboard/jquery/bootstrap.bundle.min.js"></script>
    <script src="../admin/dashboard/jquery/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="../admin/dashboard/jquery/jquery.cookie.js"> </script>
    <script src="../admin/dashboard/jquery/Chart.min.js"></script>
    <script src="../admin/dashboard/jquery/jquery.validate.min.js"></script>
    <script src="../admin/dashboard/jquery/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Main File-->
    <script src="../admin/dashboard/jquery/front.js"></script>
  </body>
</html>
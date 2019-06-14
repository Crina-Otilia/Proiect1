<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <div id="fb-root"></div>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ro_RO/sdk.js#xfbml=1&version=v3.3"></script>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-candy-cane"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Mi Ka</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="meinMenu.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Meniu Principal</span></a>
      </li>
      
      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="contact.php">
          <i class="fas fa-fw fa-cog"></i>
          <span>Contact</span></a>
      </li>
      
       <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="about.php">
          <i class="fas fa-fw fa-question-circle"></i>
          <span>Despre noi</span></a>
      </li>
 
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Cont</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.php">Login</a>
            <a class="collapse-item" href="register.php">Register</a>
            <a class="collapse-item" href="forgot-password.php">Forgot Password</a>
            <div class="collapse-divider"></div>
          </div>
        </div>
      </li>
<div class="fb-like" data-href="https://www.facebook.com/UAICdinIASI/" data-width="12" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
     
      
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
      
       

    </ul>
    
    <!-- End of Sidebar -->
     <?php
        include'connection.php';
        $sql='SELECT * FROM porduct;';
        $query= mysqli_query($con, $sql) or die(mysqli_error($con));
        $sql1='SELECT * FROM users;';
        $query1= mysqli_query($con, $sql1) or die(mysqli_error($con));
        ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

           

<div id="container">

<svg width="500" height="100">
    <symbol id="shape2">
        <circle cx="25" cy="25" r="25" />
    </symbol>

    <use xlink:href="#shape2" x="50" y="25" />
</svg>


</div>
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link " href="#"  role="button"  aria-haspopup="true" aria-expanded="false">
               
      <div class="error success" >
      	<h3>
         
              </a>
              <!-- Dropdown - User Information -->
              
            </li>

          </ul>

        </nav>
        <div class="content">
  	<!-- notification message -->
  	

    <!-- logged in user information -->
   
</div>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Produsele noastre</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

        <?php
require_once 'connection.php';
$msg="";
if(isset($_POST['upload'])){
    $target="./porduct/".md5(uniqid(time())). basename($_FILES['image']['name']);
    $text=$_POST['text'];
    $sql="INSERT INTO porduct(title,image)VALUES('$text','$target')";
    mysqli_query($con, $sql);
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
        header('location:index.php');
    }
    else{
        $msg="Vai! Vai! Vai!";
    }
}
?>
        </div>
      

    <!-- End of Content Wrapper -->

 
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>
 

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
<script>
  var container = document.getElementById('container');
var arches = document.getElementsByClassName('arches');
var archesSVGNode = document.querySelector('.arches-svg-node');
var splashLines = document.getElementsByClassName('splash-lines');
TweenMax.set(splashLines, {
  drawSVG:'40 60'
})

TweenMax.set('svg', {
  
  visibility:'visible'
})

//console.log(splashLines.getTotalLength())
var cloned = archesSVGNode.cloneNode(true);
container.appendChild(cloned)

TweenMax.set(cloned, {
  transformOrigin:'50% 100%',
  rotationX:180,
  y:'+=57',
  alpha:0.08
})



TweenMax.set(container, {
  position:'absolute',
  left:'50%',
  xPercent:-50,
  top:'50%',
  yPercent:-50
})
TweenMax.set(arches, {
  drawSVG:'100% 100%'
  
})


var tl = new TimelineMax({repeat:-1, yoyo:false, repeatDelay:1});
tl.timeScale(1);


tl.to(arches, 0.8, {
  drawSVG:'550 600',
  ease:Linear.easeNone
})

.to(arches, 2, {
  drawSVG:'-1% -5%',
  ease:Linear.easeNone
})

.to(splashLines, 0.8, {
  drawSVG:0,
  ease:Power2.easeOut,
  alpha:1
}, '-=0.2')

.to(splashLines, 0.8, {
  
  alpha:0
}, '-=0.65')

</script>
  
</body>

</html>




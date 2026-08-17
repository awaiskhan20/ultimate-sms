<!DOCTYPE html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Webarch - Responsive Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN CORE CSS FRAMEWORK -->
    <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
    <!-- END CORE CSS FRAMEWORK -->
    <!-- BEGIN CSS TEMPLATE -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/magic_space.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
  <!-- END CSS TEMPLATE -->
  </head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="error-body no-top lazy"  data-original="assets/img/work.jpg"  style="background-image: url('assets/img/work.jpg')"> 
  <div class="container">
    <div class="row login-container animated fadeInUp">  
      <div class="col-md-5 tiles white no-padding">
        <div class="p-t-30 p-l-40 p-b-20 xs-p-t-10 xs-p-l-10 xs-p-b-10"> 
          <h2 class="normal">Register</h2>
        </div>
        <div class="tiles grey p-t-20 p-b-20 text-black">
          <form id="frm_login" method="post" action="act_add_register.php" class="animated fadeIn">    
            <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
              <div class="col-md-12 col-sm-12 ">
                <div class="form_field">
                  <input name="fullname" id="fullname" type="text"  class="form-control" placeholder="Full Name">
                </div>
                <div class="form_field">
                  <input name="email" id="email" type="email"  class="form-control" placeholder="Email">
                </div>
                <div class="form_field">
                    <select name="city" id="city" class="form-control">
                    <?php
                        require 'config/db.php';

                        $query = mysqli_query($connection, "SELECT * FROM countries");
                        while($row = mysqli_fetch_assoc($query)) {
                        echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
                        }
                    ?>
                </div>
                <div class="from_field">
                  <input name="password" id="password" type="password"  class="form-control" placeholder="Password">
                </div>
              </div>
            </div>
            <div class="row p-t-10 m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
              <div class="control-group  col-md-10">
                <button type="submit" class="btn btn-primary btn-cons" id="login_toggle">Register</button>
              </div>
            </div>
          </form>
        </div>   
      </div>   
    </div>
  </div>
  <!-- END CONTAINER -->
  <!-- BEGIN CORE JS FRAMEWORK-->
  <script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
  <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
  <script src="assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
  <script src="assets/plugins/jquery-lazyload/jquery.lazyload.min.js" type="text/javascript"></script>
  <script src="assets/js/login_v2.js" type="text/javascript"></script>
  <!-- BEGIN CORE TEMPLATE JS -->
  <!-- END CORE TEMPLATE JS -->
</body>
</html>
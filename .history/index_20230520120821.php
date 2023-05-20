<?php
require 'authentication.php'; // admin authentication check 

// auth check
if(isset($_SESSION['admin_id'])){
  $user_id = $_SESSION['admin_id'];
  $user_name = $_SESSION['admin_name'];
  $security_key = $_SESSION['security_key'];
  if ($user_id != NULL && $security_key != NULL) {
    header('Location: task-info.php');
  }
}

if(isset($_POST['login_btn'])){
 $info = $obj_admin->admin_login_check($_POST);
}

$page_name="Login";
include("include/login_header.php");

?>

<div class="row">
	<div class="col-md-4 col-md-offset-3">
		<div class="well" style="position:relative; text-align:center; left:20%;margin-top:45% ;
		">
		<center>
			<h2 style="margin-top:1px; font-size:20px ;     margin-top: 1px;
    font-size: 20px;
    margin-bottom: 30px;    text-transform: uppercase;"> Quản Lý Công Việc Nhân Viên</h2>
	</center>
			<form class="form-horizontal form-custom-login" action="" method="POST">
			  <div class="form-heading" style="color:green">
			    <h2 class="text-center"  style="font-size: 15px ; color:black"> Tài Khoản </h2>
			  </div>
			  
			  <!-- <div class="login-gap"></div> -->
			  <?php if(isset($info)){ ?>
			  <h5 class="alert alert-danger"><?php echo $info; ?></h5>
			  <?php } ?>
			  <div class="form-group">
			    <input type="text" class="form-control" placeholder="Vui Lòng Nhập Tài Khoản" name="username" required maxlength="15" autocomplete="off"/>
			  </div>
			  <div class="form-group" ng-class="{'has-error': loginForm.password.$invalid && loginForm.password.$dirty, 'has-success': loginForm.password.$valid}">
			    <input type="password" class="form-control" placeholder="Vui Lòng Nhập Mật Khẩu" name="admin_password" required maxlength="15" autocomplete="off"/>
			  </div>
			  <button type="submit" name="login_btn" class="btn btn-info pull-right" style="font-size:15px">Đăng Nhập</button>
			</form>
		</div>
	</div>
</div>


<?php

include("include/footer.php");

?>

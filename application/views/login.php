<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title><?= $title ?> - <?= APP_TITLE ?></title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    
  <link href="<?= base_url() ?>assets/vendors/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">    
  <link href="<?= base_url() ?>assets/vendors/datatables/dataTables.button.min.css" rel="stylesheet">  
  <link href="<?= base_url() ?>assets/vendors/jquery-ui/jquery-ui.min.css" rel="stylesheet">
      
      
    <script src="assets/js/jquery-1.11.1.js"></script>
</head>
<body>
  <style type="text/css">
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
</head>
<body>
<div class="login-form">
    <form action="<?php echo base_url('auth/cek_login')?>" method="post">
        <h2 class="text-center"><?= APP_TITLE ?></h2>
        <h3 class="text-center">Log in</h3>       
        <div class="form-group">
            <input type="text" class="form-control" name="nik" placeholder="NIK" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
    </form>
</div>

</body>
</html>
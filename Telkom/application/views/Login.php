<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Log In Form</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/login.css">
</head>
<body>
    <div  style="margin-top:10%;margin-bottom:10%;text-align:center;">
                    <img src="<?php echo base_url('/TA.png'); ?>" style="height: 25%;width: 60%;margin-bottom:10%px"/>
        <h1 style="color:#808080;">Warehouse Telkom Akses</h1>
        </div>
    <div class="login-page" style="margin-top:-10%;">
      <div class="form">
            <form class="login-form" action="<?php echo site_url('welcome/login') ?>" method="POST">
              	<input name="username" type="text" placeholder="username"/>
              	<input name="password" type="password" placeholder="password"/>
              	<button>login</button>
<!--              	<p class="message">Not registered? <a href="#">Create an account</a></p>-->
            </form>
          <p style="color:#ff1a1a;"><?php echo $this->session->flashdata('err') ?></p>
  		</div>
	</div>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/login.js"></script>
</body>
</html>
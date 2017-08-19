<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Home Form</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/home.css">
    <script>
var links = "<?php echo site_url('welcome/kbm_booking_count'); ?>";
var i = 0;
var renew = setInterval(function(){
    document.getElementById("notif").src = links;        
  // alert("refreshed");
},5000);
</script></head>
	<body>
		<div id="main">
			<div class="container">
				<div  style="margin-top:150px;margin-bottom:30px;text-align:center;">
                    <img src="<?php echo base_url('/TA.png'); ?>" style="width: 40%;margin-bottom:15px"/>
				<h1>KBM TELKOM AKSES</h1>
				</div>
				<nav>
					<div class="nav-fostrap">
						<ul>
							<li><a href='<?php echo site_url('welcome/home'); ?>'>Home</a></li>
							<li><a href="javascript:void(0)">History<span class="arrow-down"></span></a>
                                   <ul class="dropdown">
									<li><a href="<?php echo site_url('welcome/history_terima')?>">History Terima</a></li>
									<li><a href="<?php echo site_url('welcome/history_tolak')?>">History Tolak</a></li>
                                </ul>
							</li>
                            <li><a href='<?php echo site_url('welcome/status_peminjaman_admin'); ?>'>KBM Kembali
                                </a>   
							</li>
							<li><a href='<?php echo site_url('welcome/peminjaman') ?>'>
                                <span class="notification"></span>
                                <iframe id="notif" src="<?php echo site_url('welcome/kbm_booking_count'); ?>" scrolling="no";></iframe>
    						</a>
                     </li>
							<li><a href="javascript:void(0)"><?php echo $_COOKIE['name']  ?><span class="arrow-down"></span></a>
                                <ul class="dropdown">
									<!-- <li><a href="">Profil</a></li> -->
									<li><a href="<?php echo site_url('welcome/logout')?>">Logout</a></li>
                                </ul>
                            </li>
						</ul>
                        
					</div>
                    <!-- <button>Increment Notifications</button> -->
					<div class="nav-bg-fostrap">
					<div class="navbar-fostrap"> <span></span> <span></span> <span></span> </div>
						
					</div>
				</nav>
				<div class='content'>
				</div>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/home.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/notif.js"></script>
	</body>
</html>
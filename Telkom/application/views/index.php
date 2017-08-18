<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Home Form</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/indexcss.css">
</head>
	<body>
		<div id="main">
			<div class="container">
				<div  style="margin-top:150px;margin-bottom:30px;text-align:center;">
                    <img src="<?php echo base_url('/TA.png'); ?>" style="width: 40%;margin-bottom:15px"/>
				<h1>Warehouse Telkom Akses</h1>
				</div>
				<nav>
					<div class="nav-fostrap">
						<ul>
							<li><a href="">Home</a></li>
							<li><a href="javascript:void(0)">Material<span class="arrow-down"></span></a>
								<ul class="dropdown">
									<li><a href="">Peminjaman Material</a></li>
									<li><a href="">Pengembalian material</a></li>
								</ul>
							</li>
							<li><a href="javascript:void(0)" >ALKER/SARKER<span class="arrow-down"></span></a>
								<ul class="dropdown">
									<li><a href="">Peminjaman ALKER/SARKER</a></li>
									<li><a href="">Pengembalian ALKER/SARKER</a></li>
								</ul>
							</li>
							<li><a href="javascript:void(0)" >KBM<span class="arrow-down"></span></a>
								<ul class="dropdown">
									<li><a href="">Booking KBM</a></li>
									<li><a href="">Pengembalian KBM</a></li>
								    <li><a href="">Pembatalan booking KBM</a></li>
                                </ul>
							</li>
                            
							<li style="float:right;"><a href="javascript:void(0)" >Username<span class="arrow-down"></span></a>
                                <ul class="dropdown">
									<li><a href="">Profil</a></li>
									<li><a href="">Logout</a></li>
                                </ul>
                            </li>
						</ul>
					</div>
					<div class="nav-bg-fostrap">
					<div class="navbar-fostrap"> <span></span> <span></span> <span></span> </div>
						
					</div>
				</nav>
				<div class='content'>
				</div>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/indexjs.js"></script>
	</body>
</html>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Home Form</title>
    <?php
    if (isset($_COOKIE['name'])) {
        redirect(site_url('welcome/home'));
    }
    ?>
<!--    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/home.css">-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/menu.css">
</head>
	<body background="<?php echo base_url('mobil.png'); ?>">
<!--        <body>-->
            <center>
        <table style="width:50%;height:80vh;background:#fff;margin-top:5%;">
            <tr>
            <td>
            
            
				<div style="margin-top:10%px;margin-bottom:30px;text-align:center;">
                    <img src="<?php echo base_url('/TA.png'); ?>" style="width: 60%;margin-bottom:15px"/>
				<h1 style="font-family:helvetica;color:#8c8c8c;">KBM TELKOM AKSES</h1>
				</div>
				    <div class="wrapper">
                        <div class="button">
        <a class="user-friendly" href="<?php echo site_url('welcome/status_peminjaman')?>">KBM Sedang Dipinjam</a>
          <div class="background"></div>
    </div><br>
    <div class="button">
        <a href="<?php echo site_url('welcome/peminjaman_kbm')?>">Peminjaman KBM</a>
      <div class="background"></div>
    </div><br>
    <div class="button">
        <a class="user-friendly" href="<?php echo site_url('welcome/login')?>">Login Admin</a>
          <div class="background"></div>
    </div></div></td></tr></table></center>
<!--
        <div class="layer">
        
        </div>
-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/home.js"></script>
	</body>
</html>
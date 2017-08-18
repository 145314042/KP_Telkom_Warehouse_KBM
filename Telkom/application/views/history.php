<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Peminjaman</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/home.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/menu.css">
</head>
	<body>
		<div id="main">
			<div class="container">
				<div  style="margin-top:150px;margin-bottom:30px;text-align:center;">
                    <img src="<?php echo base_url('/TA.png'); ?>" style="width: 40%;margin-bottom:15px"/>
				<h1>KBM TELKOM AKSES</h1>
				</div>
                <center>
                <table style="width:80%;text-align:center;">
  <tr>
    <th>Peminjam</th>
    <th>Mobil</th> 
    <th>Keperluan</th>
    <th>Durasi</th>
    <th>Tanggal Pinjam</th>
    <th>Waktu Pinjam</th>
    <th>Tanggal Kembali</th>    
    <th>Waktu Kembali</th>
    <th>Pemberi</th>
    <th>Status</th>
  </tr>
  <?php foreach ($showHistory as $row): ?>
    <tr>
      <td><?php echo $row->Peminjam;?></td>
      <td><?php echo $row->NomorPolisi;?></td>
      <td><?php echo $row->Keperluan;?></td>
      <td><?php echo $row->Durasi;?></td>
      <td><?php echo $row->TanggalPinjam;?></td>
      <td><?php echo $row->WaktuPinjam;?></td>
      <td><?php echo $row->TanggalKembali?></td>
      <td><?php echo $row->WaktuKembali;?></td>
      <td><?php echo $row->Pemberi;?></td>
      <?php 
        $StatusState = $row->Status;
        if ($StatusState == 0) {
          $status = 'mobil akan dipinjam';
        }elseif ($StatusState == 1) {
          $status = 'mobil sudah kembali';
        }elseif ($StatusState == 2) {
          $status = 'mobil sendang dipinjam';
        }elseif ($StatusState == -1) {
          $status = 'mobil ditolak untuk dipinjam';
        }
      ?>
      <td><?php echo $status;?></td>
    </tr>
    
  <?php endforeach ?>
</table>
<br><br><br>
<br><br><br>
                  <div class="button">
        <a class="user-friendly" href='<?php echo site_url('welcome/home'); ?>'>Kembali</a>
          <div class="background"></div>
                    </div></center>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/home.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/notif.js"></script>
	</body>
</html>
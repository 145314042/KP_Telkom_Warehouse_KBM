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
        <h2>Mobil Diijinkan</h2>
  <tr>
    <th>Peminjam</th>
    <th>NIK</th>
    <th>Nomor Telepon</th>
    <th>Mobil</th> 
    <th>Keperluan</th>
    <th>KM Ambil</th>
    <th>KM Kembali</th>
    <th>Durasi (Jam)</th>
    <th>Tanggal Pinjam</th>
    <th>Waktu Pinjam</th>
    <th>Waktu Ambil</th>
    <th>Tanggal Kembali</th>
    <th>Waktu Kembali</th>
    <th>Pemberi</th>
    <!-- <th>Status</th> -->
  </tr>
  <?php foreach ($showHistoryApprove as $row): ?>
    <?php
    $Peminjam = $row->Peminjam;
    $Nik = $row->NIK;
    $NomorTelepon = $row->NomorTelepon;
    $NomorPolisi = $row->NomorPolisi;
    $Keperluan = $row->Keperluan;
    $KmAmbil = $row->KMAmbil;
    $KmKembali = $row->KMKembali;
    $Durasi = $row->Durasi;
    $TanggalPinjam = $row->TanggalPinjam;
    $WaktuPinjam = $row->WaktuPinjam;
    $WaktuAmbil = $row->WaktuAmbil;
    $TanggalKembali = $row->TanggalKembali;
    $WaktuKembali = $row->WaktuKembali;
    $Pemberi = $row->Pemberi;
    // $StatusIndex = $row->Status;
    // if ($StatusIndex==2) {
    //   $Status='Mobil sedang dipinjam';
    // }elseif ($StatusIndex==1) {
    //   $Status='Mobil sudah kembali';
    // }
    ?>
    <tr>
      <td><?php echo $Peminjam;?></td>
      <td><?php echo $Nik;?></td>
      <td><?php echo $NomorTelepon;?></td>
      <td><?php echo $NomorPolisi;?></td>
      <td><?php echo $Keperluan;?></td>
      <td><?php echo $KmAmbil;?></td>
      <td><?php echo $KmKembali;?></td>
      <td><?php echo $Durasi;?></td>
      <td><?php echo $TanggalPinjam;?></td>
      <td><?php echo $WaktuPinjam;?></td>
      <td><?php echo $WaktuAmbil;?></td>
      <td><?php echo $TanggalKembali;?></td>
      <td><?php echo $WaktuKembali;?></td>
      <td><?php echo $Pemberi;?></td>      
      <!-- <td><?php echo $Status;?></td>       -->
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
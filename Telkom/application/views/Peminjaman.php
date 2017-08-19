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
    <th>NIK</th>
    <th>Nomor Telepon</th>
    <th>Mobil</th> 
    <th>Keperluan</th>
    <th>Durasi (Jam)</th>
    <th>Tanggal Pinjam</th>
    <th>Waktu Pinjam</th>
    <th>KM Ambil</th>
    <th>Aksi</th>
  </tr>
  <?php foreach ($showBooking as $row): ?>
    <?php
    $Peminjam = $row->Peminjam;
    $NIK = $row->NIK;
    $NomorTelepon = $row->NomorTelepon;
    $NomorPolisi = $row->NomorPolisi;
    $Keperluan = $row->Keperluan;
    $Durasi = $row->Durasi;
    $TanggalPinjam = $row->TanggalPinjam;
    $WaktuPinjam = $row->WaktuPinjam;
    $Pemberi = $_COOKIE['name'];
    ?>
    <tr>
      <td><?php echo $Peminjam;?></td>
      <td><?php echo $NIK;?></td>
      <td><?php echo $NomorTelepon;?></td>
      <td><?php echo $NomorPolisi;?></td>
      <td><?php echo $Keperluan;?></td>
      <td><?php echo $Durasi;?></td>
      <td><?php echo $TanggalPinjam;?></td>
      <td><?php echo $WaktuPinjam;?></td>
      <td>
          <form method="POST" action='<?php echo site_url('welcome/kbm_approve_booking') ?>'>
              <?php echo '<input placeholder="KM Ambil" type="text" pattern="[0-9]*" name="kmAmbil" title="Hanya boleh angka" required>';?>
              <?php echo '<input type="hidden" name="nomorPolisi" value="'.$NomorPolisi.'">';?>
              <?php echo '<input type="hidden" name="peminjam" value="'.$Peminjam.'">';?>
              <?php echo '<input type="hidden" name="nik" value="'.$NIK.'">';?>
              <?php echo '<input type="hidden" name="nomorTelepon" value="'.$NomorTelepon.'">';?>
              <?php echo '<input type="hidden" name="keperluan" value="'.$Keperluan.'">';?>
              <?php echo '<input type="hidden" name="durasi" value="'.$Durasi.'">';?>
              <?php echo '<input type="hidden" name="tanggalPinjam" value="'.$TanggalPinjam.'">';?>
              <?php echo '<input type="hidden" name="waktuPinjam" value="'.$WaktuPinjam.'">';?>
              <?php echo '<input type="hidden" name="pemberi" value="'.$Pemberi.'">';?>
              <input type="submit" value="Izinkan">
          </form>
          <form method="POST" action='<?php echo site_url('welcome/kbm_decline_booking') ?>'>
              <?php echo '<input type="hidden" name="nomorPolisi" value="'.$NomorPolisi.'">';?>
              <?php echo '<input type="hidden" name="peminjam" value="'.$Peminjam.'">';?>
              <?php echo '<input type="hidden" name="nik" value="'.$NIK.'">';?>
              <?php echo '<input type="hidden" name="nomorTelepon" value="'.$NomorTelepon.'">';?>
              <?php echo '<input type="hidden" name="keperluan" value="'.$Keperluan.'">';?>
              <?php echo '<input type="hidden" name="durasi" value="'.$Durasi.'">';?>
              <?php echo '<input type="hidden" name="tanggalPinjam" value="'.$TanggalPinjam.'">';?>
              <?php echo '<input type="hidden" name="waktuPinjam" value="'.$WaktuPinjam.'">';?>
              <?php echo '<input type="hidden" name="pemberi" value="'.$Pemberi.'">';?>
              <input type="submit" value="Tolak">
          </form>
      </td>
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
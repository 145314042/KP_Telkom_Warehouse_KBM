<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
    <head>
        <title>
        Peminjaman KBM
        </title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/form_pinjam_kbm.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/form_pinjam_kbm_mobil.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

        <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
    </head>
    <body>
        <div class="container">
<!--            kalo pake foto liat bawah, syg klo dihapus hehe-->
<!--            <div class='_profile'>-->
<!--  <div class='_head'></div>-->
<!--  <div class='_body'><img src="<?php //echo base_url('/wew.jpg'); ?>" style="width:100%;height:100%;margin-top:50%;"/></div>-->
<!--</div>-->
  <form id="contact" action="<?php echo site_url('welcome/kbm_booking_car'); ?>" method="post">
    <h3>Form Peminjaman KBM</h3>
      <h4>Detail Peminjaman</h4>
      <fieldset>
      <input placeholder="Nama" type="tel" tabindex="3" pattern="[A-Za-z\s]*" title="Hanya boleh huruf A-Z,a-z" name="peminjam" required>
    </fieldset>
    <fieldset>
      <input placeholder="NIK" type="text" pattern="[0-9]*" tabindex="3" name="nik" title="Hanya boleh angka" required>
    </fieldset>
      <fieldset>
      <input placeholder="No telepon" type="text" pattern="[0-9]*" tabindex="3" name="nomorTelepon" title="Hanya boleh angka" required>
    </fieldset>
    <fieldset>Pilihan Kendaraan<br>
     <span class="custom-dropdown big" style="margin-left:0.5%;">
    <select name="nomorPolisi">
    <?php foreach($showCar as $row): ?>
        <?php $NoPol = $row->NomorPolisi;?>
        <?php echo "<option value=".$NoPol.">".$row->NamaMobil.' - '.$NoPol."</option>"; ?>
    <?php endforeach;?>
    </select>
</span>
      </fieldset>
      <fieldset>
      <input type="text" id="datepicker" name="tanggalPinjam" placeholder="Tanggal pinjam">
    </fieldset>
      <fieldset><input type="text" pattern="[0-9]*" name="durasi" placeholder="Durasi peminjaman (dalam jam)" title="Hanya boleh angka" required>
          
    </fieldset>
      <fieldset>Waktu Pinjam
    <span class="custom-dropdown big" style="margin-left:0.5%;">
        <h4>Jam : Menit </h4>
        <select name="waktuPinjam_jam">
        <?php for($i=8;$i<24;$i++){
    echo '<option value="'.$i.'">'.$i.'</option>';
}?></select>
        <select name="waktuPinjam_menit">
        <?php for($i=0;$i<60;$i++){
    echo '<option value="'.$i.'">'.$i.'</option>';
}?></select>
          </span>
    </fieldset>
   
    <fieldset>
      <textarea placeholder="Keperluan" tabindex="5" name="keperluan"></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    </form>
    <form id="contact" action="<?php echo site_url('welcome/index'); ?>" method="post">
      <fieldset>
      <button name="submit" type="submit" id="back" data-submit="...Sending">Kembali</button>
    </fieldset>
  </form>
<span class="color-picker"></span>

<br/><br/>
</div>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/form_pinjam_kbm_mobil.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/timepicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-ui.js"></script>
    </body>
</html>
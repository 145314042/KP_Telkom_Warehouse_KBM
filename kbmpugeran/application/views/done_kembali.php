<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
    <head>
    <title>Konfirmasi Peminjaman</title>
         <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/done.css">
    </head>
    <body>
        <div  style="margin-top:150px;margin-bottom:30px;text-align:center;">
                    <img src="<?php echo base_url('/w1.png'); ?>" style="width: 15%;margin-bottom:15px"/>
            
        </div>
        <center><h1 style="font-size: 250%;font-family:helvetica;color:#666666;">KBM Telah Dikembalikan</h1></center>
        
              	<center><a href="<?php echo site_url('welcome/kbm_kembali') ?>"><button id="">OK</button></a></center>
        <br><br>
                <center><a href="<?php echo site_url('welcome/history_terima') ?>"><button id="">Lihat Histori KBM</button></a></center>
              
        
    </body>
</html>
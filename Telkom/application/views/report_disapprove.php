<?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=$title.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
 
 <table border="1" width="100%">
 
      <thead>
 
           <tr>
 
                <th>Peminjam</th>
    <th>NIK</th>
    <th>Nomor Telepon</th>
    <th>Mobil</th> 
    <th>Keperluan</th>
    <th>Durasi (Jam)</th>
    <th>Tanggal Pinjam</th>
    <th>Waktu Pinjam</th>
    <th>Waktu Tolak</th>
    <th>Petugas</th>
 
           </tr>
 
      </thead>
 
      <tbody>
 
           <?php $i=1; foreach ($buku as $row) { ?>
            <tr>
              <td><?php echo $row->Peminjam;?></td>
              <td><?php echo $row->NIK;?></td>
              <td><?php echo $row->NomorTelepon;?></td>
              <td><?php echo $row->NomorPolisi;?></td>
              <td><?php echo $row->Keperluan;?></td>
              <td><?php echo $row->Durasi;?></td>
              <td><?php echo $row->TanggalPinjam;?></td>
              <td><?php echo $row->WaktuPinjam;?></td>
              <td><?php echo $row->WaktuAmbil;?></td>
              <td><?php echo $row->Pemberi;?></td>   
            </tr>
 
           <?php $i++; } ?>
 
      </tbody>
 
 </table>
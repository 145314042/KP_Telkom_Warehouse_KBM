<?php
 
 header('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
 
 // header("Content-type: application/vnd-ms-excel");
 // header("Content-type: application/excel");

 header('Content-Disposition: attachment; filename="History KBM diizinkan.xlsx"');
 
 // header("Cache-Control:max-age=0");

 // header("Pragma: no-cache");
 
 // header("Expires: 0");
 
 ?>
 
 <table border="1" width="100%">
 
      <thead>
 
           <tr>
              <th>Peminjam</th>
              <th>NIK</th>
              <th>Nomor SIM</th>
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
 
           </tr>
 
      </thead>
 
      <tbody>
 
           <?php $i=1; foreach ($buku as $row) { ?>
            <tr>
              <td><?php echo $row->Peminjam;?></td>
              <td><?php echo $row->NIK;?></td>
              <td><?php echo $row->NomorSIM;?></td>
              <td><?php echo $row->NomorTelepon;?></td>
              <td><?php echo $row->NomorPolisi;?></td>
              <td><?php echo $row->Keperluan;?></td>
              <td><?php echo $row->KMAmbil;?></td>
              <td><?php echo $row->KMKembali;?></td>
              <td><?php echo $row->Durasi;?></td>
              <td><?php echo $row->TanggalPinjam;?></td>
              <td><?php echo $row->WaktuPinjam;?></td>
              <td><?php echo $row->WaktuAmbil;?></td>
              <td><?php echo $row->TanggalKembali;?></td>
              <td><?php echo $row->WaktuKembali;?></td>
              <td><?php echo $row->Pemberi;?></td>      
            </tr>
 
           <?php $i++; } ?>
 
      </tbody>
 
 </table>
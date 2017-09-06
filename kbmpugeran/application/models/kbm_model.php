<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kbm_model extends CI_Model {

    public function insertRent($nomorPolisi, $peminjam, $nik, $nomorSim, $nomorTelepon, $keperluan, $kmAmbil, $kmKembali, $durasi, $tanggalPinjam, $waktuPinjam, $waktuAmbil, $tanggalKembali, $waktuKembali, $pemberi, $status)
    {
        $result = $this->db->simple_query('INSERT INTO kbm_peminjaman_mobil (NomorPolisi, Peminjam, NIK, NomorSIM, NomorTelepon, Keperluan, KMAmbil, KMKembali, Durasi, TanggalPinjam, WaktuPinjam, WaktuAmbil, TanggalKembali, WaktuKembali, Pemberi, Status) VALUES("'.$nomorPolisi.'", "'.$peminjam.'", "'.$nik.'", "'.$nomorSim.'", "'.$nomorTelepon.'", "'.$keperluan.'", "'.$kmAmbil.'", "'.$kmKembali.'", "'.$durasi.'", "'.$tanggalPinjam.'", "'.$waktuPinjam.'", "'.$waktuAmbil.'", "'.$tanggalKembali.'", "'.$waktuKembali.'", "'.$pemberi.'", '.$status.')');
        if ($result)
        {
            return '1';
        }
        else
        {
            return '0';
        }
    }


    public function showBooking()
    {
        $this->db->where('status', '0');
        $query = $this->db->get('kbm_peminjaman_mobil');
        return $query->result();
        
    }

    public function approveBooking($nomorPolisi, $peminjam, $nik, $nomorSim, $nomorTelepon, $keperluan, $kmAmbil, $durasi, $tanggalPinjam, $waktuPinjam, $pemberi)
    {
        $data = array(
            'Pemberi' => $pemberi,
            'Status' => 2,
            'WaktuAmbil' => $this->getLocalTime(),
            'KMAmbil' => $kmAmbil
        );
        $this->db->set($data);
        $this->db->where('NomorPolisi',$nomorPolisi);
        $this->db->where('Peminjam',$peminjam);
        $this->db->where('NIK',$nik);
        $this->db->where('NomorSIM',$nomorSim);
        $this->db->where('NomorTelepon',$nomorTelepon);
        $this->db->where('Keperluan',$keperluan);
        $this->db->where('Durasi',$durasi);
        $this->db->where('TanggalPinjam',$tanggalPinjam);
        $this->db->where('WaktuPinjam',$waktuPinjam);
        $this->db->where('Status',0);
        $result = $this->db->update('kbm_peminjaman_mobil');
        if ($result)
        {
            // $r = $this->kbm_model->declineBookingAuto($nomorPolisi, $pemberi);
            $this->carHired($nomorPolisi);
            return '1';
        }
        else
        {
            return '0';
        }
    }

    // public function declineBookingAuto($nomorPolisi, $pemberi)
    // {
    //     $data = array(
    //         'Pemberi' => $pemberi,
    //         'KMAmbil' => $kmAmbil,
    //         'Status' => -1
    //     );
    //     $this->db->set($data);
    //     $this->db->where('Status',0);
    //     $this->db->where('NomorPolisi',$nomorPolisi);
    //     $result = $this->db->update('kbm_peminjaman_mobil');
    //     $this->carHired($nomorPolisi);
    //     if ($result)
    //     {
    //         return '1';
    //     }
    //     else
    //     {
    //         return '0';
    //     }
    // }

    public function declineBooking($nomorPolisi, $peminjam, $nik, $nomorSim, $nomorTelepon, $keperluan, $durasi, $tanggalPinjam, $waktuPinjam, $pemberi)
    {
        $data = array(
            'Pemberi' => $pemberi,
            'WaktuAmbil' => $this->getLocalTime(),
            'Status' => -1
        );
        $this->db->set($data);
        $this->db->where('NomorPolisi',$nomorPolisi);
        $this->db->where('NIK',$nik);
        $this->db->where('NomorSIM',$nomorSim);
        $this->db->where('Peminjam',$peminjam);
        $this->db->where('NomorTelepon',$nomorTelepon);
        $this->db->where('Keperluan',$keperluan);
        $this->db->where('Durasi',$durasi);
        $this->db->where('TanggalPinjam',$tanggalPinjam);
        $this->db->where('WaktuPinjam',$waktuPinjam);
        $this->db->where('Status',0);
        $result = $this->db->update('kbm_peminjaman_mobil');
        if ($result)
        {
            return '1';
        }
        else
        {
            return '0';
        }
    }

    public function showRent()
    {
        $this->db->where('status', '2');
        $query = $this->db->get('kbm_peminjaman_mobil');
        return $query->result();
    }

    public function carReturning($nomorPolisi, $peminjam, $nik, $nomorSim, $nomorTelepon, $keperluan, $kmKembali, $durasi, $tanggalPinjam, $waktuPinjam, $waktuAmbil, $pemberi)
    {
        $data = array(
            'TanggalKembali' => $this->getLocalDate(),
            'WaktuKembali' => $this->getLocalTime(),
            'KMKembali' => $kmKembali,
            'Status' => 1
        );
        $this->db->set($data);
        $this->db->where('NomorPolisi',$nomorPolisi);
        $this->db->where('Peminjam',$peminjam);
        $this->db->where('NIK',$nik);
        $this->db->where('NomorSIM',$nomorSim);
        $this->db->where('NomorTelepon',$nomorTelepon);
        $this->db->where('Keperluan',$keperluan);
        $this->db->where('Durasi',$durasi);
        $this->db->where('TanggalPinjam',$tanggalPinjam);
        $this->db->where('WaktuPinjam',$waktuPinjam);
        $this->db->where('WaktuAmbil',$waktuAmbil);
        $this->db->where('Pemberi',$pemberi);
        $this->db->where('Status',2);
        $result = $this->db->update('kbm_peminjaman_mobil');
        $this->carReady($nomorPolisi);
        if ($result)
        {
            return '1';
        }
        else
        {
            return '0';
        }
    }

    public function getKm($nomorPolisi, $peminjam, $nik, $nomorSim, $nomorTelepon, $keperluan, $durasi, $tanggalPinjam, $waktuPinjam, $waktuAmbil, $pemberi)
    {
        $this->db->select('KmAmbil');
        $this->db->where('NomorPolisi',$nomorPolisi);
        $this->db->where('Peminjam',$peminjam);
        $this->db->where('NIK',$nik);
        $this->db->where('NomorSIM',$nomorSim);
        $this->db->where('NomorTelepon',$nomorTelepon);
        $this->db->where('Keperluan',$keperluan);
        $this->db->where('Durasi',$durasi);
        $this->db->where('TanggalPinjam',$tanggalPinjam);
        $this->db->where('WaktuPinjam',$waktuPinjam);
        $this->db->where('WaktuAmbil',$waktuAmbil);
        $this->db->where('Pemberi',$pemberi);
        $this->db->where('Status',2);
        $result = $this->db->get('kbm_peminjaman_mobil');
        $this->carReady($nomorPolisi);
        if ($result)
        {
            return $result->row('KmAmbil');
        }
    }

    public function showHistoryApprove()
    {
        $this->db->select('*');
        $this->db->where('status',1);
        $query = $this->db->get('kbm_peminjaman_mobil');
        return $query->result();
    }

    public function showHistoryDisapprove()
    {
        $this->db->select('*');
        $this->db->where('status',-1);
        $query = $this->db->get('kbm_peminjaman_mobil');
        return $query->result();
    }

    public function showCar()
    {
        $query = $this->db->get('kbm_mobil');
        return $query->result();
    }

    public function carReady($nomorPolisi){
        $data = array(
            'Status' => 1
        );
        $this->db->set($data);
        $this->db->where('NomorPolisi',$nomorPolisi);
        $result = $this->db->update('kbm_mobil');
        if ($result)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function carHired($nomorPolisi){
        $data = array(
            'Status' => 0
        );
        $this->db->set($data);
        $this->db->where('NomorPolisi',$nomorPolisi);
        $result = $this->db->update('kbm_mobil');
        if ($result)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function bookingCount()
    {
        $this->db->where('status',0);
        return $this->db->get('kbm_peminjaman_mobil')->num_rows('count');
    }

    public function getLocalDate(){
        return date('Y-m-d', time()); 
    }

    public function getLocalTime(){
        date_default_timezone_set('Asia/Jakarta');
        return date('H:i:s', time()); 
    }

}
/*

NOTE :

kbm_mobil
    0 = mobil tidak ada
    1 = mobil ada
kbm_peminjaman_mobil
    -1 = mobil ditolak untuk dipinjam
    0 = mobil akan dipinjam
    1 = mobil sudah kembali
    2 = mobil sendang dipinjam

*/
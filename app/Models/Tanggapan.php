<?php 
namespace App\Models;

use CodeIgniter\Model;

class Tanggapan extends Model{
    protected $table      = 'tbtanggapan';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'id_tanggapan';
     protected $allowedFields = ['id_pengaduan','tgl_tanggapan','tanggapan','id_peugas'];
}
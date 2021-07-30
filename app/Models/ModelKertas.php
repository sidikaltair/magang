<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKertas extends Model
{
    protected $table = 'kertas';
    protected $primaryKey = 'id_kertas';
    protected $useTimestamps = 'true';
    protected $allowedFields = ['tanggal_pemesanan', 'created_at', 'Nama_krts', 'jenis_ivo', 'Jumlah_rim', 'ukuran', 'gramature', 'slug'];
}

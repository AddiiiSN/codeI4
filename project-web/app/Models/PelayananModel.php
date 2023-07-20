<?php

namespace App\Models;

use CodeIgniter\Model;

class PelayananModel extends Model
{
    protected $table = 'pelayanan';
    protected $primaryKey = 'idDokter';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['jenis', 'dokter', 'idDokter', 'jamPraktek'];
}
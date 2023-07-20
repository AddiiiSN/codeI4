<?php

namespace App\Models;

use CodeIgniter\Model;

class LoketModel extends Model
{
    protected $table = 'loket';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama', 'usia', 'pelayanan', 'tagihan'];
}
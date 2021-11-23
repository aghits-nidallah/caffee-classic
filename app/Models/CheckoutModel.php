<?php

namespace App\Models;

use CodeIgniter\Model;

class CheckoutModel extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'checkouts';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'object';
    protected $useSoftDeletes       = true;
    protected $protectFields        = true;
    protected $allowedFields        = [
        'buyer_name',
        'buyer_phone_number',
        'buyer_address',
        'payment_proof_file',
    ];

    // Dates
    protected $useTimestamps        = true;
    protected $dateFormat           = 'datetime';
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';
    protected $deletedField         = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'buyer_name' => 'required|string',
        'buyer_phone_number' => 'required|string',
        'buyer_address' => 'required|string',
        'payment_proof' => 'uploaded[payment_proof]|max_size[payment_proof,4096]',
        'payment_proof_file' => 'required|string',
    ];
    protected $validationMessages   = [
        'payment_proof' => [
            'uploaded' => 'Bukti pembayaran harus berbentuk gambar yang valid.',
            'max_size' => 'Ukuran maksimal bukti pembayaran tidak boleh melebihi 4MB.',
        ],
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks       = true;
    protected $beforeInsert         = [];
    protected $afterInsert          = [];
    protected $beforeUpdate         = [];
    protected $afterUpdate          = [];
    protected $beforeFind           = [];
    protected $afterFind            = [];
    protected $beforeDelete         = [];
    protected $afterDelete          = [];
}

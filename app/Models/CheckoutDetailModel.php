<?php

namespace App\Models;

use CodeIgniter\Model;

class CheckoutDetailModel extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'checkout_details';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'object';
    protected $useSoftDeletes       = true;
    protected $protectFields        = true;
    protected $allowedFields        = [
        'checkout_id',
        'product_id',
        'quantity',
        'sold_price',
        'subtotal',
    ];

    // Dates
    protected $useTimestamps        = true;
    protected $dateFormat           = 'datetime';
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';
    protected $deletedField         = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'checkout_id' => 'required|integer',
        'product_id' => 'required|integer',
        'quantity' => 'required|integer',
        'sold_price' => 'required|integer',
        'subtotal' => 'required|integer',
    ];
    protected $validationMessages   = [];
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

<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'products';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'array';
    protected $useSoftDeletes       = true;
    protected $protectFields        = true;
    protected $allowedFields        = [
        'product_photo_path',
        'name',
        'price',
        'stock',
        'description',
    ];

    // Dates
    protected $useTimestamps        = true;
    protected $dateFormat           = 'datetime';
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';
    protected $deletedField         = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'product_photo' => 'uploaded[product_photo]|max_size[product_photo,4096]|ext_in[product_photo,png,jpg,jpeg]|is_image[product_photo]',
        'product_photo_path' => 'required|string',
        'name' => 'required|alpha_numeric_space',
        'price' => 'required|integer',
        'stock' => 'required|integer',
        'description' => 'permit_empty|alpha_numeric_space',
    ];
    protected $validationMessages   = [
        'product_photo' => [
            'upload' => 'Foto produk harus diisi.',
            'max_size' => 'Maksimal foto produk harus kurang dari 4MB.',
            'ext_in' => 'Foto produk harus berekstensi .png, .jpg, atau .jpeg.',
            'is_image' => 'Foto harus berbentuk gambar.',
        ],
        'name' => [
            'required' => 'Nama produk harus diisi.',
            'alpha_numeric_space' => 'Nama produk hanya boleh diisi huruf, angka, dan spasi.',
        ],
        'price' => [
            'required' => 'Harga produk harus diisi.',
            'integer' => 'Harga produk hanya boleh berisi angka.',
        ],
        'stock' => [
            'required' => 'Stok produk harus diisi.',
            'integer' => 'Stok produk hanya boleh berisi angka.',
        ],
        'description' => [
            'alpha_numeric_space' => 'Deskripsi produk hanya boleh diisi huruf, angka, dan spasi.',
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

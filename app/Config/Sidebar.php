<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Sidebar extends BaseConfig
{
    public array $menus;

    public function __construct()
    {
        $this->menus = [
            [
                'icon' => 'fa-tachometer-alt',
                'title' => 'Dashboard',
                'link' => site_url('admin'),
            ],
            [
                'icon' => 'fa-boxes',
                'title' => 'Produk',
                'link' => site_url('admin/product'),
            ],
            [
                'icon' => 'fa-users',
                'title' => 'Pengguna',
                'link' => site_url('admin/user'),
            ],
            [
                'icon' => 'fa-shopping-bag',
                'title' => 'Pesanan',
                'link' => site_url('admin/checkout'),
            ],
            [
                'icon' => 'fa-cog',
                'title' => 'Pengaturan',
                'link' => site_url('Settings'),
            ],
            [
                'icon' => 'fa-sign-out-alt',
                'title' => 'Log Out',
                'link' => site_url('Auth/Logout'),
            ]
        ];
    }
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Page extends BaseController
{
    public function index()
    {
        $settings = new \App\Models\WebsiteSetting;

        return view('index', [
            'products' => (new \App\Models\ProductModel)->findAll(),
            'hero_title' => $settings->where('setting_name', 'hero_title')->first(),
            'hero_subtitle' => $settings->where('setting_name', 'hero_subtitle')->first(),
            'youtube_video_link' => $settings->where("setting_name", 'youtube_video_link')->first(),
            'jam_buka' => [
                'senin' => $settings->where('setting_name', 'jam_buka_senin')->first(),
                'selasa' => $settings->where('setting_name', 'jam_buka_selasa')->first(),
                'rabu' => $settings->where('setting_name', 'jam_buka_rabu')->first(),
                'kamis' => $settings->where('setting_name', 'jam_buka_kamis')->first(),
                'jumat' => $settings->where('setting_name', 'jam_buka_jumat')->first(),
                'sabtu' => $settings->where('setting_name', 'jam_buka_sabtu')->first(),
                'minggu' => $settings->where('setting_name', 'jam_buka_minggu')->first(),
            ],
            'alamat' => $settings->where('setting_name', 'alamat')->first(),
            'no_hp' => $settings->where('setting_name', 'no_hp')->first(),
        ]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function checkout()
    {
        return view('checkout');
    }
}

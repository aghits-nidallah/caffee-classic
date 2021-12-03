<?php

namespace App\Database\Seeds;

use App\Models\WebsiteSetting;
use CodeIgniter\Database\Seeder;

class WebsiteSettingsSeeder extends Seeder
{
    public function run()
    {
        $website_settings = new WebsiteSetting();

        // Pengaturan jam buka
        $website_settings->insert([
            'setting_name' => 'jam_buka_senin',
            'setting_value' => '09:00 - 18:00',
        ]);
        $website_settings->insert([
            'setting_name' => 'jam_buka_selasa',
            'setting_value' => '09:00 - 18:00',
        ]);
        $website_settings->insert([
            'setting_name' => 'jam_buka_rabu',
            'setting_value' => '09:00 - 18:00',
        ]);
        $website_settings->insert([
            'setting_name' => 'jam_buka_kamis',
            'setting_value' => '09:00 - 18:00',
        ]);
        $website_settings->insert([
            'setting_name' => 'jam_buka_jumat',
            'setting_value' => '09:00 - 18:00',
        ]);
        $website_settings->insert([
            'setting_name' => 'jam_buka_sabtu',
            'setting_value' => '09:00 - 18:00',
        ]);
        $website_settings->insert([
            'setting_name' => 'jam_buka_minggu',
            'setting_value' => '09:00 - 18:00',
        ]);

        // Kontak
        $website_settings->insert([
            'setting_name' => 'alamat',
            'setting_value' => 'Jl. Baturoke Sukadana Argapura - Setelah Kampung Air',
        ]);
        $website_settings->insert([
            'setting_name' => 'no_hp',
            'setting_value' => 'Fani Maria Viarawangi - 085224787777',
        ]);

        // Media Sosial
        $website_settings->insert([
            'setting_name' => 'facebook',
            'setting_value' => '',
        ]);
        $website_settings->insert([
            'setting_name' => 'twitter',
            'setting_value' => '',
        ]);
        $website_settings->insert([
            'setting_name' => 'instagram',
            'setting_value' => '',
        ]);
        $website_settings->insert([
            'setting_name' => 'youtube',
            'setting_value' => '',
        ]);

        // Website settings
        $website_settings->insert([
            'setting_name' => 'hero_title',
            'setting_value' => 'TIME TO DISCOVER COFFEE HOUSE.',
        ]);
        $website_settings->insert([
            'setting_name' => 'hero_subtitle',
            'setting_value' => 'The coffee is brewed by first roasting the green coffee beans over hoat coals in a brazier, given an opportunity to sample.',
        ]);
        $website_settings->insert([
            'setting_name' => 'youtube_video_link',
            'setting_value' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ&feature=youtu.be',
        ]);
        $website_settings->insert([
            'setting_name' => 'footer_description',
            'setting_value' => 'Rorem ipsum dolorconsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniaminventore veritatis et.orem ipsum dolorconsectetur adipisicing elit, sed do eiusmod tempor incididunt aneye.            ',
        ]);
    }
}

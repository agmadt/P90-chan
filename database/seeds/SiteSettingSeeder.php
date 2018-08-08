<?php

use App\Models\SiteSetting;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	SiteSetting::insert([
            [
                'key' => 'setting_logo_header',
                'value' => '',
            ],
            [
                'key' => 'setting_logo_footer',
                'value' => '',
            ],
            [
                'key' => 'setting_address',
                'value' => '',
            ],
            [
                'key' => 'setting_email',
                'value' => '',
            ],
            [
                'key' => 'setting_phone',
                'value' => '',
            ],
            
            [
                'key' => 'setting_home_block_one_icon',
                'value' => '',
            ],
            [
                'key' => 'setting_home_block_two_icon',
                'value' => '',
            ],
            [
                'key' => 'setting_home_block_three_icon',
                'value' => '',
            ],
            [
                'key' => 'setting_home_block_four_icon',
                'value' => '',
            ],
            [
                'key' => 'setting_home_block_one_title',
                'value' => '',
            ],
            [
                'key' => 'setting_home_block_two_title',
                'value' => '',
            ],
            [
                'key' => 'setting_home_block_three_title',
                'value' => '',
            ],
            [
                'key' => 'setting_home_block_four_title',
                'value' => '',
            ],
            [
                'key' => 'setting_home_block_one_text',
                'value' => '',
            ],
            [
                'key' => 'setting_home_block_two_text',
                'value' => '',
            ],
            [
                'key' => 'setting_home_block_three_text',
                'value' => '',
            ],
            [
                'key' => 'setting_home_block_four_text',
                'value' => '',
            ]
        ]);
    }
}

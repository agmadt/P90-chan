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
            ],
            [
                'key' => 'setting_about_us_text',
                'value' => '',
            ],
            [
                'key' => 'setting_about_us_image',
                'value' => '',
            ],
            [
                'key' => 'setting_map_api_key',
                'value' => '',
            ],
            [
                'key' => 'setting_map_lat',
                'value' => '',
            ],
            [
                'key' => 'setting_map_lng',
                'value' => '',
            ],
            [
                'key' => 'setting_facebook_url',
                'value' => '',
            ],
            [
                'key' => 'setting_twitter_url',
                'value' => '',
            ],
            [
                'key' => 'setting_instagram_url',
                'value' => '',
            ]
        ]);
    }
}

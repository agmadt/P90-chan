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
                'key' => 'setting_logo_header'
            ],
            [
                'key' => 'setting_logo_footer'
            ],
            [
                'key' => 'setting_address'
            ],
            [
                'key' => 'setting_email'
            ],
            [
                'key' => 'setting_phone'
            ],
            [
                'key' => 'setting_home_block_one_icon'
            ],
            [
                'key' => 'setting_home_block_two_icon'
            ],
            [
                'key' => 'setting_home_block_three_icon'
            ],
            [
                'key' => 'setting_home_block_four_icon'
            ],
            [
                'key' => 'setting_home_block_one_title'
            ],
            [
                'key' => 'setting_home_block_two_title'
            ],
            [
                'key' => 'setting_home_block_three_title'
            ],
            [
                'key' => 'setting_home_block_four_title'
            ],
            [
                'key' => 'setting_home_block_one_text'
            ],
            [
                'key' => 'setting_home_block_two_text'
            ],
            [
                'key' => 'setting_home_block_three_text'
            ],
            [
                'key' => 'setting_home_block_four_text'
            ],
            [
                'key' => 'setting_about_us_text'
            ],
            [
                'key' => 'setting_about_us_image'
            ],
            [
                'key' => 'setting_map_api_key'
            ],
            [
                'key' => 'setting_map_lat'
            ],
            [
                'key' => 'setting_map_lng'
            ],
            [
                'key' => 'setting_facebook_url'
            ],
            [
                'key' => 'setting_twitter_url'
            ],
            [
                'key' => 'setting_instagram_url'
            ],
            [
                'key' => 'setting_donation_heading_title'
            ]
        ]);
    }
}

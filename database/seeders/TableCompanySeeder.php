<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('entity__companies')->insert([
            'company_name' => 'Tamafurnindo',
            'company_tagline' => 'Lorem ipsum dolor sit amet consl adipisi elit, sed do eiusmod templ.',
            'company_desc' => 'Lorem ipsum dolor sit amet consl adipisi elit, sed do eiusmod templ.',
            'company_address' => 'Menganti, Kedung, Jepara',
            'company_website' => 'tamafurnindo.com',
            'company_phone' => '082229366506',
            'company_email' => 'info@tamafurnindo.com',
            'company_facebook' => '#',
            'company_tumblr' => '#',
            'company_twitter' => '#',
            'company_instagram' => '#',
            'company_google' => '#',
            'company_youtube' => '#',
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $setting = [
            ['setting_icon', 'favicon.ico'],
            ['setting_logo', 'logo.png'],
            ['setting_logo_footer', 'footer-logo.png'],
        ];
        for ($i=0;$i<count($setting);$i++){
            DB::table('entity__settings')->insert([
                'setting_name' => $setting[$i][0],
                'setting_value' => $setting[$i][1]
            ]);
        }
    }
}

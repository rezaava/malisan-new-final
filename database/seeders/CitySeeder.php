<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CitySeeder extends Seeder
{
    public function run()
{
    $json = Storage::get('cities.json');
    $cities = json_decode($json, true);

    if (!is_array($cities)) {
        dd('خطا: داده‌ها به درستی از JSON تبدیل نشدند.');
    }

    foreach ($cities as $city) {
        // بررسی وجود کلیدهای مورد نیاز
        if (!isset($city['province']) || !isset($city['city'])) {
            continue; // رد کردن آیتم ناقص
        }

        DB::table('cities')->insert([
            'province' => $city['province'],
            'city' => $city['city'],
            'created_at' => now(),
        ]);
    }
}

}

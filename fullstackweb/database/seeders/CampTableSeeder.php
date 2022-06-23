<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Camp;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps = [
            [
                'title' => 'Hobby Class',
                'slug' => 'hobby-class',
                'price' => '280',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'title' => 'Kids Class',
                'slug' => 'kids-class',
                'price' => '140',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]
        ];

        // 1st method
        // foreach ($camps as $key => $camp) {
        //     Camp::create($camp);
        // }

        // 2nd method
        Camp::insert($camps);
    }
}
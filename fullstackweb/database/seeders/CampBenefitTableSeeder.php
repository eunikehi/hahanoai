<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CampBenefit;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campBenefits = [
            [
                'camp_id' => 1,
                'name' => 'Basic Technique'
            ],
            [
                'camp_id' => 1,
                'name' => 'Combine Color'
            ],
            [
                'camp_id' => 1,
                'name' => '1-1 Mentoring'
            ],
            [
                'camp_id' => 1,
                'name' => 'Offline Course'
            ],
            [
                'camp_id' => 1,
                'name' => 'Future Job'
            ],
            [
                'camp_id' => 1,
                'name' => 'Decorate flowers'
            ],
            [
                'camp_id' => 1,
                'name' => 'Blend fragrance'
            ],
            [
                'camp_id' => 1,
                'name' => 'Start Business'
            ],
            [
                'camp_id' => 2,
                'name' => '1-1 Mentoring Program'
            ],
            [
                'camp_id' => 2,
                'name' => 'Basic Technique'
            ],
            [
                'camp_id' => 2,
                'name' => 'Coloring the Candle'
            ],
            [
                'camp_id' => 2,
                'name' => 'Offline Course Videos'
            ],
        ];

        CampBenefit::insert($campBenefits);
    }
}
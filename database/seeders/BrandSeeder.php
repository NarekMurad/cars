<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::insert([
            [
                'name'       => 'Mercedes',
            ],
            [
                'name'       => 'BMW',
            ],
            [
                'name'       => 'Audi',
            ]
        ]);
    }
}

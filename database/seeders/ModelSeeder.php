<?php

namespace Database\Seeders;

use App\Models\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::insert([
            [
                'name'       => 'S500',
                'brand_id'   => 1,
            ],
            [
                'name'       => 'i3',
                'brand_id'   => 2,
            ],
            [
                'name'       => 'RS8',
                'brand_id'   => 3,
            ]
        ]);
    }
}

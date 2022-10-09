<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Car::insert([
            [
                'model_id'             => 1,
                'photo'                => '/storage/photos/mercedes.jpeg',
                'year'                 => 2018,
                'number'               => '00oo000',
                'color'                => 'red',
                'transmission'         => 'automatic',
                'rental_price_per_day' => '300',
            ],
            [
                'model_id'             => 2,
                'photo'                => '/storage/photos/bwm.jpeg',
                'year'                 => 2017,
                'number'               => '11ii111',
                'color'                => 'black',
                'transmission'         => 'automatic',
                'rental_price_per_day' => '200',
            ],
            [
                'model_id'             => 3,
                'photo'                => '/storage/photos/audi.jpeg',
                'year'                 => 2016,
                'number'               => '22zz222',
                'color'                => 'yelow',
                'transmission'         => 'mechanic',
                'rental_price_per_day' => '100',
            ],
        ]);
    }
}

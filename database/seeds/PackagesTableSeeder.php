<?php

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use App\Package;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++) {
            $package = new Package();

            $package->name_package = $faker->name('male');
            $package->start_date = $faker->date('2022-03-05');
            $package->end_date = $faker->date('2022-03-07');
            $package->place = $faker->text('100');
            $package->price = $faker->numberBetween(100, 500);
            $package->description = $faker->text('200');

            $package->save();
        }
    }
}

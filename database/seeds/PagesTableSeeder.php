<?php

use Illuminate\Database\Seeder;
use App\Pages;
use Faker\Factory;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 0; $i < 30; $i++) {
            $page = new Pages();
            $page->title = $faker->firstNameFemale;
            $page->content = $faker->text(200);
            $page->save();
        }
    }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Property::class, 50)->create()->each(function ($p) {
          $p->images()->save(factory(App\Image::class)->make());
        });
    }
}

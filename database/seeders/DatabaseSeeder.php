<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CardSeeder::class,
        ]);
        //  this->call u burda çağırma sebebimiz seedleri ayrı ayrı çağırabilmek için parçaladık yoksa seedi çağırdığımızda hepsini çalıştırıcak.



    }
}

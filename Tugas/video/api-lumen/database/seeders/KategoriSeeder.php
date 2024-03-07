<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use App\Models\Kategori;
use Illuminate\Database\Seeder;
use Illuminate\Support\Testing\Fakes\Fake;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            $data = [
                'kategori' => $faker->citySuffix,
                'keterangan' => $faker->text(20),
            ];

            Kategori::create($data);
        }
    }
}

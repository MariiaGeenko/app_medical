<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Sick_listSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('sick_lists')->insert($this->getData());
    }

    private function getData(): array
    {
        $data = [];
        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'receipt' => random_int(1, 20),
                'description' => \fake()->text(10),
                'created_at' => \now(),
                'updated_at' => \now(),
                'valid_until_date' => date_create(),
            ];
        }

        return $data;
    }
}

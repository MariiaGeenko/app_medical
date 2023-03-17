<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DrugSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        \DB::table('drugs')->insert($this->getData());
    }

    private function getData(): array
    {
        $data = [];
        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'name' => \fake()->name(),
                'created_at' => \now(),
                'updated_at' => \now(),
                'description_url' => \fake()->url(),
            ];
        }

        return $data;
    }
}

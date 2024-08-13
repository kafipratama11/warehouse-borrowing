<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('items')->insert([
            [
                'item_code' => '1F01-04-002-FM',
                'item_name' => 'Iphone 12 Pro Max 128 GB',
                'description' => 'description example 2',
            ],
        ]);
    }
}
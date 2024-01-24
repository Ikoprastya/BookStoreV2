<?php

namespace Database\Seeders;

use App\Models\ListBook;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ListbookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ListBook::factory()->count(100)->create();
    }
}

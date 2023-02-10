<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Category::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
                'mystery', 'fiction', 'sports', 'technology', 'business', 'entertainment', 
        ];

        foreach ($data as $value) {
            Category::insert([
                'name' => $value,
                'created_at' => now(),
                'updated_at' => now(),
        ]);
        }
    }
}

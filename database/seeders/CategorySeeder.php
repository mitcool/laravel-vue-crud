<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert(['name' => 'Category 1']);
        Category::insert(['name' => 'Category 2']);
        Category::insert(['name' => 'Category 3']);
    }
}

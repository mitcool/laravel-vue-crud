<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert(['name' => 'Category 1']);
        Category::insert(['name' => 'Category 2']);
        Category::insert(['name' => 'Category 3']);
        Post::factory(20)->create();
       
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Hash;

use App\Models\User;
use App\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::factory()->create(['email' => 'admin@admin.com','password' => Hash::make('111111')]);
        $admin->roles()->attach(Role::where('name', 'Administrator')->value('id'));
 
        $editor = User::factory()->create(['email' => 'editor@edit.com','password' => Hash::make('111111')]);
        $editor->roles()->attach(Role::where('name', 'Editor')->value('id'));
    }
}

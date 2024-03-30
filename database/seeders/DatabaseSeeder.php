<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Reply;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Santiago Velásquez',
            'email' => 'santy@santy.com',
            'password' => Hash::make('123456'),
            'admin' => true
        ]);

        Category::factory(10)
            ->hasThreads(20)
            ->create();
        Reply::factory(400)->create();


    }
}

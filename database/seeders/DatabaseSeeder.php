<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

// @_CONTOH NGESDIDING ATAU MENANAM SATU DATA MANUAL :
        
    // * TIPS : Jika kita melakukkan siding tapi ada data yang ingin dipertahankan, maka bisa menggunakan ini : 
    //           - simpan di variabel kemudian di ryclce di factory.
        // $membership = User::create([
        //     'name' => 'Herdian',
        //     'username' => 'herdian',
        //     'email' => 'herian@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'), // password
        //     'remember_token' => Str::random(10)
        // ]);

        // Category::create([
        //     'name' => 'Web Programming',
        //     'slug' => 'web-programming'
        // ]);

        // Post::create([
        //     'title' => 'judul artikel 1',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'judul-artikel-1',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod. dolor sit amet consectetur adipisicing elit.'
        // ]);

// @_ MENGGUNAKAN FACTORY DI SEEDING | LEBIH MUDAH DARI PADA TINKER
        // Post::factory(20)->recycle([
            
        //     $membership,
        //     // User::factory(5)->create(),
        // ])->create();

// @_ MELAKUKKAN SEEDING PADA CLASS SEEDING YANG BERBEDA 
        $this->call([CategorySeeder::class, UserSeeder::class]);

        Post::factory(20)->recycle([
            Category::all(),
            User::all()
        ])->create();
    }
}

<?php

namespace Database\Seeders;


use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // $this->call(CategorySeeder::class);
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);



        // Category::create([
        //     'name' => 'Web Design',
        //     'slug' => 'Programming'
        // ]);

        // Post::create([
        //     'title' => 'Judul Atikel 1',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'judul-artikel-1',
        //     'body' => 'Masalahnya sudah kelihatan 👍Di DatabaseSeeder.php kamu memanggil CategorySeeder tapi tidak meng-import class-nya.Saat ini kodenya kurang use CategorySeeder;, sehingga editor / Laravel membaca sebagai Undefined type.'

        // ]);
        $this->call([CategorySeeder::class, UserSeeder::class]);
        Post::factory(100)->recycle([
            Category::all(),
            User::all()
        ])->create();
    }
}

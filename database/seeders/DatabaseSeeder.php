<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'id' => 1,
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);

        $categories = [
            'Technology' => 'Articles and news about the latest technology trends and innovations.',
            'Health' => 'Information about health, wellness, medical research and healthy living.',
            'Science' => 'Latest discoveries in science, research papers, and scientific breakthroughs.',
            'Politics' => 'Current political news, analysis, and commentary on global politics.',
            'Entertainment' => 'Updates from the entertainment industry, movies, music, and celebrity news.',
        ];

        foreach ($categories as $name => $content) {
            Category::create([
                'name' => $name,
                'title' => $name,
                'slug' => \Illuminate\Support\Str::slug($name),
                'content' => $content,
                'user_id' => 1,
                'category_id' => 1,
            ]);
        }

        Post::factory(100)->create();
    }
}

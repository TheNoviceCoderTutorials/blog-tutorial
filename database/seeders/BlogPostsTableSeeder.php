<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BlogPostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1,10) as $index) {
            DB::table('blog_posts')->insert([
                'user_id' => 1,
                'title' => $faker->text(50),
                'body' => $faker->paragraph(15, true),
                'excerpt' => $faker->paragraph(3, true),
                'state' => 1,
                'slug' => str_replace(" ", "-", $faker->text(20))
            ]);
        }
    }
}

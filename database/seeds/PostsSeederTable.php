<?php

use Illuminate\Database\Seeder;

class PostsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();
        $faker = Faker::create('zh_TW');
        $total = 20;
        foreach (range(1, 20) as $number) {
            Post::create([
                'title' => $faker->realText(rand(10,20)),
                'content' => $faker->realText(rand(100,200)),
                'author' => rand(1, 5),
                'created_at' => Carbon::now()->subDays($total - $number),
                'updated_at' => Carbon::now()->subDays($total - $number),
            ]);
        }
    }
}

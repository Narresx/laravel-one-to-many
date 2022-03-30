<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Post;
use Illuminate\Support\Str;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<6; $i++){
            $post= new Post();
            $post->title = $faker->sentence(1);
            $post->content = $faker->paragraphs(2, true);
            $post->image = $faker->imageUrl(200, 200);
            $post->slug = Str::slug($post->title, '-');
            $post->save();
        }
    }
}

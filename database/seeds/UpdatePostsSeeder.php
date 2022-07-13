<?php

use App\Post;
use App\Category;
use Illuminate\Database\Seeder;


class UpdatePostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $posts = Post::all();

        foreach($posts as $post){
        //ad ogni ciclo estraggo dandom un id dalla tab categories
        $category_id = Category::inRandomOrder()->first()->id;
        $post->category_id=$category_id;
        $post->update();
    }

    }
}

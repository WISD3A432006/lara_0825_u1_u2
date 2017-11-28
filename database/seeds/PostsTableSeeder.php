<?php
use Illuminate\Database\Seeder;
use App\Post;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();
        //單元二-1
        foreach(range(1,20) as $number) {
            Post::create([
                'title' => 'title ' . $number,
                'content' => 'content ' . $number,
            ]);
        }
    }
}
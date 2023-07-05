<?php

namespace Database\Seeders;

use App\Models\category;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();

        $posts = [
            [
                'title' => 'The Benefits of Regular Exercise',
                'post_text' => 'Regular exercise can have a positive impact on both physical and mental health. In addition to improving cardiovascular health, it can also reduce stress and anxiety levels.',
                'post_image' => 'exercise.jpg',
                'user_id' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Tips for Effective Time Management',
                'post_text' => 'Effective time management is key to achieving success in both personal and professional life. Some useful tips include setting goals, prioritizing tasks, and minimizing distractions.',
                'post_image' => 'time-management.jpg',
                'user_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'The Importance of Healthy Eating Habits',
                'post_text' => 'Healthy eating habits are crucial for maintaining good health and preventing chronic diseases. This includes consuming a balanced diet with a variety of fruits, vegetables, and whole grains.',
                'post_image' => 'healthy-eating.webp',
                'user_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => '10 Must-Visit Tourist Destinations in Europe',
                'post_text' => 'Europe is home to some of the world\'s most iconic tourist destinations. From the Eiffel Tower in Paris to the Colosseum in Rome, here are 10 must-visit places in Europe.',
                'post_image' => 'europe.jpg',
                'user_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'How to Build a Successful Online Business',
                'post_text' => 'Starting an online business can be a great way to achieve financial freedom and work from anywhere. Some tips for success include identifying a niche market, creating a strong brand, and building a loyal customer base.',
                'post_image' => 'online-business.jpg',
                'user_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        foreach ($posts as $post) {
            $newPost = Post::create($post);
            $randomCategories = $categories->random(2);
            $newPost->categories()->attach($randomCategories->pluck('id')->toArray());
        }
    }
}

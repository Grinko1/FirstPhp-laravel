<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Category;
use \App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // User::truncate();
        // Post::truncate();
        // Category::truncate();
        $user = User::factory()->create([
            'name'=>'Nadya Grinko'
        ]);
        Post::factory(10)->create([
            'user_id' =>$user->id
        ]);

        // $user = User::factory()->create();

        // $personal = Category::create([
        //     'name'=>'Personal',
        //     'slug'=>'personal'
        // ]);

        // $family = Category::create([
        //     'name'=>'Family',
        //     'slug'=>'family'
        // ]);
        // $work = Category::create([
        //     'name'=>'Work',
        //     'slug'=>'work'
        // ]);
        // Post::create([
        //     'user_id'=>$user->id,
        //     'category_id'=> $personal->id,
        //     'title' => 'My Personal Post',
        //     'slug' => 'my-first-post',
        //     'excerpt' => '<p>Lorem ipsup sit ammert</p>',
        //     'body'=>'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'
        // ]);
        // Post::create([
        //     'user_id'=>$user->id,
        //     'category_id'=> $work->id,
        //     'title' => 'My Work Post',
        //     'slug' => 'my-second-post',
        //     'excerpt' => '<p>Lorem ipsup sit ammert</p>',
        //     'body'=>'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'
        // ]);
        // Post::create([
        //     'user_id'=>$user->id,
        //     'category_id'=> $family->id,
        //     'title' => 'My Family Post',
        //     'slug' => 'my-third-post',
        //     'excerpt' => '<p>Lorem ipsup sit ammert</p>',
        //     'body'=>'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'
        // ]);
    }
}

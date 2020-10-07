<?php

use App\User;
use App\Article;
use Illuminate\Database\Seeder;

class UsersTabeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 4)->create()->each(function ($user) {
            factory(Article::class, 10)->create(['user_id' => $user->id]);
        });
    }
}

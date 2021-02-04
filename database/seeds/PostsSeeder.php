<?php

use Illuminate\Database\Seeder;
use App\PostsModel;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        factory(PostsModel::class, 10)->create();
    }
}

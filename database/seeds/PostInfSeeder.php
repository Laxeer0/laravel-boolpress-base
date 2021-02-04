<?php

use Illuminate\Database\Seeder;
use App\PostInfModel;

class PostInfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PostInfModel::class, 10)->create();
    }
}

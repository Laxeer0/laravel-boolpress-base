<?php

use Illuminate\Database\Seeder;
use App\TagModel;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        factory(TagModel::class, 10)->create();
    }
}

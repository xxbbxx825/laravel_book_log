<?php

use Illuminate\Database\Seeder;
use App\Review;
class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Review::truncate();
        factory (Review::class, 10)->create();
    }
}

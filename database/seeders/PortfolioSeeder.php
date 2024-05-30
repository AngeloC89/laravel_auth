<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker; 
use App\Models\Portfolio;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 10; $i++) {

            $new_portfolio = new Portfolio();
            $new_portfolio->title = $faker->sentence();
            $new_portfolio->content = $faker->text();
            $new_portfolio->status = $faker->word();
            $new_portfolio->slug = Portfolio::generateSlug($new_portfolio->title);          
            $new_portfolio->save();
        }
    }

}

<?php

use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i=0; $i<23; $i++):
            DB::table('articles')->insert([

                'title'=> $faker->sentence(7),
                'user_id'=> rand(1,13),
                'categorie_id' => rand(1,2) ,
                'body' => $faker->text(50),
                'img' => $faker->imageUrl(),
                'imgThumb'=> $faker->imageUrl(325)
            ]);
        endfor;
    }
}

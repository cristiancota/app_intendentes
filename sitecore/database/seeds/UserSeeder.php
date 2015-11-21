<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('users')->insert([
            'name' => 'alejandro Galaz',
            'email' => 'administrador@uson.mx',
            'password' => bcrypt('hunter21')

        ]);

        $faker = \Faker\Factory::create();
        //TAREAS
        DB::table('tareas')->insert([
            'nom_tarea' => 'barrer'

        ]);
        DB::table('tareas')->insert([
            'nom_tarea' => 'trapear'

        ]);


        DB::table('plantas')->insert([
            'nombre' => 'primer piso'
        ]);
        DB::table('plantas')->insert([
            'nombre' => 'segundo piso'
        ]);
        DB::table('plantas')->insert([
            'nombre' => 'tercer piso'
        ]);
        DB::table('edificios')->insert([
            'nombre' => '5J'
        ]);
        DB::table('edificios')->insert([
            'nombre' => '5O'
        ]);



        //INTENDENTES
        // call faker instance
        $faker = \Faker\Factory::create();
        for($i=0; $i<23; $i++):
            DB::table('intendentes')->insert([
                'num_inten'=> $faker->randomNumber(5),
                'nombre'=> $faker->name,
                'apellido' => $faker->lastName ,
                'cel' => $faker->phoneNumber
            ]);
        endfor;


    }
}

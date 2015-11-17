<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create([

            'name'=> 'Julio',
            'role'=> 'admin',
            'email'=> 'caicedo.julio@gmail.com',
            'password'=>'123456'

        ]);

        factory(App\User::class)->create([
            'name'=> 'Yosly',
            'role'=> 'admin',
            'email'=>'yoslyhernandez@gmail.com',
            'password'=>'654321'
        ]);
        factory(App\User::class,10)->create();

    }
}

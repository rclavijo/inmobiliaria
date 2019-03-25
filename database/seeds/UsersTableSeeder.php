<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Company;
use App\Person;

class UsersTableSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Crear el usuairo root.
        User::create([
            'email' => 'root@aycinmobiliaria.com.co',
            'password' => bcrypt('root-1234'),
            'phone' => '3104550413',
            'active' => 1,
            'rol' => User::ROOT
        ]);
        
        // // Se crean usuarios de tipo administrador.
        factory(User::class)
            ->times(UtilSeeder::AMOUNT_ADMINS)
            ->create(['rol' => 'admin'])
            ->each(function($user) {
                factory(Person::class)
                    ->create([
                        'user_id' => $user->id
                    ]);
            });
        
        // Se crean usuarios vendedores de tipo persona.
        factory(User::class)
            ->times(UtilSeeder::AMOUNT_SELLER_PERSONS)
            ->create(['rol' => User::SELLER_PERSON])
            ->each(function($user) {
                factory(Person::class)
                    ->create([
                        'user_id' => $user->id
                    ]);
            });
            
        // Se crean usuarios vendedores de tipo empresa.
        factory(User::class)
            ->times(UtilSeeder::AMOUNT_SELLER_COMPANIES)
            ->create(['rol' => User::SELLER_COMPANY])
            ->each(function($user) {
                factory(Company::class)
                    ->create([
                        'user_id' => $user->id    
                    ]);
            });
    }
}

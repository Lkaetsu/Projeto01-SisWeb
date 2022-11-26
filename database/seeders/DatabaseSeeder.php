<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Teste Adm',
            'username' => 'TestAdm',
            'cpf' => '67890123456',
            'is_adm' => true
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Teste Sec',
            'username' => 'TestSec',
            'cpf' => '09876543210',
            'is_sec' => true
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Teste Prof',
            'username' => 'TestProf',
            'cpf' => '65432109876',
            'is_prof' => true
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Teste Teste',
            'username' => 'TestUser',
            'cpf' => '12345678901',
            'endereço' => 'wasd',
            'filme' => 'asd',
            'password' => 'Password'
        ]);
        \App\Models\User::factory(10)->create();
        //\App\Models\Professor::factory(5)->create();
        \App\Models\Curso::factory(10)->create();
    }
}

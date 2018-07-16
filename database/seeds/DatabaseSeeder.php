<?php

use Illuminate\Database\Seeder;
use TrustTattoo\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->createAdmin();
    }

    private function createAdmin()
    {
        User::create([
            'email' => 'admin@test.com',
            'name' => 'Admin',
            'password' => bcrypt('TattooTestLaravel')
        ]);

        $this->command->info('Usuário Administrador criado com sucesso!');
    }
}

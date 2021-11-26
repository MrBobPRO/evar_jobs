<?php

namespace Database\Seeders;

use App\Models\User;
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
        $user = new User();
        $user->name = 'admin';
        $user->email = 'evar_admin@mail.ru';
        $user->password = bcrypt('nYXk$5]~{9');
        $user->save();

        $this->call(VacancySeeder::class);
        $this->call(PositionSeeder::class);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\user;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        user::insert([
            ['username' => 'admin','password' => bcrypt('admin123'),'role' => 'admin'],
            ['username' => 'guru1','password' => bcrypt('guru123'),'role' => 'guru'],
            ['username' => 'ortu1','password' => bcrypt('ortu123'),'role' => 'orangtua'],
        ]);
    }
}

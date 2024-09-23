<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Sabdo Palon',
            'email' => 'janji@binus.ac.id',
            'password' => bcrypt('password'),
            'avatar' => 'https://upload.wikimedia.org/wikipedia/id/c/cc/Sabdapalon_di_cetha.jpg',
            'level' => 6, 
        ]);

        User::create([
            'name' => 'Kanjeng Ratu Kidul',
            'email' => 'kidul@binus.ac.id',
            'password' => bcrypt('password'),
            'avatar' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/34/Kanjeng_Ratu_Kidul.jpg/800px-Kanjeng_Ratu_Kidul.jpg',
            'level' => 9, 
        ]);

        User::create([
            'name' => 'Nyai Badarawuhi',
            'email' => 'nyai@binus.ac.id',
            'password' => bcrypt('password'),
            'avatar' => 'https://upload.wikimedia.org/wikipedia/commons/6/63/GKR_Hayu_2.jpg',
            'level' => 3, 
        ]);
    }
}

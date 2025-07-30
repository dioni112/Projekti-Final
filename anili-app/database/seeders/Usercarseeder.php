<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\user;
use App\Models\car;
use Illuminate\Foundation\Auth\User as AuthUser;

class UserCarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          $user= User::create([
           'emri'=> 'Arber',
           'mbiemri' => 'Gegaj',
           'kontakti' => '049824140',
          ]);

          $user->car()->create([
            'brand'=>'Opel',
            'model'=>'Meriva B',
            'year'=>2011,
          ]);
          
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password=Hash::make('12345');
        $userRecords = [
            [   'id'=>1,
                'first_name'=>'El Fadel ',
                'last_name'=>'Boukezane',
                'username'=>'elfadel',
                'password'=>$password,
                'birth_date'=>'2000-02-04',
                'permission'=>true,
                'image'=>'https://github.com/elfadelb.png'
            ],
            [   'id'=>2,
                'first_name'=>'Lionel',
                'last_name'=>'Messi',
                'username'=>'messi',
                'password'=>$password,
                'birth_date'=>'2002-07-18',
                'permission'=>false,
                'image'=>'https://th.bing.com/th/id/R.2a0656c2c5b4ae104ad0ceb7b83681d8?rik=h1wRZAbODG%2bXzQ&pid=ImgRaw&r=0'
            ],
            [   'id'=>3,
                'first_name'=>'Cristiano',
                'last_name'=>'Ronaldo',
                'username'=>'ronaldo',
                'password'=>$password,
                'birth_date'=>'2001-05-10',
                'permission'=>false,
                'image'=>'https://th.bing.com/th/id/OIP.A89qQY-nUQNm1YTZ8hee6wHaE8?pid=ImgDet&rs=1'
            ],
        ];
        User::insert($userRecords);
    }
}

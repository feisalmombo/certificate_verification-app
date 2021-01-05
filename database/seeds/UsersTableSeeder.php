<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->delete();
        User::create([
            'name'=>'admin',
            'email'=>'admin@tcu.com',
            'occupation'=>1,
            'password'=>bcrypt('12345')
            ]);
        User::create([
        	'name'=>'nascent',
            'email'=>'nascent@gmail.com',
            'occupation'=>2,
        	'password'=>bcrypt('12345')
        	]);
       
            User::create([
                'name'=>'mick',
                'email'=>'mick@gmail.com',
                'occupation'=>3,
                'password'=>bcrypt('12345')
                ]);
    }
}

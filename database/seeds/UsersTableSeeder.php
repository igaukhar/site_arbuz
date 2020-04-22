<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User::truncate();
        //DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $authorRole = Role::where('name', 'author')->first();
        $userRole = Role::where('name', 'user')->first();

        $admin = User::create([
            'role_id'=>'1',
            'name'=>'Admin',
            'email'=>'admin@admin.com',
            'phonenumber'=>'123456789',
            'password'=>bcrypt('admin0430'),
        ]);

        $author = User::create([
            'role_id'=>'2',
            'name'=>'Author',
            'email'=>'author@author.com',
            'phonenumber'=>'123456789',
            'password'=>bcrypt('author0430'),
        ]);

        $user = User::create([
            'role_id'=>'3',
            'name'=>'Generic User',
            'email'=>'user@user.com',
            'phonenumber'=>'123456789',
            'password'=>bcrypt('user0430'),
        ]);;

        $admin->roles()->attach($adminRole);
        $author->roles()->attach($authorRole);
        $user->roles()->attach($userRole);


    }
}

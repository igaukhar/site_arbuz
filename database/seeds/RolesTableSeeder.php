<?php

use Illuminate\Database\Seeder;
use App\Role;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Role::truncate();

        Role::create([
            'id' => '1',
            'name' => 'admin'
        ]);
        Role::create([
            'id' => '2',
            'name' => 'author'
        ]);
        Role::create([
            'id' => '3',
            'name' => 'user'
        ]);

    }
}

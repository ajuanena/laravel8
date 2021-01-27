<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
        	'name' => 'Arantxa Juanena',
        	'email' => 'ajuanenama@txingudibhi.net',
            'password' => bcrypt('ajuanenama')
    	]);
    }
}

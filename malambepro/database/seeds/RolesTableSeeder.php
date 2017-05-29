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
        Role::insert([
        	['name'=>'root','description'=>'This is root'],
        	['name'=>'admin','description'=>'This is admin'],
        	['name'=>'comission','description'=>'This is comission']
	   ]);
    }
}

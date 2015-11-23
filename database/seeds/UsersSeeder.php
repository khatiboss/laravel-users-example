<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		
		for($i=0;$i<5;$i++){
    	$user = new App\User();
    	$user->name = "Corso Mobile$i";
    	$user->email = "corso@mobile.it$i";
    	$user->password = "password$i";
    	$user->save();
		}
    }
}

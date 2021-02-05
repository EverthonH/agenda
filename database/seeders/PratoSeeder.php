<?php

namespace Database\Seeders;

use App\Models\Prato;
use App\Models\User;
use Illuminate\Database\Seeder;

class PratoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$users = User::all();
        foreach($users as $user){
    	Prato::factory(3)->create([
    		'user_id' => $user->id
    	]);
    	}
    }
}



       
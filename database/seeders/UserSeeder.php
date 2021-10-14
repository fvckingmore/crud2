<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
/*    	Role::create(['name' => 'admin']);*/

    	$user = User::create([
    		'username' => 'aemoreno',
    		'password' => Hash::make('aemoreno'),
    	]);

    	$role = Role::create(['name' => 'admin']);
    	$user->assignRole($role);
    	;  
    }
}

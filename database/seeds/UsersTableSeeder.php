<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
        User::truncate();

        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $morderatorRole = Role::where('name', 'morderator')->first();
        $editorRole = Role::where('name', 'editor')->first();
        $userRole = Role::where('name', 'user')->first();


        $admin = User::create([
        	'name' => 'Admin User',
        	'email' => 'admin@ex.com',
        	'password' =>Hash::make('admin123')
        ]);

        $morderator = User::create([
        	'name' => 'Morderator User',
        	'email' => 'morderator@ex.com',
        	'password' =>Hash::make('morderator123')
        ]);

        $editor = User::create([
        	'name' => 'Editor User',
        	'email' => 'editor@ex.com',
        	'password' =>Hash::make('editor123')
        ]);

        $user = User::create([
        	'name' => 'General User',
        	'email' => 'user@ex.com',
        	'password' =>Hash::make('user1234')
        ]);

        $admin->roles()->attach($adminRole);
        $morderator->roles()->attach($morderatorRole);
        $editor->roles()->attach($editorRole);
        $user->roles()->attach($userRole);


    }
}

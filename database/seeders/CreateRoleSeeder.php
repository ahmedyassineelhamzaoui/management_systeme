<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class CreateRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'khaled', 
            'email' => 'admin@adminable.com',
            'role_id' => 1,
            'password' => bcrypt('eRROR404@'),
        ]);
        $admin->assignRole('admin');
    
        $commercial = User::create([
            'name' => 'ahmed', 
            'email' => 'ahmed@gmail.com',
            'role_id' => 2,
            'password' => bcrypt('Password123!'),
        ]);
    
        $commercial->assignRole('commercial');
    
        $user = User::create([
            'name' => 'said', 
            'email' => 'said@gmail.com',
            'role_id' => 3,
            'password' => bcrypt('12345678'),
        ]);
    
        $user->assignRole('user');
    
    }
}

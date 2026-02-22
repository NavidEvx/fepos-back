<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::updateOrCreate(
            ['slug' => 'admin'],
            [
                'name' => 'Administrator',
                'permissions' => [
                    'users.view',
                    'users.create',
                    'users.update',
                    'users.delete',
                    'posts.manage',
                    'settings.manage',
                ]
            ]
        );

        Role::updateOrCreate(
            ['slug' => 'user'],
            [
                'name' => 'User',
                'permissions' => [
                    'profile.view',
                    'profile.update',
                    'posts.create',
                ]
            ]
        );
    }
}

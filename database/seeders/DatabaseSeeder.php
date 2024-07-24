<?php

namespace Database\Seeders;

use App\Models\Assistance;
use App\Models\Injure;
use App\Models\Role;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $roles = Role::initialRoles();
        foreach ($roles as $role) {
            Role::query()
                ->create([
                    "name" => $role,
                ]);
        }

        $admin = User::query()->create([
            'first_name' => 'Test',
            'last_name' => 'User',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);

        $admin->addRole(Role::query()->where('name', Role::ADMIN)->first());

        $injures = Injure::initial();
        foreach ($injures as $injure) {
            Injure::query()
                ->create([
                    "name" => $injure,
                ]);
        }

        $assistances = Assistance::initial();
        foreach ($assistances as $assistance) {
            Assistance::query()
                ->create([
                    "name" => $assistance,
                ]);
        }
    }
}

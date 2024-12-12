<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Define permissions
        $permissions = [
            'add',
            'edit',
            'remove',
            'approve',
            'see',
        ];

        // Create permissions
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Create roles and assign permissions

        // Superadmin - has all permissions
        $superAdminRole = Role::create(['name' => 'superadmin']);
        $superAdminRole->givePermissionTo(Permission::all());

        // Moderator - has all except 'approve'
        $moderatorRole = Role::create(['name' => 'moderator']);
        $moderatorRole->givePermissionTo(['add', 'edit', 'remove', 'see']);

        // Normal User - only has 'see' permission
        $userRole = Role::create(['name' => 'user']);
        $userRole->givePermissionTo('see');
    }
}

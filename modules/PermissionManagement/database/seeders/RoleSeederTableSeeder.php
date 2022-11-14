<?php

namespace Modules\PermissionManagement\database\seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeederTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call("OthersTableSeeder");

        $superadmin = Role::create(['name' => 'Super Admin']);
        $user = Role::create(['name' => 'User']);

        $superadmin->givePermissionTo(Permission::all());
        $superadmin->revokePermissionTo('report_store');

        $user->givePermissionTo([
            'general',
            'dashboard_index',
            'profile_index',
            'report_index',
            'report_store',
            'infrastructure_index',
        ]);

        User::firstWhere('email', 'superadmin@gmail.com')->assignRole('Super Admin');
        User::firstWhere('email', 'user@gmail.com')->assignRole('User');
        User::firstWhere('email', 'test@gmail.com')->assignRole('User');
    }
}

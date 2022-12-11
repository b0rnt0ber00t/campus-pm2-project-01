<?php

namespace Modules\MenuManagement\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\MenuManagement\app\Models\MenuGroup;
use Modules\MenuManagement\app\Models\MenuItem;

class MenuGeneralSeederTableSeeder extends Seeder
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

        $general = MenuGroup::create([
            'name' => 'General',
            'permission_name' => 'general',
            'posision' => 1,
        ]);

        MenuItem::create([
            'name' => 'Dashboard',
            'icon' => 'ri-dashboard-2-line',
            'route' => 'dashboard.index',
            'permission_name' => 'dashboard_index',
            'menu_group_id' => $general->id,
            'posision' => 1,
        ]);

        MenuItem::create([
            'name' => 'Report',
            'icon' => 'ri-file-warning-line',
            'route' => 'report.index',
            'permission_name' => 'report_index',
            'menu_group_id' => $general->id,
            'posision' => 2,
        ]);

        MenuItem::create([
            'name' => 'Infrastructure',
            'icon' => 'ri-file-list-line',
            'route' => 'infrastructure.index',
            'permission_name' => 'infrastructure_index',
            'menu_group_id' => $general->id,
            'posision' => 3,
        ]);

        MenuItem::create([
            'name' => 'User Validation',
            'icon' => 'ri-user-follow-line',
            'route' => 'user.validation.index',
            'permission_name' => 'user_validation_index',
            'menu_group_id' => $general->id,
            'posision' => 4,
        ]);
    }
}

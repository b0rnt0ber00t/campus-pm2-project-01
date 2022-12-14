<?php

namespace Modules\MenuManagement\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class MenuManagementDatabaseSeeder extends Seeder
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

        $this->call(MenuGeneralSeederTableSeeder::class); // position 1
        $this->call(MenuSettingSeederTableSeeder::class); // position 2
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call([
            RolesTableSeeder::class,
            UsersTableSeeder::class,
            CitiesTableSeeder::class,
            StreetsTableSeeder::class,
            UtilityServicesTableSeeder::class,
            IssuePrioritiesTableSeeder::class,
            IssueCategoriesTableSeeder::class,
            IssueStatusesTableSeeder::class,
        ]);
    }
}

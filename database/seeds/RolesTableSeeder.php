<?php

use Illuminate\Database\Seeder;
use App\Http\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([
            [
                'name_ua' => 'Диспетчер міста',
                'name_ru' => 'Диспетчер города',
                'name_uk' => 'City dispatcher',
            ],
            [
                'name_ua' => 'Диспетчер підприємства',
                'name_ru' => 'Диспетчер предприятия',
                'name_uk' => 'Company dispatcher',
            ],
            [
                'name_ua' => 'Співробітник підприємства',
                'name_ru' => 'Сотрудник предприятия',
                'name_uk' => 'Company employee',
            ],
        ]);
    }
}

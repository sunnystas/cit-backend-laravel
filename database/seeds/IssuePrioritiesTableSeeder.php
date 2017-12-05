<?php

use Illuminate\Database\Seeder;
use App\Http\Models\IssuePriority;

class IssuePrioritiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        IssuePriority::insert([
            [
                'id' => 1,
                'name_ua' => 'Планові роботи',
                'name_ru' => '',
            ],
            [
                'id' => 2,
                'name_ua' => 'Звернення',
                'name_ru' => '',
            ],
            [
                'id' => 3,
                'name_ua' => 'Першочергово',
                'name_ru' => '',
            ],
            [
                'id' => 4,
                'name_ua' => 'Терміново',
                'name_ru' => '',
            ],
            [
                'id' => 5,
                'name_ua' => 'Невідкладно',
                'name_ru' => '',
            ],
        ]);
    }
}

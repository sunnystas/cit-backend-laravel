<?php

use Illuminate\Database\Seeder;
use App\Http\Models\IssueStatus;

class IssueStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        IssueStatus::insert([
            [
                'id' => 1,
                'name_ua' => 'Очікування',
                'name_ru' => '',
            ],
            [
                'id' => 2,
                'name_ua' => 'Переглянуто',
                'name_ru' => '',
            ],
            [
                'id' => 3,
                'name_ua' => 'Отримано',
                'name_ru' => '',
            ],
            [
                'id' => 4,
                'name_ua' => 'В обробці',
                'name_ru' => '',
            ],
            [
                'id' => 5,
                'name_ua' => 'На виконанні',
                'name_ru' => '',
            ],
            [
                'id' => 6,
                'name_ua' => 'Виконано',
                'name_ru' => '',
            ],
            [
                'id' => 7,
                'name_ua' => 'Перевірено',
                'name_ru' => '',
            ],
            [
                'id' => 8,
                'name_ua' => 'Невірне',
                'name_ru' => '',
            ],
            [
                'id' => 9,
                'name_ua' => 'Неможливо виконати',
                'name_ru' => '',
            ],
            [
                'id' => 10,
                'name_ua' => 'Неможливо перевірити',
                'name_ru' => '',
            ]
        ]);
    }
}

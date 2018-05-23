<?php

use Illuminate\Database\Seeder;
use App\Entry as Entry;

class PhonebookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeds = [
            ['name' => 'Василий', 'phone' => '12345'],
            ['name' => 'Иван', 'phone' => '23456'],
            ['name' => 'Федор', 'phone' => '34567'],
            ['name' => 'Павел', 'phone' => '45678'],
            ['name' => 'Мария', 'phone' => '56789'],
            ['name' => 'Катерина', 'phone' => '01234'],
            ['name' => 'Игнат', 'phone' => '123456'],
            ['name' => 'Василиса', 'phone' => '234567'],
            ['name' => 'Константин', 'phone' => '345678'],
            ['name' => 'Валентина', 'phone' => '456789'],
        ];

        foreach ($seeds as $seed) {
            $entry = new Entry;
            $entry->name = $seed['name'];
            $entry->phone = $seed['phone'];
            $entry->save();
        }
    }
}

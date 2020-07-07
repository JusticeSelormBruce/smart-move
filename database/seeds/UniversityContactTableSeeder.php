<?php

use App\Contact;
use Illuminate\Database\Seeder;

class UniversityContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create(
            [
                'phone' => '0248284049',
                'uni_id' => 1
            ]
        );
        Contact::create(
            [
                'phone' => '0248284050',
                'uni_id' => 1
            ]
        );
        Contact::create(
            [
                'phone' => '0248704049',
                'uni_id' => 1
            ]
        );
    }
}

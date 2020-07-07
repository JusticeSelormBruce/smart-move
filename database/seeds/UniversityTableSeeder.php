<?php

use App\University;
use Illuminate\Database\Seeder;

class UniversityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        University::create([
            'name'=>"University of Ghana",
            'url'=>"https://www.ug.edu.gh/",
            'description'=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora aliquid, eveniet dolorum eligendi ipsa aspernatur at temporibus, dicta quibusdam, amet ut et ab. Odio, modi et. Quam excepturi sequi soluta. Consequuntur deleniti asperiores suscipit voluptatum atque nemo sequi, quis aspernatur quisquam totam cumque expedita voluptatibus molestiae omnis ratione, quasi libero.",
            'user_id'=>1

        ]);
    }
}

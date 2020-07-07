<?php

use App\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RouteTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(UniversityTableSeeder::class);
        $this->call(UniversityContactTableSeeder::class);


    }
}

<?php

use App\UserType;
use Illuminate\Database\Seeder;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserType::insert([
            [
                'name' => 'Admin',
                'display_name' => 'Admin',
                'is_active' => true,
            ],
            [
                'name' => 'Member',
                'display_name' => 'Member',
                'is_active' => true,
            ],
        ]);
    }
}

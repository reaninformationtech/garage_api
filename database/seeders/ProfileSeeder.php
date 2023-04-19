<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\API\Profiles\Profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $profile = new Profile();
        $profile->profile = 'Admin';
        $profile->system_id = '1';
        $profile->active = '1';
        $profile->save();

        $profile = new Profile();
        $profile->profile = 'Manager';
        $profile->system_id = '1';
        $profile->active = '1';
        $profile->save();

        $profile = new Profile();
        $profile->profile = 'Stock';
        $profile->system_id = '1';
        $profile->active = '1';
        $profile->save();

        $profile = new Profile();
        $profile->profile = 'Sell';
        $profile->system_id = '1';
        $profile->active = '1';
        $profile->save();

        $profile = new Profile();
        $profile->profile = 'Audit';
        $profile->system_id = '1';
        $profile->active = '1';
        $profile->save();


        $profile = new Profile();
        $profile->profile = 'Reporter';
        $profile->system_id = '1';
        $profile->active = '1';
        $profile->save();

        $profile = new Profile();
        $profile->profile = 'Admin';
        $profile->system_id = '2';
        $profile->active = '1';
        $profile->save();


        $profile = new Profile();
        $profile->profile = 'Manager';
        $profile->system_id = '2';
        $profile->active = '1';
        $profile->save();

        $profile = new Profile();
        $profile->profile = 'POS';
        $profile->system_id = '2';
        $profile->active = '1';
        $profile->save();

        $profile = new Profile();
        $profile->profile = 'Audit';
        $profile->system_id = '2';
        $profile->active = '1';
        $profile->save();
    }
}

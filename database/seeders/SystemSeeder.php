<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\System;

class SystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $system = new System();
        $system->name = 'Coffee';
        $system->status = 'DEV';
        $system->inputter = 'IT.SYTEM';
        $system->active=true;
        $system->save();

        $system = new System();
        $system->name = 'POS';
        $system->status = 'DEV';
        $system->active=true;
        $system->inputter = 'IT.SYTEM';
        $system->save();

        $system = new System();
        $system->name = 'Care Store';
        $system->status = 'DEV';
        $system->active=true;
        $system->inputter = 'IT.SYTEM';
        $system->save();

        $system = new System();
        $system->name = 'Land';
        $system->status = 'DEV';
        $system->active=true;
        $system->inputter = 'IT.SYTEM';
        $system->save();


        $system = new System();
        $system->name = 'Hospital';
        $system->status = 'DEV';
        $system->active=true;
        $system->inputter = 'IT.SYTEM';
        $system->save();
    }
}

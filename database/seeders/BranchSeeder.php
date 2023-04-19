<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Branch;
use App\Models\System;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $system = System::first();
        
        $branch = new Branch();
        $branch->branch_code = '0003';
        $branch->subofbranch = '1000';
        $branch->short_name = 'C0D';
        $branch->main_branch = '1';
        $branch->slogan = 'Work hard. Drink coffee';
        $branch->name = 'C0FFEE AND C0DING';
        $branch->system_id = $system->id;
        $branch->active = '1';
        $branch->save();

        $branch = new Branch();
        $branch->branch_code = '0001';
        $branch->subofbranch = '2000';
        $branch->short_name = 'C0D';
        $branch->main_branch = '0';
        $branch->slogan = 'Work hard. Drink coffee';
        $branch->name = 'C0FFEE AND C0DING';
        $branch->phone = '012 500 339';
        $branch->address = 'Phnom penh they Sen Sok';
        $branch->system_id = $system->id;
        $branch->active = '1';
        $branch->save();

        $branch = new Branch();
        $branch->branch_code = '0002';
        $branch->subofbranch = '3000';
        $branch->short_name = 'MOT';
        $branch->main_branch = '0';
        $branch->slogan = 'Your Coffee. Your Way';
        $branch->name = 'C0DE & Coffee';
        $branch->phone = '010 500 313';
        $branch->address = 'PP Wat Toul';
        $branch->system_id = $system->id;
        $branch->active = '1';
        $branch->save();
    }
}

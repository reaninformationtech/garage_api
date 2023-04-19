<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\gb_sys_contants;

class SyscontantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $sys= new gb_sys_contants();
        $sys->con_name ='branchcode';
        $sys->con_values ='100';
        $sys->con_comments ='start branch code first with 100';
        $sys->save();

        $sys= new gb_sys_contants();
        $sys->con_name ='sysdocnum';
        $sys->con_values ='100';
        $sys->con_comments ='start sysdocnum  first with 100';
        $sys->save();
    }
}

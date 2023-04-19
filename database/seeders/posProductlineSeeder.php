<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\API\POS\posProductLine;

class posProductlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $line  = new posProductLine();
        $line->lin_code = '001';
        $line->branch_code = '0001';
        $line->lin_name = 'Box';
        $line->remark = 'Box';
        $line->active = '1';
        $line->inputter = 'IT.System';
        $line->save();


        $line  = new posProductLine();
        $line->lin_code = '002';
        $line->branch_code = '0001';
        $line->lin_name = 'Coffee';
        $line->remark = 'Coffee';
        $line->active = '1';
        $line->inputter = 'IT.System';
        $line->save();

        $line  = new posProductLine();
        $line->lin_code = '003';
        $line->branch_code = '0001';
        $line->lin_name = 'Tea';
        $line->remark = 'Tea';
        $line->active = '1';
        $line->inputter = 'IT.System';
        $line->save();

    }
}

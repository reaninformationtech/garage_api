<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\API\Admin\Province;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $Province = new Province();
        $Province->name='Banteay Meanchey Province';
        $Province->active='1';
        $Province->inputter='IT.SYSTEM';
        $Province->save();

        $Province = new Province();
        $Province->name='Battambang Province';
        $Province->active='1';
        $Province->inputter='IT.SYSTEM';
        $Province->save();


        $Province = new Province();
        $Province->name='Kampong Cham Province';
        $Province->active='1';
        $Province->inputter='IT.SYSTEM';
        $Province->save();


        $Province = new Province();
        $Province->name='Kampong Chhnang Province';
        $Province->active='1';
        $Province->inputter='IT.SYSTEM';
        $Province->save();
        
        $Province = new Province();
        $Province->name='Kampong Speu Province';
        $Province->active='1';
        $Province->inputter='IT.SYSTEM';
        $Province->save();


        $Province = new Province();
        $Province->name='Kampong Thom Province';
        $Province->active='1';
        $Province->inputter='IT.SYSTEM';
        $Province->save();


        $Province = new Province();
        $Province->name='Kampot Province';
        $Province->active='1';
        $Province->inputter='IT.SYSTEM';
        $Province->save();

        $Province = new Province();
        $Province->name='Kandal Province';
        $Province->active='1';
        $Province->inputter='IT.SYSTEM';
        $Province->save();


        $Province = new Province();
        $Province->name='Koh Kong Province';
        $Province->active='1';
        $Province->inputter='IT.SYSTEM';
        $Province->save();


        $Province = new Province();
        $Province->name='Kratie Province';
        $Province->active='1';
        $Province->inputter='IT.SYSTEM';
        $Province->save();


        $Province = new Province();
        $Province->name='Mondul Kiri Province';
        $Province->active='1';
        $Province->inputter='IT.SYSTEM';
        $Province->save();
        

        $Province = new Province();
        $Province->name='Phnom Penh Capital';
        $Province->active='1';
        $Province->inputter='IT.SYSTEM';
        $Province->save();


        $Province = new Province();
        $Province->name='Preah Vihear Province';
        $Province->active='1';
        $Province->inputter='IT.SYSTEM';
        $Province->save();

        $Province = new Province();
        $Province->name='Prey Veng Province';
        $Province->active='1';
        $Province->inputter='IT.SYSTEM';
        $Province->save();

        $Province = new Province();
        $Province->name='Pursat Province';
        $Province->active='1';
        $Province->inputter='IT.SYSTEM';
        $Province->save();

        $Province = new Province();
        $Province->name='Ratanak Kiri Province';
        $Province->active='1';
        $Province->inputter='IT.SYSTEM';
        $Province->save();

        $Province = new Province();
        $Province->name='Siemreap Province';
        $Province->active='1';
        $Province->inputter='IT.SYSTEM';
        $Province->save();


        $Province = new Province();
        $Province->name='Preah Sihanouk Province';
        $Province->active='1';
        $Province->inputter='IT.SYSTEM';
        $Province->save();


        $Province = new Province();
        $Province->name='Stung Treng Province';
        $Province->active='1';
        $Province->inputter='IT.SYSTEM';
        $Province->save();

        $Province = new Province();
        $Province->name='Svay Rieng Province';
        $Province->active='1';
        $Province->inputter='IT.SYSTEM';
        $Province->save();


        $Province = new Province();
        $Province->name='Takeo Province';
        $Province->active='1';
        $Province->inputter='IT.SYSTEM';
        $Province->save();

        $Province = new Province();
        $Province->name='Oddar Meanchey Province';
        $Province->active='1';
        $Province->inputter='IT.SYSTEM';
        $Province->save();

        $Province = new Province();
        $Province->name='Kep Province';
        $Province->active='1';
        $Province->inputter='IT.SYSTEM';
        $Province->save();

        $Province = new Province();
        $Province->name='Pailin Province';
        $Province->active='1';
        $Province->inputter='IT.SYSTEM';
        $Province->save();


        $Province = new Province();
        $Province->name='Tboung Khmum Province';
        $Province->active='1';
        $Province->inputter='IT.SYSTEM';
        $Province->save();

    }
}

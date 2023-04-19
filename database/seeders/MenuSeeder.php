<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $menu = new Menu();
        $menu->icon = 'Home';
        $menu->pagename = 'side-menu-dashboard';
        $menu->title = 'Dashboard';
        $menu->parent_id = null;
        $menu->ignore = '0';
        $menu->active = '1';
        $menu->ordering = '1';
        $menu->save();

        $menu = new Menu();
        $menu->icon = 'Activity';
        $menu->pagename = 'side-menu-dashboard-overview-1';
        $menu->title = 'Overview 1';
        $menu->parent_id = '1';
        $menu->ignore = '0';
        $menu->active = '1';
        $menu->ordering = '2';
        $menu->save();

        $menu = new Menu();
        $menu->icon = 'Activity';
        $menu->pagename = 'side-menu-dashboard-overview-2';
        $menu->title = 'Overview 2';
        $menu->parent_id = '1';
        $menu->ignore = '0';
        $menu->active = '1';
        $menu->ordering = '3';
        $menu->save();

        $menu = new Menu();
        $menu->icon = 'Activity';
        $menu->pagename = 'side-menu-dashboard-overview-3';
        $menu->title = 'Overview 3';
        $menu->parent_id = '1';
        $menu->ignore = '0';
        $menu->active = '1';
        $menu->ordering = '4';
        $menu->save();

        $menu = new Menu();
        $menu->icon = 'ShoppingBag';
        $menu->pagename = 'side-menu-ecommerce';
        $menu->title = 'E-Commerce';
        $menu->parent_id = null;
        $menu->ignore = '0';
        $menu->active = '1';
        $menu->ordering = '5';
        $menu->save();

        $menu = new Menu();
        $menu->icon = 'Activity';
        $menu->pagename = 'side-menu-categories';
        $menu->title = 'Categories';
        $menu->parent_id = '5';
        $menu->ignore = '0';
        $menu->active = '1';
        $menu->ordering = '6';
        $menu->save();


        $menu = new Menu();
        $menu->icon = 'Activity';
        $menu->pagename = 'side-menu-add-product';
        $menu->title = 'Add Product';
        $menu->parent_id = '5';
        $menu->ignore = '0';
        $menu->active = '1';
        $menu->ordering = '7';
        $menu->save();

        $menu = new Menu();
        $menu->icon = 'Settings';
        $menu->pagename = 'side-menu-setting';
        $menu->title = 'Settings';
        $menu->parent_id = null;
        $menu->ignore = '0';
        $menu->active = '1';
        $menu->ordering = '8';
        $menu->save();

        $menu = new Menu();
        $menu->icon = 'Activity';
        $menu->pagename = 'side-menu-add-branch';
        $menu->title = 'Add Branch';
        $menu->parent_id = '8';
        $menu->ignore = '0';
        $menu->active = '1';
        $menu->ordering = '9';
        $menu->save();

        $menu = new Menu();
        $menu->icon = 'Activity';
        $menu->pagename = 'side-menu-add-user';
        $menu->title = 'Add User';
        $menu->parent_id = '8';
        $menu->ignore = '0';
        $menu->active = '1';
        $menu->ordering = '10';
        $menu->save();

        $menu = new Menu();
        $menu->icon = 'Activity';
        $menu->pagename = 'side-menu-add-menu';
        $menu->title = 'Add Menu';
        $menu->parent_id = '8';
        $menu->ignore = '0';
        $menu->active = '1';
        $menu->ordering = '11';
        $menu->save();



        $menu = new Menu();
        $menu->icon = 'Layers';
        $menu->pagename = 'side-menu-pos';
        $menu->title = 'POS';
        $menu->parent_id = null;
        $menu->ignore = '0';
        $menu->active = '1';
        $menu->ordering = '12';
        $menu->save();

        $menu = new Menu();
        $menu->icon = 'Activity';
        $menu->pagename = 'side-menu-pos-stock';
        $menu->title = 'Register Stock';
        $menu->parent_id = '12';
        $menu->ignore = '0';
        $menu->active = '1';
        $menu->ordering = '13';
        $menu->save();

        $menu = new Menu();
        $menu->icon = 'Activity';
        $menu->pagename = 'side-menu-pos-product';
        $menu->title = 'Register Product';
        $menu->parent_id = '12';
        $menu->ignore = '0';
        $menu->active = '1';
        $menu->ordering = '14';
        $menu->save();


        $menu = new Menu();
        $menu->icon = 'Activity';
        $menu->pagename = 'side-menu-pos-customer';
        $menu->title = 'Register Customer';
        $menu->parent_id = '12';
        $menu->ignore = '0';
        $menu->active = '1';
        $menu->ordering = '14';
        $menu->save();


        $menu = new Menu();
        $menu->icon = 'Activity';
        $menu->pagename = 'side-menu-pos-supply';
        $menu->title = 'Register Supply';
        $menu->parent_id = '12';
        $menu->ignore = '0';
        $menu->active = '1';
        $menu->ordering = '15';
        $menu->save();

        $menu = new Menu();
        $menu->icon = 'Activity';
        $menu->pagename = 'side-menu-pos-purchaseorder';
        $menu->title = 'Purchase Order';
        $menu->parent_id = '12';
        $menu->ignore = '0';
        $menu->active = '1';
        $menu->ordering = '16';
        $menu->save();


    }
}

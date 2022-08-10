<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create([
            'name' => 'Buena Vista Plaza',
            'thumbnail' => 'customers/RZdDSiITkof3c1gkzDld39gFpWkP62HpFjbNCt5T.jpg',
            'status' => 1,
            'slug' => 'buena-vista-plaza'
        ]);
        Customer::create([
            'name' => 'Calbaq',
            'thumbnail' => 'customers/jUSVMyuVACMJgzZFiF6vBDDOoCwtCPZtAdky6EqI.jpg',
            'status' => 1,
            'slug' => 'calbaq'
        ]);
        Customer::create([
            'name' => 'Iasa',
            'thumbnail' => 'customers/rnKeXqQWZuMDi8BnrbLtp8xtn6DeE5fa6DCxGYrs.jpg',
            'status' => 1,
            'slug' => 'iasa'
        ]);
        Customer::create([
            'name' => 'Mama Tere',
            'thumbnail' => 'customers/DmpJUy1DyHj9gy8ZrXJYWYAMm7TZ9cEzEsOyuBWU.jpg',
            'status' => 1,
            'slug' => 'mama-tere'
        ]);
        Customer::create([
            'name' => 'Mi Jugueteria',
            'thumbnail' => 'customers/of8GeHBNyOXKuywR2EPwci0n5dYaFigvtrosDvkv.jpg',
            'status' => 1,
            'slug' => 'mi-jugueteria'
        ]);
        Customer::create([
            'name' => 'Pinturas Unidas',
            'thumbnail' => 'customers/HktLHCn2lTrX6BRJyXatQjPNR9iHdWJeDkbMeHQS.jpg',
            'status' => 1,
            'slug' => 'pinturas-unidas'
        ]);
        Customer::create([
            'name' => 'Tonicorp',
            'thumbnail' => 'customers/QGlrXobzehDp0XaR4A4kW950zpO3DhbaaONxtUMg.jpg',
            'status' => 1,
            'slug' => 'tonicorp'
        ]);
    }
}

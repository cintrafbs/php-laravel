<?php

use Illuminate\Database\Seeder;
Use App\Customer;

class CustomersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Customer::class,50)->create();
    }
}

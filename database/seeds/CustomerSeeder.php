<?php

use App\Customer;
use App\CustomerContact;
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
        factory(Customer::class,50)
            ->create()
            ->each(function($customer) {
                factory(CustomerContact::class,rand(1,3))
                ->create([
                    'customer_id' => $customer->id 
                ]);
        });

    }
}


<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::factory()
            ->count(110)
            ->hasInvoices(10)
            ->create();
            echo ('1\n');
        Customer::factory()
            ->count(120)
            ->hasInvoices(3)
            ->create();
            echo ('2\n');
        Customer::factory()
            ->count(130)
            ->hasInvoices(2)
            ->create();
            echo ('3\n');
        Customer::factory()
            ->count(140)
            ->hasInvoices(1)
            ->create();
            echo ('4\n');
        Customer::factory()
            ->count(10)
            ->create();
            echo ('5\n');
    }
}

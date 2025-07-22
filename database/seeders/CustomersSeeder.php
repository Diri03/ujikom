<?php

namespace Database\Seeders;

use App\Models\Customers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = [
            [
                'customer_name' => 'Abdullah Faqih',
                'phone' => '082213456789',
                'address' => 'Indonesia'
            ],
            [
                'customer_name' => 'Agra Saputra',
                'phone' => '082213456790',
                'address' => 'Indonesia'
            ],
            [
                'customer_name' => 'Ananda Nabiilah Luthfiyyah',
                'phone' => '082213456791',
                'address' => 'Indonesia'
            ],
            [
                'customer_name' => 'Aryo Putranto',
                'phone' => '082213456792',
                'address' => 'Indonesia'
            ],
            [
                'customer_name' => 'Erssa Istary Yusuf',
                'phone' => '082213456793',
                'address' => 'Indonesia'
            ],
            [
                'customer_name' => 'Hardianti',
                'phone' => '082213456794',
                'address' => 'Indonesia'
            ],
            [
                'customer_name' => 'Intan Dwi Yasarah',
                'phone' => '082213456795',
                'address' => 'Indonesia'
            ],
            [
                'customer_name' => 'Muhammad Siddiq',
                'phone' => '082213456796',
                'address' => 'Indonesia'
            ],
            [
                'customer_name' => 'Muhammad Reihan',
                'phone' => '082213456797',
                'address' => 'Indonesia'
            ],
            [
                'customer_name' => 'Raihan Adliansyah',
                'phone' => '082213456798',
                'address' => 'Indonesia'
            ],
            [
                'customer_name' => 'Salsabila Suci Gustiani',
                'phone' => '082213456799',
                'address' => 'Indonesia'
            ],
            [
                'customer_name' => 'Sayyid Hamzah Azzami',
                'phone' => '082213456800',
                'address' => 'Indonesia'
            ],
            [
                'customer_name' => 'Sayyid Umar Hasani',
                'phone' => '082213456801',
                'address' => 'Indonesia'
            ],
            [
                'customer_name' => 'Shofian Al Fikri Subagio',
                'phone' => '082213456802',
                'address' => 'Indonesia'
            ],
            [
                'customer_name' => 'William Setiady',
                'phone' => '082213456803',
                'address' => 'Indonesia'
            ]
        ];

        foreach ($customers as $customer) {
            Customers::create($customer);
        }
    }
}

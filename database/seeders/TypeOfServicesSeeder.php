<?php

namespace Database\Seeders;

use App\Models\TypeOfServices;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeOfServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'service_name' => 'Cuci dan Gosok',
                'price' => 6000,
                'description' => 'Jasa Cuci dan Gosok hanya Rp 6.000'
            ],
            [
                'service_name' => 'Cuci',
                'price' => 4000,
                'description' => 'Jasa Cuci hanya Rp 4.000'
            ],
            [
                'service_name' => 'Gosok',
                'price' => 4000,
                'description' => 'Jasa Gosok hanya Rp 4.000'
            ],
            [
                'service_name' => 'Cuci dan Gosok Express',
                'price' => 10000,
                'description' => 'Jasa Gosok hanya Rp 10.000'
            ]
        ];

        foreach ($services as $service) {
            TypeOfServices::create($service);
        }
    }
}

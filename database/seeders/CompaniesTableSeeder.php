<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $companies = [
        [
            'name' => 'peletria y color',
            'nit' => '9000045871',
            'owner_name' => 'maria pinilla',
            'date_fundation' => '2000-01-01',
            'address' => 'cra 74 # 43 c - 125',
            'email' => 'peleteriacolor@gmail.com',
            'cellphone' => '3255547811'
        ],
        [
            'name' => 'textiles color',
            'nit' => '9008745551',
            'owner_name' => 'andres pedraza',
            'date_fundation' => '2004-08-21',
            'address' => 'calle 85 # 90 a - 53',
            'email' => 'texti@gmail.com',
            'cellphone' => '3114778945'
        ]
       ];

       foreach($companies as $company)

        Company::create([
            'name' => $company['name'],
            'nit' => $company['nit'],
            'owner_name' => $company['owner_name'],
            'date_fundation' => $company['date_fundation'],
            'address' => $company['address'],
            'email' => $company['email'],
            'cellphone' => $company['cellphone']
        ]);
    }
}

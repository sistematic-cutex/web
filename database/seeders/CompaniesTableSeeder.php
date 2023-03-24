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
        Company::create(
            [
                'name' => 'peleteria cueros y color',
                'nit' => '900008745',
                'owner_name' => 'maria pinilla',
                'date_fundation' => '2000-01-01',
                'address' => 'cra 45 a # 80 b - 50',
                'email' => 'cueroycolor@gmiil.com',
                'cellphone' => '322457810'
            ]
        );
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => ' Correa doble faz',
                'reference' => '001',
                'description' => 'Correea doble faz',
                'stock' => '10',
                'price' => '25000',
                'measure' => '',
                'company_id' => '1',
                'provider_id' => '1',
                'color_id' => '1',
                'subcategory_id' => '1',
                'user_id' => '1'
            ],

            [
                'name' => 'Billetera con cierre',
                'reference' => '002',
                'description' => 'Billetera con cierre',
                'stock' => '12',
                'price' => '35000',
                'measure' => '',
                'company_id' => '1',
                'provider_id' => '2',
                'color_id' => '2',
                'subcategory_id' => '2',
                'user_id' => '2'
            ],
            [
                'name' => 'Correa lisa',
                'reference' => '003',
                'description' => 'Correa lisa',
                'stock' => '12',
                'price' => '35000',
                'measure' => '',
                'company_id' => '1',
                'provider_id' => '2',
                'color_id' => '3',
                'subcategory_id' => '3',
                'user_id' => '3'
            ],
            [
                'name' => 'Billetera broche',
                'reference' => '004',
                'description' => 'Billetera broche',
                'stock' => '11',
                'price' => '34000',
                'measure' => '',
                'company_id' => '1',
                'provider_id' => '2',
                'color_id' => '4',
                'subcategory_id' => '4',
                'user_id' => '3'

            ]
        ];
        foreach ($products as $product) {
            Product::create([
                'name' => $product['name'],
                'reference' => $product['reference'],
                'description' => $product['description'],
                'stock' => $product['stock'],
                'price' => $product['price'],
                'measure' => $product['measure'],
                'company_id' => $product['company_id'],
                'provider_id' => $product['provider_id'],
                'color_id' => $product['color_id'],
                'subcategory_id' => $product['subcategory_id'],
                'user_id' => $product['user_id'],

            ]);
        }
    }
}

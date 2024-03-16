<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product; // Add this line to import the Product model

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Sample Product 1',
            'description' => 'This is a sample product description for product 1.',
            'price' => 10.99,
            'stars' => 4,
            'img' => 'images/sample1.jpg',
            'location' => 'Sample Location 1',
        ]);

        Product::create([
            'name' => 'Sample Product 2',
            'description' => 'This is a sample product description for product 2.',
            'price' => 19.99,
            'stars' => 5,
            'img' => 'images/sample2.jpg',
            'location' => 'Sample Location 2',
        ]);

        Product::create([
            'name' => 'Sample Product 3',
            'description' => 'This is a sample product description for product 3.',
            'price' => 15.99,
            'stars' => 3,
            'img' => 'images/sample3.jpg',
            'location' => 'Sample Location 3',
        ]);

        Product::create([
            'name' => 'Sample Product 4',
            'description' => 'This is a sample product description for product 4.',
            'price' => 14.99,
            'stars' => 4,
            'img' => 'images/sample4.jpg',
            'location' => 'Sample Location 4',
        ]);

        Product::create([
            'name' => 'Sample Product 5',
            'description' => 'This is a sample product description for product 5.',
            'price' => 11.99,
            'stars' => 5,
            'img' => 'images/sample5.jpg',
            'location' => 'Sample Location 5',
        ]);

        Product::create([
            'name' => 'Sample Product 6',
            'description' => 'This is a sample product description for product 6.',
            'price' => 16.99,
            'stars' => 3,
            'img' => 'images/sample6.jpg',
            'location' => 'Sample Location 6',
        ]);

        Product::create([
            'name' => 'Sample Product 7',
            'description' => 'This is a sample product description for product 7.',
            'price' => 20.99,
            'stars' => 4,
            'img' => 'images/sample7.jpg',
            'location' => 'Sample Location 7',
        ]);

        Product::create([
            'name' => 'Sample Product 8',
            'description' => 'This is a sample product description for product 8.',
            'price' => 18.99,
            'stars' => 5,
            'img' => 'images/sample8.jpg',
            'location' => 'Sample Location 8',
        ]);

        Product::create([
            'name' => 'Sample Product 9',
            'description' => 'This is a sample product description for product 9.',
            'price' => 12.99,
            'stars' => 4,
            'img' => 'images/sample9.jpg',
            'location' => 'Sample Location 9',
        ]);

        Product::create([
            'name' => 'Sample Product 10',
            'description' => 'This is a sample product description for product 10.',
            'price' => 25.99,
            'stars' => 4,
            'img' => 'images/sample10.jpg',
            'location' => 'Sample Location 10',
        ]);
    }
}

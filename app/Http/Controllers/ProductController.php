<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function popular()
    {
        $products = Product::orderByDesc('stars')->limit(100)->get();
        return response()->json([
            'total_size' => $products->count(),
            'type_id' => 2, // Assuming this is a default value
            'offset' => 0, // Assuming this is a default value
            'products' => $products
        ]);
    }

    public function recommended()
    {
        $recommendedProducts = Product::where('stars', 3) // Assuming type_id 3 represents recommended products
            ->orderByDesc('stars') // You can adjust the criteria for recommended products as needed
            ->limit(5) // Limit the number of recommended products to 5
            ->get();

        return response()->json([
            'total_size' => $recommendedProducts->count(),
            'type_id' => 3, // Assuming type_id 3 represents recommended products
            'offset' => 0, // Assuming offset is 0 for the first page
            'products' => $recommendedProducts,
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductCollection;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // return new ProductCollection(Product::all());
        // return new ProductCollection(Product::orderBy('id', 'DESC')->paginate(10));

        // Get category_id query parameter
        $category_id = $request->query('category_id');

        // Database query
        $query = Product::orderBy('id', 'ASC')->where('status', 1);
    
        // If category_id provided, add additional clause to database query
        if ($category_id) {
            $query->where('category_id', $category_id);
        }
        
        return new ProductCollection($query->paginate(3));
    }

    public function registerProduct(ProductRequest $request)
    {      
        // Validate request
        $data = $request->validated();

        // Store product
        Product::create([
            'name' => $data['name'],
            'quantity' => $data['quantity'],
            'price' => $data['price'],
            'image' => $data['image'],
            'category_id' => $data['category_id'],
        ]);

        return [
            'message' => 'Product stored successfully'
        ];
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}

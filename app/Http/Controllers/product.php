<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class product extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = DB::table('products') ->get() ->toArray();
        echo "<h2>Products</h2>";
        echo "<p><a href='product/create'>Create</a></p>";

        foreach($products as $product) {
        $product = get_object_vars($product);
        $id = $product['id'];
        $name = $product['name'];

        echo "<p>$id) $name <a href='product/$id/edit'>edit</a> || <a href='product/$id/delete'>delete</a></p>";
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request -> name ;
        $size = $request -> size ;
        $color = $request -> color ;
        $count_in_stock = $request -> count_in_stock ;
        DB::table('products') -> insert([
            "name" => $name,
            "size" => $size,
            "color" => $color,
            "count_in_stock" => $count_in_stock
        ]);
        return redirect('product');  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        echo "ali";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product=DB::table('products') ->where("id",$id) ->first();
        return view('products.edit',compact("product"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $name = $request -> name ;
        $size = $request -> size ;
        $color = $request -> color ;
        $count_in_stock = $request -> count_in_stock ;
        DB::table('products') ->where('id',$id) -> update([
            "name" => $name,
            "size" => $size,
            "color" => $color,
            "count_in_stock" => $count_in_stock
        ]);
        return redirect('product');  
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyed(string $id)
{
    DB::table('products')->where("id", $id)->delete();
    return redirect('product');  
}
}

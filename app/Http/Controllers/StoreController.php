<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
 
class StoreController extends Controller
{
    public function viewHome(){
        // view home\
    $products = Product::simplePaginate(5);
    
    
        return view('index')->with('products', $products);
    }

    public function viewPageSearch(Request $request){
        $products = Product::where('name', 'LIKE', "%$request->search%")->simplePaginate(5);

        return view('index')->with('products', $products);
    }

    public function insertProduct(Request $request){ 
        
        // Insert Items
        $image = $request->file('inputImage');
        $imageName = $image->getClientOriginalName();

        Storage::putFileAs('public/images', $image, $imageName);
        $imagePath = 'images/'.$imageName;

        DB::table('product')->insert([
            'image' => $imagePath, //hanya path. image masuk dalam storage/public/images
            'product name' => $request->inputName,
            'description' => $request->inputDescription,
            'price' => $request->inputPrice,
            'stock' => $request->inputStock

        ]);
        return redirect('/');

    }

    public function deleteProduct($productId){
        // DELETE ITEM
        DB::table('product')
        ->where('id', '=', $productId)
        ->delete();
        return redirect('/');
    }


}
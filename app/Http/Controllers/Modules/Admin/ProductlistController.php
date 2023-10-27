<?php
namespace App\Http\Controllers\Modules\Admin;
use App\Http\Controllers\Controller;
Use App\Models\Product;
use DB;

use Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(hi);
      
        return view("layouts.modules.admin.product_list");
    }
  
    public function productTable()
    {

            //// dd(hi);
        $product = Product::all();

        return response()->json([
            'product' => $product,
        ]);
    }
 
   
}
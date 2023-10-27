<?php
namespace App\Http\Controllers\Modules\Admin;
use App\Http\Controllers\Controller;
Use App\Models\Category;
use DB;

use Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryListTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(hi);
      
        return view("layouts.modules.admin.article_categorylist");
    }
  
    public function categorylistTable()
    {

            //dd(hi);
        $category = Category::all();

        // return response()->json([
        //     'category' => $category,
        // ]);
         //dd($category);
        return view("layouts.modules.admin.article_newcategorylist",['data' => $category]);
    }
 
   
}
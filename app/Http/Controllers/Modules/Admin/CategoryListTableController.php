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
  

    public  function addCategory(Request $request)
    {
     
        if ($request->categoryHiddenId) {
            $rules = array(
                'categoryname' => 'required',
               
               
               
            );
            $error = Validator::make($request->all(), $rules);
            if ($error->fails()) {
                return response()->json(['errors' => $error->errors()->all()]);
            }

            $category = Category::find($request->categoryHiddenId);
            $category->categoryname = $request->categoryname;
            $category->order = $request->order;
           
           
   
        
            $data = $category->save();
            $data = Category::find($category->id);
           

            //    dd($category->categoryname);
            

            return response()->json(['success' => 'Data updated successfully.', 'category_FormData' => $data]);

          }
        else
        {
        
            $rules = array(
               
               
            );
            $error = Validator::make($request->all(), $rules);
            if ($error->fails()) {
                return response()->json(['errors' => $error->errors()->all()]);
            }
           
            $category = new Category();
            $category->categoryname = $request->categoryname;
            $category->order = $request->order;
           
          
            
           
           
            $data = $category->save();
            $data = Category::find($category->id);
           
            //  dd( $userdetails->name);
              
            
        

            return response()->json(['success' => 'Data Added successfully.', 'category_FormData' => $data]);
          }
     }
    public function categoryTable()
    {   
         {
    
          
             $category = Category::all();
     
             return response()->json([
                 'category' => $category,
             ]);
         }
      
  }

 
    public function editCategory($id)
    {
        // dd(hi);
        $data = Category::find($id);
  
        return response()->json(['data' => $data]);
  
    }
  
    
  public function deleteCategory($id)
  {

      $category = Category::find($id);

      $category ->delete($id);

      return response()->json([

          'success' => 'Data deleted successfully!',

          'category ' => $category ,

      ]);

  }
 
   
}
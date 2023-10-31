<?php
namespace App\Http\Controllers\Modules\Admin;
use App\Http\Controllers\Controller;
use App\CommonFunction\CommonFunction;
Use App\Models\Product;
use App\Models\Attachement;
use Illuminate\Support\Facades\Storage;
use DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Response;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //   dd('hi');
      
        return view("layouts.modules.admin.productdetails");
    }
    public  function addProduct(Request $request)
    {
        //  dd('hi');
     
        if ($request->productHiddenId) {
            $rules = array(
                'productname' => 'required',
                'productcode' => 'required',
                'homepage' => 'required',
                'minimumrisk' => 'required',
                'maximumrisk' => 'required',
               
               
            );
            $error = Validator::make($request->all(), $rules);
            if ($error->fails()) {
                return response()->json(['errors' => $error->errors()->all()]);
            }

            $product = Product::find($request->productHiddenId);
            $product->productname = $request->productname;
       
            $product->productcode = $request->productcode;
            $product->homepage = $request->homepage;
            $product->minimumrisk = $request->minimumrisk;
            $product->maximumrisk = $request->maximumrisk;
            $product->randomrange = $request->randomrange;
            $product->timeplay1 = $request->time1;
            $product->timeplay2 = $request->time2;
            $product->timeplay3 = $request->time3;
            $product->timeplay4 = $request->time4;
            $product->profit1 = $request->profit1;
            $product->profit2 = $request->profit2;
            $product->profit3 = $request->profit3;
            $product->profit4 = $request->profit4;
            $product->loss1= $request->loss1;
            $product->loss2= $request->loss2;
            $product->loss3= $request->loss3;
            $product->loss4= $request->loss4;
            $product->earningratio = $request->earningratio;
            $product->floatingratio = $request->floatingratio;
            $product->mon = $request->monday;
            $product->tue = $request->tuesday;
            $product->wed = $request->wednesday;
            $product->thur = $request->thursday;
            $product->fri = $request->friday;
            $product->sat = $request->satarday;
            $product->sun = $request->sunday;
            $product->productnote = $request->productnote;
   
        
            $data = $product->save();
            $data = Product::find($product->id);
           
            $imageUpload = new CommonFunction();

            if ($request->hasFile('product_icon')) {
                
              $imageUpload->insertOrUpdateImage($request->title . 'image', 'PRODUCT_ICON', $product->id, $request->file('product_icon'));
          }
             
               
            

            return response()->json(['success' => 'Data updated successfully.', 'product_FormData' => $data]);

          }
        else
        {
        
            $rules = array(
                'productname' => 'required',
                'productcode' => 'required',
                'homepage' => 'required',
                'minimumrisk' => 'required',
                'maximumrisk' => 'required',
              
            );
            $error = Validator::make($request->all(), $rules);
            if ($error->fails()) {
                return response()->json(['errors' => $error->errors()->all()]);
            }
           
            $product = new Product();
            $product->productname = $request->productname;
            $product->productcode = $request->productcode;
            $product->homepage = $request->homepage;
            $product->producticon = $request->producticon;
            $product->minimumrisk = $request->minimumrisk;
            $product->maximumrisk = $request->maximumrisk;
            $product->randomrange = $request->randomrange;
            $product->timeplay1 = $request->time1;
            $product->timeplay2 = $request->time2;
            $product->timeplay3 = $request->time3;
            $product->timeplay4 = $request->time4;
            $product->profit1 = $request->profit1;
            $product->profit2 = $request->profit2;
            $product->profit3 = $request->profit3;
            $product->profit4 = $request->profit4;
            $product->loss1= $request->loss1;
            $product->loss2= $request->loss2;
            $product->loss3= $request->loss3;
            $product->loss4= $request->loss4;
            $product->earningratio = $request->earningratio;
            $product->floatingratio = $request->floatingratio;
            $product->mon = $request->monday;
            $product->tue = $request->tuesday;
            $product->wed = $request->wednesday;
            $product->thur = $request->thursday;
            $product->fri = $request->friday;
            $product->sat = $request->satarday;
            $product->sun = $request->sunday;
            $product->productnote = $request->productnote;
           
            $data = $product->save();
            $data = Product::find($product->id);
            $imageUpload = new CommonFunction();

          if ($request->hasFile('product_icon')) {
              
            $imageUpload->insertOrUpdateImage($request->title . 'image', 'PRODUCT_ICON', $product->id, $request->file('product_icon'));
        }
           
            //  dd( $product->name);
              
            
        

            return response()->json(['success' => 'Data Added successfully.', 'product_FormData' => $data]);
          }
     }
     public function productTable()
     {

        //  return view("layouts.modules.admin.product_list");
         $product = Product::all();
 
         return response()->json([
             'product' => $product,
         ]);
     }
  
  public function editProduct($id)
  {
      $data = Product::find($id);

      return response()->json(['data' => $data]);

  }

  public function deleteProduct($id)
  {

      $product = Product::find($id);

      $product->delete($id);

      return response()->json([

          'success' => 'Data deleted successfully!',

          'product' => $product,

      ]);

  }
}   
  





<?php
namespace App\Http\Controllers\Modules\Admin;
use App\Http\Controllers\Controller;
Use App\Models\Userdetails;
use DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //  dd('hi');
      
        return view("layouts.modules.admin.user");
    }
    public  function addUser(Request $request)
    {
     
        if ($request->userHiddenId) {
            $rules = array(
                'useraccount' => 'required',
                'name' => 'required',
                'login_pword' => 'required',
                'transaction_pword' => 'required',
                'balence' => 'required',
               
               
            );
            $error = Validator::make($request->all(), $rules);
            if ($error->fails()) {
                return response()->json(['errors' => $error->errors()->all()]);
            }

            $product = Userdetails::find($request->userHiddenId);
            $product->useraccount = $request->useraccount;
       
            $product->name = $request->name;
            $product->login_pword = $request->login_pword ;
            $product->transaction_pword = $request->transaction_pword;
            $product->balence = $request->balence;
            $product->member = $request->member;
            
           
   
        
            $data = $user->save();
            $data = Userdetails::find($user->id);
           

               
            

            return response()->json(['success' => 'Data updated successfully.', 'user_FormData' => $data]);

          }
        else
        {
        
            $rules = array(
                'useraccount' => 'required',
                'name' => 'required',
                'login_pword' => 'required',
                'transaction_pword' => 'required',
                'balence' => 'required',
               
            );
            $error = Validator::make($request->all(), $rules);
            if ($error->fails()) {
                return response()->json(['errors' => $error->errors()->all()]);
            }
           
            $userdetails = new Userdetails();
            $userdetails->useraccount = $request->useraccount;
       
            $userdetails->name = $request->name;
            $userdetails->login_pword = $request->login_pword ;
            $userdetails->transaction_pword = $request->transaction_pword;
            $userdetails->balence = $request->balence;
            $userdetails->member = $request->member;
            
           
           
            $data = $userdetails->save();
            $data = Userdetails::find($userdetails->id);
           
            //  dd( $userdetails->name);
              
            
        

            return response()->json(['success' => 'Data Added successfully.', 'user_FormData' => $data]);
          }
     }
     public function userTable()
     {

        //  return view("layouts.modules.admin.product_list");
         $user = Userdetails::all();
 
         return response()->json([
             'userdetails' => $userdetails,
         ]);
     }
  
  public function editUser($id)
  {
      $data = Userdetails::find($id);

      return response()->json(['data' => $data]);

  }

  public function deleteUser($id)
  {

      $userdetails = Userdetails::find($id);

      $userdetails ->delete($id);

      return response()->json([

          'success' => 'Data deleted successfully!',

          'userdetails ' => $userdetails ,

      ]);

  }
}   
  

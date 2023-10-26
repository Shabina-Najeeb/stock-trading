<?php
namespace App\Http\Controllers\Modules\Admin;
use App\Http\Controllers\Controller;
Use App\Models\Userdetails;
use DB;
use Response;
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
                'balance' => 'required',
               
               
            );
            $error = Validator::make($request->all(), $rules);
            if ($error->fails()) {
                return response()->json(['errors' => $error->errors()->all()]);
            }

            $userdetails = Userdetails::find($request->userHiddenId);
            $userdetails->useraccount = $request->useraccount;
       
            $userdetails->name = $request->name;
            $userdetails->userid = $request->userid;
            $userdetails->login_pword = $request->login_pword ;
            $userdetails->transaction_pword = $request->transaction_pword;
            $userdetails->balance = $request->balance;
            $userdetails->member = $request->member;
            
           
   
        
            $data = $userdetails->save();
            $data = Userdetails::find($userdetails->id);
           

               
            

            return response()->json(['success' => 'Data updated successfully.', 'user_FormData' => $data]);

          }
        else
        {
        
            $rules = array(
                'useraccount' => 'required',
                'name' => 'required',
                'login_pword' => 'required',
                'transaction_pword' => 'required',
                'balance' => 'required',
               
            );
            $error = Validator::make($request->all(), $rules);
            if ($error->fails()) {
                return response()->json(['errors' => $error->errors()->all()]);
            }
           
            $userdetails = new Userdetails();
            $userdetails->useraccount = $request->useraccount;
       
            $userdetails->name = $request->name;
            $userdetails->userid = $request->userid;
            $userdetails->login_pword = $request->login_pword ;
            $userdetails->transaction_pword = $request->transaction_pword;
            $userdetails->balance = $request->balance;
            $userdetails->member = $request->member;
            
           
           
            $data = $userdetails->save();
            $data = Userdetails::find($userdetails->id);
           
            //  dd( $userdetails->name);
              
            
        

            return response()->json(['success' => 'Data Added successfully.', 'user_FormData' => $data]);
          }
     }
     public function userTable()
     {

      
         $userdetails = Userdetails::all();
 
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
  

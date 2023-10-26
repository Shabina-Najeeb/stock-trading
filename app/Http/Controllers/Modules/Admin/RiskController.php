<?php
namespace App\Http\Controllers\Modules\Admin;
use App\Http\Controllers\Controller;

Use App\Models\Riskcontrol;
use DB;
use Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RiskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(hi);
      
        return view("layouts.modules.admin.risk_control");
    }
  

    public  function addRisk(Request $request)
    {
     
        if ($request->riskHiddenId) {
            $rules = array(
               
               
               
            );
            $error = Validator::make($request->all(), $rules);
            if ($error->fails()) {
                return response()->json(['errors' => $error->errors()->all()]);
            }

            $riskcontrol = Riskcontrol::find($request->riskHiddenId);
            $riskcontrol->guaranteed_time = $request->guaranteed_time;
            $riskcontrol->steady_time = $request->steady_time;
            $riskcontrol->win_ratio = $request->win_ratio;
            $riskcontrol->loss_ratio = $request->loss_ratio ;
            $riskcontrol->designated_client_losses = $request->designated_client_losses;
            $riskcontrol->customer_profit = $request->customer_profit;
            $riskcontrol->risk_control= $request->risk_control;
            $riskcontrol->risk_probability= $request->risk_probability;
            $data = $riskcontrol->save();
            $data = Riskcontrol::find($riskcontrol->id);
           

               
            

            return response()->json(['success' => 'Data updated successfully.', 'risk_FormData' => $data]);

          }
        else
        {
        
            $rules = array(
               
               
            );
            $error = Validator::make($request->all(), $rules);
            if ($error->fails()) {
                return response()->json(['errors' => $error->errors()->all()]);
            }
           
            $riskcontrol = new Riskcontrol();
            $riskcontrol->guaranteed_time = $request->guaranteed_time;
            $riskcontrol->steady_time = $request->steady_time;
            $riskcontrol->win_ratio = $request->win_ratio;
            $riskcontrol->loss_ratio = $request->loss_ratio ;
            $riskcontrol->designated_client_losses = $request->designated_client_losses;
            $riskcontrol->customer_profit = $request->customer_profit;
            $riskcontrol->risk_control= $request->risk_control;
            $riskcontrol->risk_probability= $request->risk_probability;
            
           
           
            $data = $riskcontrol->save();
            $data = Riskcontrol::find($riskcontrol->id);
           
            //  dd( $userdetails->name);
              
            
        

            return response()->json(['success' => 'Data Added successfully.','risk_FormData' => $data]);
          }
     }
     public function riskTable()
     {

      
         $riskcontrol = Riskcontrol::all();
 
         return response()->json([
             'riskcontrol' => $riskcontrol,
         ]);
     }
  
  public function editRisk($id)
  {
      $data = Riskcontrol::find($id);

      return response()->json(['data' => $data]);

  }

  public function deleteRisk($id)
  {

      $riskcontrol = Riskcontrol::find($id);

      $riskcontrol ->delete($id);

      return response()->json([

          'success' => 'Data deleted successfully!',

          'riskcontrol ' => $riskcontrol ,

      ]);

  }
}   
  


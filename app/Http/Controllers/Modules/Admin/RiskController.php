<?php
namespace App\Http\Controllers\Modules\Admin;
use App\Http\Controllers\Controller;



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
  

   
}
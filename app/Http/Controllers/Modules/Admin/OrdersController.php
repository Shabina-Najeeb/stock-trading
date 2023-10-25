<?php

namespace App\Http\Controllers\Modules\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    //
          
    public function index()
    {
        return view("layouts.modules.admin.order");
    }
}

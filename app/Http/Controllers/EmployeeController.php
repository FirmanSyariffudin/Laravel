<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// class EmployeeController extends Controller
// {
//     public function index (){
//         return "Hello Thats an Function or Method returned from controller employee";
//     }
// }

class EmployeeController extends Controller
{
    public function index(){
        $name="Firman Syariffudin";
        $job=["Frontend","Backend","Data Analys"];
        return view ('employee',['jeneng' => $name, 'jobdesk' => $job]);
    }
    
    public function form(){
        return view ('form');
    }
    public function progress(Request $request){
        $name = $request->input('name');
        $address = $request->input('address');
        return "Name: " .$name. "<br> Address: ".$address;
    }
}

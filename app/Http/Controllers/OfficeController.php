<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// class EmployeeController extends Controller
// {
//     public function index (){
//         return "Hello Thats an Function or Method returned from controller employee";
//     }
// }

class OfficeController extends Controller
{
    public function index($office){
        return $office;
    }
}
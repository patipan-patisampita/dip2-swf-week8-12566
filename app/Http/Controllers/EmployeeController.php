<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //Fetch the eloquent table
    public function index()
    {
        return view('pages.employee.index');
    }
}

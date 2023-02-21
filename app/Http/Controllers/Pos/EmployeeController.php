<?php

namespace App\Http\Controllers\Pos;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function allEmployee(){

        return view('frontEnd.employee.all_employee',[
            'employees'=>Employee::latest()->get(),
        ]);
    }

    public function addEmployee(){
        return view('frontEnd.employee.add_employee');

    }
}

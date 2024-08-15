<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Company;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employee = Employee::with(['getcompany' => function ($query) {
            $query->select('id', 'name');
        }])->paginate(10);
        // return $employee;
        return view('manageEmployee',compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $company = Company::all();

        return view('addEmployee', compact('company'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'username' => 'required|email',
            'phone' => 'required',
            'cid' => 'required'
        ], [
            'fname.required' => 'First Name is required',
            'lname.required' => 'Last Name is required',
            'username.required' => 'Email is required',
            'username.email' => 'Employee Email must be a valid Email address',
            'phone.required' => 'Phone is required',
            'cid.required' => 'Select a Company'
        ]);
        $employee = Employee::create([
            'firstname' => $request->fname,
            'lastname' => $request->lname,
            'email' => $request->username,
            'phone' => $request->phone,
            'cid' => $request->cid
        ])->save();
        if ($employee) {
            return redirect()->route('employee.index')->with('status', 'New Employeee Added Successfully');
        } else {
            return "Error";
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employee  = $employee = Employee::with(['getcompany' => function ($query) {
            $query->select('id', 'name');
        }])->find($id);
        return view('viewEmployee', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employee = Employee::with(['getcompany' => function ($query) {
            $query->select('id', 'name');
        }])->find($id);
        $company = Company::all();
        return view('editEmployee', compact('employee'), compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Employee::where('id', $id)->update([
            'firstname' => $request->fname,
            'lastname' => $request->lname,
            'email' => $request->username,
            'phone' => $request->phone,
            'cid' => $request->cid
        ]);
        return redirect()->route('employee.edit', $id);
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Employee::destroy($id);
        return redirect()->route('employee.index');
    }
}

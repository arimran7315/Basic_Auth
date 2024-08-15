<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $company = Company::paginate(10);
        return view('manageCompany',compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addCompany');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'username' =>'required|email',
            'logo' =>'required|image|dimensions:min_width=100,min_height=100'
        ],[
            'name.required' =>'Company Name is required',
            'username.required' =>'Company Email is required',
            'username.email' =>'Company Email must be a valid Email address',
            'logo.required' =>'Company Logo is required',
            'logo.image' => 'Logo Must be Jpg, jpeg or png Type',
            'logo.dimensions' => 'logo minimum 100x100px'
        ]);
        $path = $request->logo->store('company', 'public');
       $result = Company::create([
            'name' => $request->name,
            'email' => $request->username,
            'logo' => $path,
            'website' => $request->website
        ])->save();
        if($result){
         return redirect()->route('company.index')->with('message', 'New Company Added Successfully');;
        }else{
            return $result;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $company = Company::find($id);
        return view('viewCompany',compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $company = Company::find($id);
        return view('editCompany',compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        if(!$request->file('logo')){
            Company::where('id',$id)->update([
                'name' => $request->name,
                'email' => $request->username,
                'website' => $request->website
            ]);
            return redirect()->route('company.edit', $id);
        }else{
            $image_path = public_path("/storage/").$request->logo;

            if(file_exists($image_path)){
                @unlink($image_path);
            }
            $path = $request->logo->store('company','public');
            Company::where('id',$id)->update([
                'name' => $request->name,
                'email' => $request->username,
                'website' => $request->website,
                'logo' => $path
            ]);
            return "New Image";
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Company::destroy($id);
        return redirect()->route('company.index')->with('message', 'Company Deleted Successfully');
    }
}

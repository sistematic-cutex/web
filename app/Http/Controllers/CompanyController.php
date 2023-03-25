<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function index(){
        $companies = Company::all(); 
        return view ('companies.index', compact('company'));
    }
    public function store(Request $request){
        Company::create($request->all());
        return redirect()->route('compañias');
    }
    public function destroy($id){
        Company::find($id)->delete();
        return redirect()->route('compañias');
    }
    public function show($id){
        $companies = Company::find($id);
        return view('companies.show');
    }
    public function edit($id){
        $companies = Company::find($id);
        return view('companies.edit', compact('company'));
    }
}

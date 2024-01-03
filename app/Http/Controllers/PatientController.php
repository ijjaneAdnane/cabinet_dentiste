<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patient = Patient::all();
        return view('patients.index')->with('patients', $patient);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Patient::create($input);
        return redirect('patient')->with('flash_message', 'patient Addedd!'); 
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $patient = Patient::find($id);
        return view('patients.show')->with('patients', $patient);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $patient = Patient::find($id);
        return view('patients.edit')->with('patients', $patient);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $patient = Patient::find($id);
        $input = $request->all();
        $patient->update($input);
        return redirect('patient')->with('flash_message', 'patient Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Patient::destroy($id);
        return redirect('patient')->with('flash_message', 'patient deleted!');  
    }
}

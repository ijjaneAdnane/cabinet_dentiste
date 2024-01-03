<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultation = Consultation::all();
        return view('consultations.index')->with('consultations', $consultation); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('consultations.create');    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Consultation::create($input);
        return redirect('consultation')->with('flash_message', 'consultation Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $consultation = Consultation::find($id);
        return view('consultations.show')->with('consultations', $consultation);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $consultation = Consultation::find($id);
        return view('consultations.edit')->with('consultations', $consultation);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $consultation = Consultation::find($id);
        $input = $request->all();
        $consultation->update($input);
        return redirect('consultation')->with('flash_message', 'consultation Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Consultation::destroy($id);
        return redirect('consultation')->with('flash_message', 'consultation deleted!'); 
    }
}

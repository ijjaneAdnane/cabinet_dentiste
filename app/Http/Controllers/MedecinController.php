<?php

namespace App\Http\Controllers;

use App\Models\Medecin;
use Illuminate\Http\Request;

class MedecinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medecin = Medecin::all();
        return view('medecins.index')->with('medecins', $medecin);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('medecins.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Medecin::create($input);
        return redirect('medecin')->with('flash_message', 'medecin Addedd!'); 
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $medecin = Medecin::find($id);
        return view('medecins.show')->with('medecins', $medecin);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $medecin = Medecin::find($id);
        return view('medecins.edit')->with('medecins', $medecin);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $medecin = Medecin::find($id);
        $input = $request->all();
        $medecin->update($input);
        return redirect('medecin')->with('flash_message', 'medecin Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Medecin::destroy($id);
        return redirect('medecin')->with('flash_message', 'medecin deleted!');  
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Rendez_vous;
use Illuminate\Http\Request;

class Rendez_vousController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rdv = Rendez_vous::all();
        return view('rendez_vous.index')->with('rendezvous', $rdv);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rendez_vous.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Rendez_vous::create($input);
        return redirect('rendez_vous')->with('flash_message', 'you Add a meeting!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $rdv = Rendez_vous::find($id);
        return view('rendez_vous.show')->with('rendezvous', $rdv);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $rdv = Rendez_vous::find($id);
        return view('rendez_vous.edit')->with('rendezvous', $rdv);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $rdv = Rendez_vous::find($id);
        $input = $request->all();
        $rdv->update($input);
        return redirect('rendez_vous')->with('flash_message', 'Meeting Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Rendez_vous::destroy($id);
        return redirect('rendez_vous')->with('flash_message', 'Meeting deleted!');  
    }
}

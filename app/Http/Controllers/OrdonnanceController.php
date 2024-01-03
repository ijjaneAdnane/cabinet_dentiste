<?php

namespace App\Http\Controllers;

use App\Models\Ordonnance;
use Illuminate\Http\Request;
class OrdonnanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ordonnance = Ordonnance::all();
        return view('ordonnances.index')->with('ordonnances', $ordonnance); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ordonnances.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Ordonnance::create($input);
        return redirect('ordonnance')->with('flash_message', 'ordonnance Addedd!'); 
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $ordonnance = Ordonnance::find($id);
        return view('ordonnances.show')->with('ordonnances', $ordonnance);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $ordonnance = Ordonnance::find($id);
        return view('ordonnances.edit')->with('ordonnances', $ordonnance);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $ordonnance = Ordonnance::find($id);
        $input = $request->all();
        $ordonnance->update($input);
        return redirect('ordonnance')->with('flash_message', 'ordonnance Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Ordonnance::destroy($id);
        return redirect('ordonnance')->with('flash_message', 'ordonnance deleted!'); 
    }

   
}

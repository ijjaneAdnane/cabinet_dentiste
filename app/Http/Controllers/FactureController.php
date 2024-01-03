<?php

namespace App\Http\Controllers;

use App\Models\Facture;
use Illuminate\Http\Request;

class FactureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $facture = Facture::all();
        return view('factures.index')->with('factures', $facture);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('factures.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Facture::create($input);
        return redirect('facture')->with('flash_message', 'facture Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $facture = Facture::find($id);
        return view('factures.show')->with('factures', $facture);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $facture = Facture::find($id);
        return view('factures.edit')->with('factures', $facture);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $facture = Facture::find($id);
        $input = $request->all();
        $facture->update($input);
        return redirect('facture')->with('flash_message', 'facture Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Facture::destroy($id);
        return redirect('facture')->with('flash_message', 'facture deleted!');
    }
}

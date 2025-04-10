<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companie;

class CompanieController extends Controller
{

    public readonly Companie $companie;
    public function __construct()
    {
        $this->companie = new Companie();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = $this->user->all();
        return view('companies', ['companies' => $companies]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

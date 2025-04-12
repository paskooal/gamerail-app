<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GameCategory;

class GameCategoriesController extends Controller
{
    public readonly gameCategory $game_category;
    public function __construct() {
        $this->game_category = new gameCategory;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $game_categories = $this->game_category->all();
        return view('game_category.index', ['game_categories' => $game_categories]);
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
    public function edit(gameCategory $game_category)
    {
        return view('game_category.edit', ['gameCategory' => $game_category]);
        // var_dump($game_category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, gameCategory $gameCategory)
    {
        var_dump($gameCategory->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

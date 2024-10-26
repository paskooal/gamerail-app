<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\GameRequest;
use App\Models\Game;
class GameController extends Controller
{
    public function index()
    {
        $game = Game::all();
        $totalGames = $game->count();
        return view('game.index', compact('game', 'totalGames'));
    }

    public function create()
    {
       return view('game.create');
    }

    public function store(GameRequest $request)
    {
        $game = new Game;
        $game->title = $request->title;
        $game->price = $request->price;
        $game->developer = $request->developer;
        $game->publisher = $request->publisher;
        $game->description = $request->description;
        $game->save();
        
        return redirect('/games/index');
    }

    public function show(string $id)
    {
        //
    }
    public function edit(string $id)
    {
        $game = Game::findOrFail($id);
            return view('game.edit', compact('game'));
        }

    public function update(GameRequest $request)
    {
        $game = Game::findOrFail($request->id)->update($request->validated());
        $game = Game::all();
        $totalGames = $game->count();
        $message = 'O jogo: ' . $request->title . ' foi atualizado com sucesso!';
        return view('game.index', compact('game', 'message', 'totalGames'));
    }

    public function destroy(string $id)
    {
        $game = Game::findOrFail($id);
        $game->delete();
        return redirect('/games/index');
    }
}
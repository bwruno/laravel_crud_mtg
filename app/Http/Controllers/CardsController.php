<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardsController extends Controller
{
    /** Menu principal */
    public function index()
    {
        $card = Card::all();
        return view('cards.index', compact('card'));
    }

    /** Redirige a la página para crear una nueva carta */
    public function create()
    {
        return view('cards.create');
    }

    /** Recibe los datos de la carta y los guarda en la base de datos */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'color' => 'required',
            'rarity' => 'required',
            'mana_cost' => 'required|numeric',
            'description' => 'required',
            'expansion' => 'required',
        ]);
        $card = new Card();
            $card->name = $request->name;
            $card->type = $request->type;
            $card->color = $request->color;
            $card->rarity = $request->rarity;
            $card->mana_cost = $request->mana_cost;
            $card->description = $request->description;
            $card->expansion = $request->expansion;
        $card->save();
        return redirect()->route('cards.index')->with('success', 'Carta creada correctamente');
    }

    /** Redirige a la página para mostrar una carta */
    public function show(Card $card)
    {
        return view('cards.show', compact('card'));
    }

    /** Redirige a la página para editar una carta */
    public function edit(Card $card)
    {
        return view('cards.edit', compact('card'));
    }

    /** Recibe los datos de la carta y los actualiza en la base de datos */
    public function update(Request $request, Card $card)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'color' => 'required',
            'rarity' => 'required',
            'mana_cost' => 'required|numeric',
            'description' => 'required',
            'expansion' => 'required',
        ]);
        $card->name = $request->name;
        $card->type = $request->type;
        $card->color = $request->color;
        $card->rarity = $request->rarity;
        $card->mana_cost = $request->mana_cost;
        $card->description = $request->description;
        $card->expansion = $request->expansion;
        $card->save();
        return redirect()->route('cards.index')->with('success', 'Carta actualizada correctamente');
    }

    /** Remove the specified resource from storage. */
    public function destroy(string $id)
    {
        //
    }
}

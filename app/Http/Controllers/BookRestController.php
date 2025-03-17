<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookRestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $books = [
            ['id' => 1, 'title' => 'Harry Potter a Kameň mudrcov', 'author' => 'J.K. Rowling'],
            ['id' => 2, 'title' => 'Pán prsteňov: Spoločenstvo prsteňa','author' => 'J.R.R. Tolkien'],
            ['id' => 3, 'title' => '1984', 'author' => 'George Orwell' ],
            ];
            return view('books',['books' =>$books]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo "Služi na zobrazenie formulara pre pridanie novej knihy.";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $title = $request->input('title');
        return response("Kniha s nazovom '$title' bola vytvorena");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response("Zobrazujesa kniha s ID = $id.");
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

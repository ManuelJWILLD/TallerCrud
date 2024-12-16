<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;


class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Books = books::all();
        return view('products.index', compact('products', 'categories'));
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
        $Books = new Product();
        $Books->tittle = $request->tittle;
        $Books->date = $request->date;
        $Books-> pubdate = $request->pubdate;
        $Books->save();
        return redirect()->route('books.index');
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
        $Books = Books::find($id);
        $Books = Books::all();
        return view('books.edit', compact('Books'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Books = Books::find($id);
        $Books ->tittle = $request->tittle;
        $Books ->pubdate = $request->pubdate;
        $Books ->genre = $request->genre;
        $Books ->save();
        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Books = Books::find($id);
        $Books->delete();
        return redirect()->route('books.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Authors;

class AuthorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Authors::all();
        return view('authors.index', compact('authors'));
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
        $author = new Authors();
        $author->name = $request->name;
        $author->nacionality = $request->nacionality;
        $author->birth_date = $request->birth_date;
        $author->save();
        return redirect()->route('authors.index');
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
        $Authors = Authors::find($id);
        $Authors = Authors::all();
        return view('authors.edit', compact('authors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Authors = Authors::find($id);
        $Authors ->name = $request->name;
        $Authors ->nacionality = $request->nacionality;
        $Authors ->birth_date = $request->birth_date;
        $Authors ->save();
        return redirect()->route('authors.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Authors = Authors::find($id);
        $Authors->delete();
        return redirect()->route('authors.index');
    }
}

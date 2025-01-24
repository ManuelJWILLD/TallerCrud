<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Authors;


class AuthorApiController extends Controller
{
    public function index()
    {
        $authors = Authors::all();
        return response()->json($authors);
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
        return response()->json($author);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $author = Authors:: find($id);
        return response()->json($author);
    }

    public function nacionalidad(Request $request)
    {
        $nacionality = $request-> nacionality;
        $author = Authors:: where('nacionality', $nacionality)->get();
        return response()->json($author);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $author = Authors::find($id);
        return view('authors.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $author = Authors::find($id);
        $author ->name = $request->name;
        $author ->nacionality = $request->nacionality;
        $author ->birth_date = $request->birth_date;
        $author ->save();
        return response()->json($author);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $author = Authors::find($id);
        $author->delete();
        return redirect()->route('authors.index');
    }
}

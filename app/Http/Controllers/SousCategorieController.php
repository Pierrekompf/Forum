<?php

namespace App\Http\Controllers;

use App\Category;
use App\SousCategorie;
use Illuminate\Http\Request;

class SousCategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sousCategories = SousCategorie::all();

        return view('souscategorie.index', ['souscategories' => $sousCategories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('souscategorie.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $souscategory = new SousCategorie();
        $souscategory->name = $request->input('name');
        $souscategory->categorie_id = $request->input('categorie');

        $souscategory->save();

        return redirect()->route('souscategories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SousCategorie $sousCategory
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $sousCategory)
    {

        $sousCategory = SousCategorie::find($sousCategory);
        $category = Category::find($sousCategory->categorie_id);
        return view('souscategorie.view', ['souscategorie' => $sousCategory, 'category' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SousCategorie $sousCategorie
     * @return \Illuminate\Http\Response
     */
    public function edit($sousCategorie)
    {
        $sousCategorie = SousCategorie::find($sousCategorie);
        $categories = Category::all();
        return view('souscategorie.edit', ['souscategorie' => $sousCategorie, 'categories' => $categories]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\SousCategorie $sousCategorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $sousCategorie)
    {
        $sousCategorie = SousCategorie::find($sousCategorie);
        $sousCategorie->name = $request->input('name');
        $sousCategorie->categorie_id = $request->input('categorie');

        $sousCategorie->save();

        return redirect()->route('souscategories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SousCategorie $sousCategorie
     * @return \Illuminate\Http\Response
     */
    public function destroy($souscategorie)
    {
        SousCategorie::destroy($souscategorie);
        return redirect()->route('souscategories.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Message;
use App\SousCategorie;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(SousCategorie $sousCategorie)
    {
        return view('message.create', ['sousCategorie' => $sousCategorie]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, SousCategorie $sousCategorie)
    {
        return view('message.create', ['sousCategorie' => $sousCategorie]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, SousCategorie $sousCategorie)
    {
        $message = new Message();
        $message->texte = $request->input('texte');
        $message->user_id = auth()->user()->id;
        $message->sous_categorie_id = $sousCategorie->id;
        $message->save();

        return redirect()->route('souscategories.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
//        return view('message.view', ['message'=>$message]);
        return redirect()->route('souscategories.index');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        return redirect()->route('souscategories.index');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        return redirect()->route('souscategories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        return redirect()->route('souscategories.index');

    }
}

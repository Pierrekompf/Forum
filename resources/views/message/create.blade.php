@extends('layouts.app')

@section('content')
    <form action="{{ route('messages.store', $sousCategorie) }}" method="post">
        {{ csrf_field() }}
        <div>
            <label for="texte">Text</label>
            <input type="text" name="texte">
        </div>
        <input type="submit" name="valider" placeholder="valider">
    </form>
@endsection
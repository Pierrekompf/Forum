@extends('layouts.app')

@section('content')
    <form action="{{ route('souscategories.store') }}" method="post">
        {{ csrf_field() }}
        <div>
            <label for="name">Name</label>
            <input type="text" name="name">
            <br>
            <label for="categorie">Categorie</label>
            <select name="categorie" id="categorie">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <input type="submit" name="valider" placeholder="valider">
    </form>
@endsection
@extends('layouts.app')

@section('content')
    <form action="{{ route('souscategories.update', $souscategorie) }}" method="post">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ $souscategorie->name }}">
            <br>
            <label for="categorie">Categorie</label>
            <select name="categorie" id="categorie">
                @foreach($categories as $category)
                    @if($souscategorie->categorie_id == $category->id)
                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                    @else
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <input type="submit" name="valider" placeholder="valider">
    </form>
@endsection
@extends('layouts.app')

@section('content')
    <form action="{{ route('categories.update', $categorie->id )}}" method="post">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
        <div>
            <label for="name">Name</label>
            <input type="text" name="name">
        </div>
        <input type="submit" name="valider" placeholder="valider">
    </form>
@endsection
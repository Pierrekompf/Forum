@extends('layouts.app')

@section('content')
    <a href="{{route('souscategories.create')}}">Créer une nouvelle souscatégorie</a>
    <ul>
        @foreach($souscategories as $souscategory)
            <li>
                <a href="{{route('souscategories.show', ['sousCategory' => $souscategory->id])}}">{{$souscategory->name}}</a><br>
                <a href="{{route('souscategories.edit', ['souscategory' => $souscategory->id])}}">edit</a><br>
                <form action="{{ route('souscategories.destroy', $souscategory->id) }}" method="POST">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button class="btn-danger">Delete</button>
                </form>
            </li>
            <br>
        @endforeach
    </ul>
@endsection
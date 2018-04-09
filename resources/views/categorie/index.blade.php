@extends('layouts.app')

@section('content')
    <ul>
        @foreach($categories as $category)
            <li><a href="{{route('categories.show', ['categorie' => $category->id])}}">{{$category->name}}</a></li>
            <li><a href="{{route('categories.edit', ['categorie' => $category->id])}}">edit {{$category->name}}</a></li>
        @endforeach
    </ul>
@endsection